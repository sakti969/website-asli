<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Tiket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container py-5">
        <h1 class="fw-bold mb-4">Kelola Tiket</h1>
        <p>Di sini Anda bisa melihat dan mengelola tiket yang telah dibeli.</p>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID Tiket</th>
                    <th>Nama Pembeli</th>
                    <th>Jumlah Tiket</th>
                    <th>Acara</th>
                    <th>Tanggal Pembelian</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tickets as $ticket)
                <tr>
                    <td>{{ $ticket->id }}</td>
                    <td>{{ $ticket->buyer_name }}</td>
                    <td>{{ $ticket->quantity }}</td>
                    <td>{{ $ticket->match->name }}</td>
                    <td>{{ $ticket->created_at->format('d-m-Y H:i') }}</td>
                    <td>
                        <a href="{{ route('admin.editTicket', $ticket->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.deleteTicket', $ticket->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
