<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Tiket</title>
</head>
<body>
    <h1>{{ $match->home_team }} vs {{ $match->away_team }}</h1>
    <p>Tanggal: {{ \Carbon\Carbon::parse($match->match_date)->translatedFormat('d F Y H:i') }}</p>
    <p>Lokasi: {{ $match->location }}</p>
    <form action="{{ route('tickets.checkout') }}" method="POST">
        @csrf
        <input type="hidden" name="match_id" value="{{ $match->id }}">
        <label for="jumlah">Jumlah Tiket:</label>
        <input type="number" name="jumlah" min="1" required>
        <button type="submit">Checkout</button>
    </form>
</body>
</html>
