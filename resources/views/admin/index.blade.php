<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container py-5">
        <h1 class="fw-bold mb-4">Dashboard Admin</h1>
        <div class="list-group">
            <a href="{{ route('admin.manageTickets') }}" class="list-group-item list-group-item-action">
                Kelola Tiket
            </a>
            <!-- Tambahkan link lain sesuai kebutuhan -->
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
