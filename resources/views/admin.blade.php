<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
          crossorigin="anonymous">

    <style>
        body {
            background-color: #f9fafb;
        }
        .card {
            border-radius: 20px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        .btn-gradient {
            background: linear-gradient(to right, #ef4444, #f59e0b);
            border: none;
            color: white;
            font-weight: 600;
            transition: opacity 0.2s ease;
        }
        .btn-gradient:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <div class="container d-flex flex-column justify-content-center align-items-center vh-100">
        <div class="card p-5 text-center">
            <h1 class="fw-bold text-dark mb-3">Selamat Datang, Admin!</h1>
            <p class="text-muted mb-4">Anda berhasil login sebagai <strong>Administrator</strong>.</p>

            <div class="d-grid gap-2">
                <a href="{{ route('dashboard') }}" class="btn btn-primary">Masuk ke Dashboard</a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-gradient mt-2">Logout</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
