<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Tiket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container py-5">
        <h1 class="fw-bold mb-4">Edit Tiket</h1>

        <form action="{{ route('admin.updateTicket', $ticket->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="buyer_name" class="form-label">Nama Pembeli</label>
                <input type="text" class="form-control" id="buyer_name" name="buyer_name" value="{{ $ticket->buyer_name }}">
            </div>
            <div class="mb-3">
                <label for="quantity" class="form-label">Jumlah Tiket</label>
                <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $ticket->quantity }}">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
