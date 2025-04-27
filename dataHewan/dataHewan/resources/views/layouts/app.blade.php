<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Manajemen Hewan Peliharaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', sans-serif;
            background-color: #f4f6fa;
            color: #2c3e50;
            scroll-behavior: smooth;
        }

        header, footer {
            background: #4b3f72;
            color: white;
            padding: 1rem;
        }

        .navbar {
            background-color: #6c63ff;
            margin-bottom: 0; /* Hilangkan jarak bawah navbar */
        }

        .navbar-brand {
            font-weight: bold;
            color: white !important;
            font-size: 2rem;
        }

        .navbar-nav .nav-link {
            color: white !important;
            font-weight: 500;
        }

        .navbar-nav .nav-link:hover {
            text-decoration: underline;
        }

        .container {
            flex: 1;
            max-width: 100%;
            margin: 0 auto;
            padding: 1rem 2rem 2rem 2rem; /
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.04);
        }

        /* Tombol */
        .btn-primary, .btn-success, .btn-warning, .btn-danger {
            border-radius: 12px;
            padding: 8px 16px;
            font-weight: 600;
        }

        .btn-primary:hover, .btn-success:hover, .btn-warning:hover, .btn-danger:hover {
            opacity: 0.9;
            transform: scale(1.02);
            transition: 0.3s;
        }

        /* Tabel */
        table.table {
            background: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }

        table.table thead th {
            background-color: #4b3f72;
            color: white;
            text-align: center;
        }

        table.table tbody td {
            vertical-align: middle;
            text-align: center;
        }

        /* Pagination */
        .pagination {
            justify-content: right;
            margin-top: 20px;
        }

        .pagination .page-link {
            border-radius: 8px;
            color: #343a40;
        }

        .pagination .page-item.active .page-link {
            background-color: #6c63ff;
            border-color: #6c63ff;
        }

        /* Responsive Table */
        @media (max-width: 768px) {
            header h1 {
                font-size: 1.5rem;
            }

            .container {
                padding: 1rem;
            }

            table.table thead {
                display: none;
            }

            table.table, table.table tbody, table.table tr, table.table td {
                display: block;
                width: 100%;
            }

            table.table tr {
                margin-bottom: 15px;
                box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
                border-radius: 10px;
                overflow: hidden;
            }

            table.table td {
                text-align: right;
                padding-left: 50%;
                position: relative;
            }

            table.table td::before {
                content: attr(data-label);
                position: absolute;
                left: 15px;
                width: 45%;
                padding-left: 15px;
                font-weight: bold;
                text-align: left;
                color: #6c757d;
            }
        }

        footer {
            text-align: center;
            font-size: 0.9rem;
            font-weight: 300;
            margin-top: 30px;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid justify-content-center">
            <a class="navbar-brand text-center" href="#">Aplikasi Manajemen Data Hewan Peliharaan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <!-- Konten Halaman -->
    <div class="container">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer>
        &copy; 2025 Aplikasi Manajemen Hewan Peliharaan | Raya Riskiana Sakti
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
