<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Checkout - GarudaTicket</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />
  <!-- AOS CSS -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f8f9fa;
      overflow-x: hidden;
      padding-bottom: 70px;
      margin: 0;
    }

    #loader {
      position: fixed;
      top: 0; left: 0;
      width: 100%;
      height: 100%;
      background: white;
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 9999;
    }

    .loader-inner img {
      width: 80px;
      animation: zoomIn 1s ease-in-out infinite alternate;
    }

    @keyframes zoomIn {
      from { transform: scale(1); }
      to { transform: scale(1.2); }
    }

    .header {
      background: linear-gradient(to right, #b30000, #e60000);
      color: white;
      padding: 2rem 1rem;
      text-align: center;
      position: relative;
      /* Hilangkan margin-top karena tanpa navbar */
      margin-top: 0;
    }

    .header img {
      position: absolute;
      right: 1rem;
      top: 1rem;
      width: 70px;
    }

    .btn-kembali {
      position: absolute;
      left: 1rem;
      top: 1rem;
      color: white;
      font-weight: 500;
      text-decoration: none;
      display: flex;
      align-items: center;
      gap: 0.5rem;
      padding: 0.4rem 1rem;
      border: 1.5px solid white;
      border-radius: 50px;
      transition: background-color 0.3s, color 0.3s;
    }

    .btn-kembali:hover {
      background-color: white;
      color: #b30000;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <!-- Loader -->
  <div id="loader">
    <div class="loader-inner text-center">
      <img src="{{ asset('images/garuda.png') }}" alt="Loading Garuda" />
      <p class="mt-3 text-danger fw-bold">Memuat Halaman...</p>
    </div>
  </div>
  
  <!-- Header -->
  <header class="header" data-aos="zoom-in">
    <a href="{{ url()->previous() }}" class="btn-kembali position-absolute start-0 top-0 m-3">
      <i class="bi bi-arrow-left-circle"></i> Kembali
    </a>
    <h1 class="fw-bold m-0">Checkout Tiket</h1>
    <img src="{{ asset('images/garuda.png') }}" alt="Logo Garuda" />
  </header>

<!-- Main Content -->
<main class="container my-5" data-aos="fade-up">
  <div class="card shadow-sm p-4 text-center">
    <i class="bi bi-check-circle-fill text-success" style="font-size: 5rem;"></i>
    <h3 class="mt-4 fw-bold">Pembayaran Berhasil</h3>
    <p>Terima kasih telah melakukan pembayaran. Tiket Anda sudah dikonfirmasi.</p>
    <a href="{{ url('/') }}" class="btn btn-danger rounded-pill mt-3" style="width: 190px; padding: 10px 0; display: block; margin: 0 auto;">
    Kembali ke Beranda
    </a>
  </div>
</main>


  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- AOS JS -->
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

  <script>
    AOS.init();

    // Hilangkan loader setelah halaman siap
    window.addEventListener('load', () => {
      const loader = document.getElementById('loader');
      if(loader) {
        loader.style.display = 'none';
      }
    });
  </script>
</body>
</html>
