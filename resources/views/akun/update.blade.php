<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Akun</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f3f4f6;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            max-width: 400px;
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #2563eb;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
            color: #333;
        }

        input {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 15px;
            font-size: 14px;
        }

        input:focus {
            outline: none;
            border-color: #2563eb;
            box-shadow: 0 0 4px rgba(37, 99, 235, 0.5);
        }

        .btn-submit {
            background-color: #2563eb;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-submit:hover {
            background-color: #1d4ed8;
        }

        .btn-back {
            display: inline-block;
            text-align: center;
            margin-top: 10px;
            text-decoration: none;
            color: #2563eb;
            font-size: 14px;
        }

        .btn-back:hover {
            text-decoration: underline;
        }

        .message {
            background-color: #e5f3ff;
            border-left: 4px solid #2563eb;
            color: #2563eb;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Update Akun</h1>
        
        @if(session('success'))
        <div class="message">
            {{ session('success') }}
        </div>
        @endif

        <form action="{{ route('update-akun') }}" method="POST">
            @csrf
            <label for="username">Username Baru</label>
            <input type="text" id="username" name="username" placeholder="Masukkan username baru" required>

            <label for="password">Password Baru</label>
            <input type="password" id="password" name="password" placeholder="Masukkan password baru" required>

            <label for="password_confirmation">Konfirmasi Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Konfirmasi password baru" required>

            <button type="submit" class="btn-submit">Simpan Perubahan</button>
        </form>

        <a href="{{ route('dashboard') }}" class="btn-back">Kembali ke Dashboard</a>
    </div>
</body>
</html>
