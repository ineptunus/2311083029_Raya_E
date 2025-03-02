<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Halaman Tidak Ditemukan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            padding: 50px;
        }
        .container {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
        }
        h1 {
            font-size: 50px;
            color: #ff5722;
        }
        p {
            font-size: 20px;
        }
        a {
            text-decoration: none;
            color: white;
            background: #ff5722;
            padding: 10px 20px;
            border-radius: 5px;
            display: inline-block;
            margin-top: 20px;
        }
        a:hover {
            background: #e64a19;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>😢 404</h1>
        <p>Mohon maaf, halaman yang Anda cari tidak ditemukan.</p>
        <a href="{{ url('/') }}">🔙 Kembali ke Beranda</a>
    </div>
</body>
</html>
