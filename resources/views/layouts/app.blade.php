<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'server')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        /* iOS Style Theme */
        body {
            font-family: -apple-system, BlinkMacSystemFont, "San Francisco", "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            background: linear-gradient(to bottom, #fff8f0, #ffe8d6); /* Warna oranye lembut */
            color: #333333;
            padding-top: 70px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .container-content {
            background-color: #ffffff;
            border-radius: 20px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); /* Soft shadow ala iOS */
            padding: 30px;
            margin: 20px auto;
            max-width: 800px;
            text-align: center;
            transition: all 0.3s ease-in-out;
        }

        .container-content:hover {
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.15);
            transform: translateY(-5px); /* Efek naik sedikit saat hover */
        }

        .btn-back {
            background-color: #ffb88c; /* Warna oranye lembut */
            color: #ffffff;
            text-decoration: none;
            padding: 8px 16px;
            border-radius: 25px;
            font-size: 0.9rem;
            transition: background-color 0.3s ease, transform 0.2s ease;
            position: fixed;
            top: 20px;
            left: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .btn-back:hover {
            background-color: #ff9e70;
            transform: scale(1.05);
        }

        .footer {
            background: #ffe4cc; /* Warna oranye pastel */
            color: #333333;
            text-align: center;
            padding: 10px 0;
            width: 100%;
            font-size: 0.9rem;
            box-shadow: 0 -2px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

    <!-- Back Button -->
    <a href="javascript:history.back()" class="btn-back">← Kembali</a>

    <!-- Main Content -->
    <div class="container">
        <div class="container-content">
            @yield('content')
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        &copy; Yesi Dalila Anwar - SI 2
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
