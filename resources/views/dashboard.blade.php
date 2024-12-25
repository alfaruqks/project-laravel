<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            margin: 0;
        }

        .navbar {
            background-color: #2563eb;
            color: #fff;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar .logo {
            font-size: 20px;
            font-weight: bold;
        }

        .navbar .menu a {
            color: #fff;
            text-decoration: none;
            margin-left: 15px;
        }

        .navbar .menu a:hover {
            text-decoration: underline;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .card {
            background-color: #f9fafb;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            transition: background-color 0.3s, box-shadow 0.3s;
            cursor: pointer;
        }

        .card:hover {
            background-color: #e5f3ff;
            box-shadow: 0 4px 8px rgba(59, 130, 246, 0.2);
        }

        .card a {
            text-decoration: none;
            color: #2563eb;
            font-weight: bold;
            display: block;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="logo">My Dashboard</div>
        <div class="menu">
            <a href="{{ route('logout') }}">Logout</a>
        </div>
    </div>
    <div class="container">
        <h1>Dashboard</h1>
        <div class="grid">
            <div class="card">
                <a href="{{ route('barang.index') }}">Kelola Barang</a>
            </div>
            <div class="card">
                <a href="{{ route('penjualan.index') }}">Kelola Penjualan</a>
            </div>
            <div class="card">
                <a href="{{ route('update-akun') }}">Update Akun</a>
            </div>
        </div>
    </div>
</body>
</html>
