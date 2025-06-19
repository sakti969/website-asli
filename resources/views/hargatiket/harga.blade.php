<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Harga Tiket - GarudaTicket</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f8f9fa;
      overflow-x: hidden;
      padding-bottom: 70px;
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

    .header .btn-kembali {
      position: absolute;
      left: 1rem;
      top: 1rem;
      color: white;
      font-weight: 500;
    }

    .qty-selector {
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .qty-selector button {
      width: 35px;
      height: 35px;
      font-size: 1.2rem;
      font-weight: bold;
      border: 1.5px solid #dc3545;
      border-radius: 50%;
      background: white;
      color: #dc3545;
      transition: all 0.2s ease;
    }

    .qty-selector button:hover {
      background: #dc3545;
      color: white;
    }

    .qty-selector input {
      font-weight: bold;
      color: #b30000;
      background-color: #fff0f0;
      border: 1.5px solid #dc3545;
      border-radius: 0.375rem;
      text-align: center;
      width: 60px;
      margin: 0 10px;
    }

    .card h5 {
      font-size: 1.1rem;
    }

    .btn-lg {
      font-size: 1.1rem;
    }

    .card-body {
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }
  </style>
</head>
<body>
  <!-- Header -->
  <div class="header">
    <a href="{{ url()->previous() }}" class="btn btn-outline-light rounded-pill d-flex align-items-center gap-2 position-absolute start-0 top-0 m-3 px-3 py-2 shadow-sm">
      <i class="bi bi-arrow-left-circle"></i> Kembali
    </a>
    <h1 class="fw-bold m-0" data-aos="zoom-in">GarudaTicket</h1>
    <img src="{{ asset('images/garuda.png') }}" alt="Logo Garuda" />
  </div>

  <!-- Judul -->
  <h2 class="fw-bold text-center mt-4" data-aos="zoom-in">Harga Tiket Indonesia vs Argentina</h2>

  <!-- Harga Tiket -->
  <div class="container my-5" data-aos="fade-up">
    <h4 class="fw-bold mb-4 text-center">Pilih Kategori Tiket Anda</h4>

    <form id="checkout-form" action="{{ route('transaksi.store') }}" method="POST">
      @csrf
      <div class="row g-4">
        @foreach ($kategoris as $kategori)
        <div class="col-md-6 col-lg-4">
          <div class="card border-0 shadow-sm rounded-4 h-100">
            <div class="card-body">
              <div>
                <h5 class="fw-bold text-danger">{{ $kategori->kategori }}</h5>
                <p class="mb-1 text-muted">Harga: <strong>Rp{{ number_format($kategori->harga, 0, ',', '.') }}</strong></p>
                <p class="text-muted small">{{ $keterangan[strtolower(trim($kategori->kategori))] ?? 'Tidak ada keterangan.' }}</p>
              </div>
              <div class="qty-selector mt-3">
                <button type="button" class="btn-minus">−</button>
                <input type="number" name="jumlah[{{ $kategori->id }}]" value="0" />
                <button type="button" class="btn-plus">+</button>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>

      <div class="text-center mt-5 d-grid gap-2 col-6 mx-auto">
        <button type="submit" class="btn btn-danger btn-lg fw-bold" id="checkout-button">Lanjutkan ke Checkout</button>
      </div>
    </form>
  </div>

  <!-- Gambar Stadion -->
  <img src="{{ asset('images/stadion.png') }}" alt="Stadion Gelora Bung Karno"
    style="max-width: 100%; height: auto;" class="d-block mx-auto mb-2" data-aos="zoom-in" />

  <!-- Script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init();

    document.querySelectorAll('.qty-selector').forEach(selector => {
      const input = selector.querySelector('input');
      const btnPlus = selector.querySelector('.btn-plus');
      const btnMinus = selector.querySelector('.btn-minus');

      btnPlus.addEventListener('click', () => {
        let value = parseInt(input.value) || 0;
        input.value = value + 1;
      });

      btnMinus.addEventListener('click', () => {
        let value = parseInt(input.value) || 0;
        if (value > 0) input.value = value - 1;
      });
    });
  </script>
</body>
</html>
