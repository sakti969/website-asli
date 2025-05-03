<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ticketing</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #fff;
      font-family: 'Poppins', sans-serif;
    }
    .header {
      background-color: #d91c1c;
      color: white;
      text-align: center;
      padding: 2rem 0;
      position: relative;
    }
    .header img {
      width: 100px;
      position: absolute;
      top: 10px;
      right: 20px;
    }
    .event-card {
      border: 1px solid #ddd;
      border-radius: 12px;
      padding: 1rem;
      margin-bottom: 1rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .btn-beli {
      background-color: #d91c1c;
      color: white;
      border: none;
    }
    .btn-beli:hover {
      background-color: #b81818;
    }
  </style>
</head>
<body>

<div class="header d-flex align-items-center justify-content-center position-relative">
  <!-- Tombol Kembali -->
  <a href="{{ url()->previous() }}" class="btn btn-light position-absolute start-0 ms-3 mt-2">
  Kembali
</a>

  <!-- Judul -->
  <h1 class="fw-bold m-0">Ticketing</h1>

  <!-- Gambar Garuda -->
  <img src="{{ asset('images/garuda.png') }}" alt="Garuda">
</div>

  <div class="container py-5">
    <h3 class="mb-4">Jadwal Pertandingan yang Akan Datang</h3>

    <div class="event-card">
      <div>
        <small>12 Juni 2025</small>
        <h5 class="fw-bold">Indonesia vs Argentina</h5>
        <p class="mb-0">Gelora Bung Karno Stadium</p>
      </div>
      <a href="{{ route('login') }}" class="btn btn-beli">Beli Tiket</a>
    </div>

    <div class="event-card">
      <div>
        <small>19 Juni 2025</small>
        <h5 class="fw-bold">Indonesia vs Japan</h5>
        <p class="mb-0">Gelora Bung Karno Stadium</p>
      </div>
      <a href="{{ route('login') }}" class="btn btn-beli">Beli Tiket</a>
    </div>

    <div class="event-card">
      <div>
        <small>27 Juni 2025</small>
        <h5 class="fw-bold">Indonesia vs Spain</h5>
        <p class="mb-0">Gelora Bung Karno Stadium</p>
      </div>
      <a href="{{ route('login') }}" class="btn btn-beli">Beli Tiket</a>
    </div>

    <div class="event-card">
      <div>
        <small>2 Juli 2025</small>
        <h5 class="fw-bold">Indonesia vs Arab Saudi</h5>
        <p class="mb-0">Gelora Bung Karno Stadium</p>
      </div>
      <a href="{{ route('login') }}" class="btn btn-beli">Beli Tiket</a>
    </div>

    <div class="event-card">
      <div>
        <small>6 Juli 2025</small>
        <h5 class="fw-bold">Indonesia vs Australia</h5>
        <p class="mb-0">Gelora Bung Karno Stadium</p>
      </div>
      <a href="{{ route('login') }}" class="btn btn-beli">Beli Tiket</a>
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>