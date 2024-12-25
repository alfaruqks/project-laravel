<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Barang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #2563eb;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f9fafb;
        }

        tr:hover {
            background-color: #e5f3ff;
        }

        .button-group {
            margin-bottom: 20px;
            
        }

        .button-group a {
            text-decoration: none;
            padding: 10px 15px;
            background-color: #2563eb;
            color: #fff;
            border-radius: 5px;
            transition: background-color 0.3s;
                
        }

        .button-group a:hover {
            background-color: #1d4ed8;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Kelola Barang</h1>
        <div class="button-group">
            <a href="{{ route('dashboard') }}">Kembali ke Dashboard</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($barang as $item)
                <tr>
                    <td>{{ $item->kode_brg }}</td>
                    <td>{{ $item->nama_brg }}</td>
                    <td>{{ $item->stok }}</td>
                    <td>Rp{{ number_format($item->harga_jual, 0, ',', '.') }}</td>
                    <td>
                        <button>Edit</button>
                        <button>Hapus</button>
                        <button>Tambah</button>
                        <button>Cancel</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
