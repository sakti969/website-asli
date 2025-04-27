<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Ticketing Timnas Indonesia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container py-5">
        <h1 class="fw-bold mb-4">Selamat datang di Sistem Ticketing Timnas Indonesia!</h1>
        <p>Di sini Anda bisa membeli tiket untuk pertandingan Timnas Indonesia.</p>

        <div class="mt-4">
            <a href="{{ route('tickets.index') }}" class="btn btn-primary">Lihat Daftar Tiket</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
