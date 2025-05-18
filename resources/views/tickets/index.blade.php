<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Jadwal Pertandingan - GarudaTicket</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet"/>
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <!-- AOS CSS -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet"/>

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f8f9fa;
      overflow-x: hidden;
    }

    /* Loading Screen */
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

    .loader-inner {
      text-align: center;
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
    }

    .btn-kembali:hover {
      text-decoration: underline;
    }

    .event-card {
      background-color: white;
      border-radius: 16px;
      padding: 1.5rem;
      box-shadow: 0 6px 16px rgba(0,0,0,0.06);
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 1.5rem;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .event-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 10px 24px rgba(0,0,0,0.12);
    }

    .btn-beli {
      background-color: #d91c1c;
      color: white;
      padding: 10px 20px;
      font-weight: 600;
      border-radius: 10px;
      transition: 0.3s ease-in-out;
    }

    .btn-beli:hover {
      background-color: #a91313;
      transform: scale(1.05);
    }
  </style>
</head>
<body>

  <!-- Splash Loading -->
  <div id="loader">
    <div class="loader-inner">
      <img src="{{ asset('images/garuda.png') }}" alt="Loading Garuda">
      <p class="mt-3 text-danger fw-bold">Memuat Halaman...</p>
    </div>
  </div>

  <!-- Header -->
  <div class="header">
    <a href="{{ url('/') }}" class="btn btn-outline-danger rounded-pill fw-semibold d-flex align-items-center gap-2 position-absolute start-0 top-0 m-3 px-3 py-2 shadow-sm">
  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
    <path d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
    <path d="M8.354 11.354a.5.5 0 0 1-.708 0L4.5 8.207l3.146-3.147a.5.5 0 0 1 .708.708L5.707 8l2.647 2.646a.5.5 0 0 1 0 .708z"/>
    <path d="M11.5 8a.5.5 0 0 1-.5.5H4.707a.5.5 0 0 1 0-1H11a.5.5 0 0 1 .5.5z"/>
  </svg>
  Kembali
</a>
    <h1 class="fw-bold m-0" data-aos="zoom-in">GarudaTicket</h1>
    <img src="{{ asset('images/garuda.png') }}" alt="Logo Garuda">
  </div>

  <!-- Jadwal -->
  <div class="container py-5">
    <h3 class="mb-4 fw-bold text-danger" data-aos="fade-right">Jadwal Pertandingan</h3>

    <!-- Event Cards -->
    @php
      $matches = [
        ['tanggal' => '12 Juni 2025', 'lawan' => 'Argentina'],
        ['tanggal' => '19 Juni 2025', 'lawan' => 'Japan'],
        ['tanggal' => '27 Juni 2025', 'lawan' => 'Spain'],
        ['tanggal' => '2 Juli 2025', 'lawan' => 'Arab Saudi'],
        ['tanggal' => '6 Juli 2025', 'lawan' => 'Australia']
      ];
      // Fungsi untuk menentukan link sesuai lawan
        function getLinkHarga($lawan) {
            $lawan = strtolower(trim($lawan));
            switch ($lawan) {
                case 'australia':
                    return route('harga');
                case 'japan':
                    return route('harga2');
                case 'spain':
                    return route('harga3');
                default:
                    return route('harga');
            }
      }
    @endphp

    @foreach ($matches as $index => $match)
    <div class="event-card"
        data-aos="{{ $index % 2 === 0 ? 'fade-left' : 'fade-right' }}"
        data-aos-delay="{{ $index * 100 }}">
      <div>
        <small>{{ $match['tanggal'] }}</small>
        <h5 class="fw-bold mt-1">Indonesia vs {{ $match['lawan'] }}</h5>
        <p class="mb-0 text-muted">Gelora Bung Karno Stadium</p>
      </div>
      @auth
        <a href="{{ getLinkHarga($match['lawan']) }}" class="btn btn-beli">Beli Tiket</a>
      @else
        <a href="{{ route('login') }}" class="btn btn-beli">Beli Tiket</a>
      @endauth
    </div>
    @endforeach
  </div>

  <!-- Bootstrap & AOS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init({ duration: 800, once: true });

    // Loading splash logic
    window.addEventListener("load", () => {
      const loader = document.getElementById("loader");
      loader.style.opacity = "0";
      setTimeout(() => loader.style.display = "none", 500);
    });
  </script>
</body>
</html>
