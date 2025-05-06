<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garuda Ticket | Tiket Resmi Timnas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .feature-icon {
            font-size: 2.5rem;
            color: #dc3545;
        }
        .section-title {
            font-weight: bold;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body class="bg-light">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-danger bg-danger navbar-dark shadow-sm">
    <div class="container">
      <!-- Logo dan Nama Brand di Kiri -->
      <a class="navbar-brand fw-bold d-flex align-items-center" href="#">
        <img src="images/garuda.png" alt="Garuda Logo" width="30" height="30" class="me-2">
        <span>GarudaTicket</span>
      </a>
  
      <!-- Hamburger Toggle -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <!-- Menu Navigasi -->
      <div class="collapse navbar-collapse" id="navbarMain">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#keunggulan">Keunggulan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#info">Info</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#hubungi">Hubungi</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<!-- Hero Section -->
<section style="background: url('{{ asset('images/bg-hero.jpg') }}') no-repeat center center; background-size: cover; color: white;" class="py-5 text-center">
    <div class="container">
    <div class="bg-white bg-opacity-75 p-4 rounded-3 d-inline-block">
            <h1 class="display-5 fw-bold text-danger">Ayo Dukung Timnas di Kualifikasi Piala Dunia 2026!</h1>
            <p class="lead text-dark">Dapatkan tiket pertandingan resmi dengan mudah dan cepat.</p>
            <a href="/tiket" class="btn btn-danger btn-lg mt-3 fw-bold">Beli Tiket Sekarang</a>
        </div>
    </div>
</section>

<!-- Keunggulan -->
<section id="keunggulan" class="py-5">
    <div class="container">
        <h2 class="section-title text-center text-danger">Apa Keunggulan Kami?</h2>
        <div class="row text-center">
            <div class="col-md-4">
                <div class="feature-icon mb-2">🎟</div>
                <h5>Resmi & Aman</h5>
                <p>Garansi tiket resmi langsung dari federasi sepak bola nasional.</p>
            </div>
            <div class="col-md-4">
                <div class="feature-icon mb-2">⚡</div>
                <h5>Proses Cepat</h5>
                <p>Tinggal klik, bayar, dan tiket langsung dikirim ke email Anda.</p>
            </div>
            <div class="col-md-4">
                <div class="feature-icon mb-2">📲</div>
                <h5>Digital Ready</h5>
                <p>Tiket QR bisa langsung discan di pintu masuk stadion tanpa cetak.</p>
            </div>
        </div>
    </div>
</section>

<!-- Info -->
<section id="info" class="py-5 bg-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4">
                <img src="{{ asset('images/stadion.jpg') }}" alt="Stadion GBK" class="img-fluid rounded shadow">    
            </div>
            <div class="col-md-6">
                <h3 class="text-danger fw-bold mb-3">Tentang Layanan Kami</h3>
                <p>Kami percaya bahwa setiap suporter berhak mendapatkan akses tiket yang aman, nyaman, dan cepat.</p>
                <ul>
                    <li>✔ Sistem pemesanan otomatis</li>
                    <li>✔ Dukungan pembayaran lokal & internasional</li>
                    <li>✔ Langsung terhubung dengan gate stadion</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Hubungi -->
<section id="hubungi" class="py-5 text-center bg-light">
    <div class="container">
        <h2 class="section-title text-danger">Hubungi Kami</h2>
        <p class="mb-2">Tim kami siap membantu 24/7 seputar pemesanan tiket.</p>
        <p>
            📧 Email: <a href="mailto:cs@garudaticket.id">cs@garudaticket.id</a> <br>
            📱 WhatsApp: <a href="https://wa.me/6281122334455" target="_blank">+62 811-2233-4455</a>
        </p>
    </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3">
    &copy; 2025 GarudaTicket. Seluruh hak cipta dilindungi.
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>