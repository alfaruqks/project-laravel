<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjualan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #2563eb;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
        }

        th {
            background-color: #2563eb;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9fafb;
        }

        .btn {
            padding: 8px 12px;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin: 2px;
        }

        .btn-add {
            background-color: #2563eb;
        }

        .btn-cancel {
            background-color: #f59e0b;
        }

        .btn-delete {
            background-color: #ef4444;
        }

        .btn:hover {
            opacity: 0.8;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        input {
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .form-container {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Kelola Penjualan</h1>

        @if(session('success'))
            <p style="color: green;">{{ session('success') }}</p>
        @endif

        <div class="form-container">
            <form action="{{ route('penjualan.store') }}" method="POST">
                @csrf
                <input type="text" name="nama_barang" placeholder="Nama Barang" required>
                <input type="number" name="jumlah" placeholder="Jumlah" required>
                <input type="number" name="harga_total" placeholder="Harga Total" required>
                <button type="submit" class="btn btn-add">Tambah Penjualan</button>
            </form>
        </div>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>Harga Total</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($penjualan as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->nama_barang }}</td>
                        <td>{{ $item->jumlah }}</td>
                        <td>Rp{{ number_format($item->harga_total, 0, ',', '.') }}</td>
                        <td>{{ $item->status }}</td>
                        <td>
                            <form action="{{ route('penjualan.cancel', $item->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-cancel">Batalkan</button>
                            </form>
                            <form action="{{ route('penjualan.destroy', $item->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-delete">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
