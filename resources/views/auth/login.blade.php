<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to bottom, #ffedd5, #ffdab9); /* Latar oranye lembut */
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            color: #333;
        }

        .card {
            background: #fff; /* Card putih bersih ala iOS */
            border: none;
            border-radius: 25px; /* Sudut melengkung */
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15); /* Bayangan lembut */
            width: 90%;
            max-width: 400px;
            padding: 30px;
            text-align: center;
        }

        .card-title {
            font-size: 1.8rem;
            font-weight: 600;
            color: #ff6f00; /* Warna oranye utama */
            margin-bottom: 20px;
        }

        .form-label {
            text-align: left;
            font-weight: 600;
            color: #444;
        }

        .form-control {
            border: 1px solid #ccc;
            border-radius: 15px;
            padding: 10px 15px;
            box-shadow: none;
            transition: border 0.3s ease-in-out;
        }

        .form-control:focus {
            border-color: #ff6f00; /* Fokus oranye */
            outline: none;
            box-shadow: 0 0 5px rgba(255, 111, 0, 0.3);
        }

        .btn-primary {
            background-color: #ff6f00;
            border: none;
            border-radius: 20px;
            padding: 10px;
            font-size: 1rem;
            font-weight: 600;
            color: white;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        .btn-primary:hover {
            background-color: #e65c00; /* Warna oranye lebih gelap */
        }

        .alert {
            background-color: #ffccbc; /* Alert oranye lembut */
            border-radius: 15px;
            color: #b71c1c;
            font-size: 0.9rem;
        }

        .alert ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
    </style>
</head>
<body>

    <div class="card">
        <h2 class="card-title">Login</h2>

        @if ($errors->any())
            <div class="alert alert-danger mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-4 text-start">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan email" required>
            </div>
            <div class="mb-4 text-start">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
