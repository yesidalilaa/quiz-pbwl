<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to bottom, #4b0082, #483d8b); /* Warna gradasi ungu */
            color: #f0f0f0;
            padding-top: 10px; /* Space for navbar */
            min-height: 100vh;
        }

        .navbar {
            background-color: #6a5acd; /* Warna ungu terang */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        }

        .navbar-brand, .navbar-nav .nav-link {
            color: #ffffff !important;
        }

        .navbar-nav .nav-link:hover {
            color: #ffd700 !important; 
        }

        .content {
            padding: 40px;
        }

        .card {
            background-color: #483d8b; /* Warna ungu gelap */
            border: none;
            border-radius: 15px;
            color: #ffffff;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card-header {
            background-color: #6a5acd; /* Warna ungu terang */
            font-weight: bold;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .btn-light {
            background-color: #7b68ee;
            color: #ffffff;
            border: none;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn-light:hover {
            background-color: #4b0082;
            transform: scale(1.05); /* Sedikit membesar saat hover */
        }

        .footer {
            background-color: #483d8b; /* Warna ungu gelap */
            color: #ffffff;
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
            box-shadow: 0 -4px 6px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to bottom, #fff7ed, #ffedd5); /* Gradasi oranye lembut */
            margin: 0;
            padding: 0;
            min-height: 100vh;
        }

        /* Navbar iOS Style */
        .navbar {
            background-color: #ff8c42; /* Warna oranye lembut */
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: 600;
            color: #fff;
        }

        .navbar-nav .nav-link {
            color: #fff;
            font-weight: 500;
        }

        .navbar-nav .nav-link:hover {
            color: #ffe6c9; /* Efek hover */
        }

        .content {
            padding: 20px;
            margin-top: 20px;
        }

        /* Card iOS Style */
        .card {
            background-color: #ffffff;
            border: none;
            border-radius: 20px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-top: 25px;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 30px rgba(0, 0, 0, 0.15);
        }

        .card-header {
            background: transparent;
            font-size: 1.1rem;
            font-weight: 600;
            color: #ff6f00; /* Warna oranye lembut */
            text-align: center;
        }

        .btn-light {
            background-color: #ff8c42; /* Warna oranye tombol */
            color: white;
            font-weight: 500;
            border-radius: 15px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn-light:hover {
            background-color: #e67839;
            transform: scale(1.05);
        }

        h1 {
            text-align: center;
            color: #ff6f00;
            font-weight: bold;
            margin-top: 15px;
            margin-bottom: 5px;

        }

        /* Footer */
        .footer {
            background-color: #ff8c42;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            margin-top: 19%;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">You're logged in!</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-light text-white">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="content">
        <div class="container">
            <h1>Selamat Datang di Dashboard</h1>
            <div class="row">
                <!-- Card 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-header">Golongan</div>
                        <div class="card-body text-center">
                            <p class="card-text">Kelola data golongan di sini.</p>
                            <a href="{{ route('golongan.index') }}" class="btn btn-light w-75">Lihat Golongan</a>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-header">User</div>
                        <div class="card-body text-center">
                            <p class="card-text">Kelola data user di sini.</p>
                            <a href="{{ route('user.index') }}" class="btn btn-light w-75">Lihat User</a>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-header">Pelanggan</div>
                        <div class="card-body text-center">
                            <p class="card-text">Kelola data pelanggan di sini.</p>
                            <a href="{{ route('pelanggan.index') }}" class="btn btn-light w-75">Lihat Pelanggan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; Yesi Dalila Anwar - SI 2</p>
    </div> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
