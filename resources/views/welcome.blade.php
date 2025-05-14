<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Garuda Ticket | Tiket Resmi Timnas Indonesia</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
    }
    .navbar-brand img {
      margin-right: 10px;
    }
    .hero {
      background: linear-gradient(to bottom, rgba(0,0,0,0.5), rgba(220,53,69,0.8)), url('{{ asset("images/bg-hero.jpg") }}') center/cover no-repeat;
      color: white;
      padding: 120px 0;
    }
    .hero h1, .hero p {
      color: #fff;
    }
    .feature-icon {
      font-size: 2.5rem;
      color: #dc3545;
    }
    .info-icon {
      color: #198754;
    }
    footer {
      background-color: #212529;
    }
  </style>
</head>
<body class="bg-light">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-danger sticky-top shadow-sm">
  <div class="container-fluid px-4">
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="images/garuda.png" alt="Garuda Logo" width="35" height="35">
      <span class="fw-bold ms-2">GarudaTicket</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarMain">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#keunggulan">Keunggulan</a></li>
        <li class="nav-item"><a class="nav-link" href="#info">Info</a></li>
        <li class="nav-item"><a class="nav-link" href="#hubungi">Hubungi</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<section class="hero text-center" data-aos="fade-down">
  <div class="container">
    <h1 class="display-4 fw-bold">Dukung Timnas Indonesia di Kualifikasi Piala Dunia 2026!</h1>
    <p class="lead mt-3">Pesan tiket resmi dengan mudah, cepat, dan aman.</p>
    <a href="/tiket" class="btn btn-light text-danger fw-bold mt-4 px-4 py-2">Beli Tiket Sekarang</a>
  </div>
</section>

<!-- Keunggulan -->
<section id="keunggulan" class="py-5" data-aos="fade-up">
  <div class="container">
    <h2 class="section-title text-center text-danger mb-4" data-aos="fade-down">Apa Keunggulan Kami?</h2>
    <div class="row text-center">
      <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="100">
        <div class="feature-icon mb-3"><i class="bi bi-shield-check"></i></div>
        <h5>Resmi & Aman</h5>
        <p>Tiket langsung dari federasi sepak bola nasional.</p>
      </div>
      <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="200">
        <div class="feature-icon mb-3"><i class="bi bi-lightning-charge"></i></div>
        <h5>Proses Kilat</h5>
        <p>Transaksi cepat, tiket langsung ke email.</p>
      </div>
      <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="300">
        <div class="feature-icon mb-3"><i class="bi bi-phone"></i></div>
        <h5>Tanpa Cetak</h5>
        <p>Gunakan tiket QR langsung dari smartphone Anda.</p>
      </div>
    </div>
  </div>
</section>

<!-- Info -->
<section id="info" class="py-5 bg-white" data-aos="fade-up">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 mb-4" data-aos="fade-right">
        <img src="{{ asset('images/stadion.jpg') }}" alt="Stadion GBK" class="img-fluid rounded shadow">
      </div>
      <div class="col-md-6" data-aos="fade-left">
        <h3 class="text-danger fw-bold mb-3">Tentang Layanan Kami</h3>
        <p>Kami menghadirkan kemudahan untuk seluruh suporter setia Timnas.</p>
        <ul class="list-unstyled">
          <li class="mb-2"><i class="bi bi-check-circle-fill info-icon me-2"></i>Sistem booking otomatis</li>
          <li class="mb-2"><i class="bi bi-check-circle-fill info-icon me-2"></i>Pembayaran lokal (VA, e-wallet, dsb)</li>
          <li><i class="bi bi-check-circle-fill info-icon me-2"></i>Tiket langsung terhubung ke gate stadion</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Hubungi -->
<section id="hubungi" class="py-5 text-center bg-light" data-aos="fade-up">

  <div class="container">
    <h2 class="section-title text-danger mb-3">Hubungi Kami</h2>
    <p class="mb-2">Tim support kami siap 24/7 membantu Anda.</p>
    <p>
      📧 <a href="mailto:cs@garudaticket.id" class="text-danger fw-bold">cs@garudaticket.id</a><br>
      📱 <a href="https://wa.me/6281122334455" target="_blank" class="text-danger fw-bold">+62 811-2233-4455</a>
    </p>
  </div>
</section>

<!-- Footer -->
<footer class="text-white text-center py-4">
  <div class="container">
    <div class="row">
      <div class="col-md-6 text-md-start">
        &copy; 2025 GarudaTicket. Seluruh hak cipta dilindungi.
      </div>
      <div class="col-md-6 text-md-end">
        <a href="#keunggulan" class="text-white me-3">Keunggulan</a>
        <a href="#info" class="text-white me-3">Info</a>
        <a href="#hubungi" class="text-white">Hubungi</a>
      </div>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000, // durasi animasi (ms)
    once: true      // hanya animasi sekali saja
  });
</script>
</body>
</html>
