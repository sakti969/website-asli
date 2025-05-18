<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Harga Tiket - GarudaTicket</title>

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

    nav.navbar-bottom {
      position: fixed;
      bottom: 0; left: 0; right: 0;
      height: 60px;
      background: white;
      border-top: 1px solid #ddd;
      display: flex;
      justify-content: space-around;
      align-items: center;
      box-shadow: 0 -1px 5px rgba(0,0,0,0.1);
      z-index: 1000;
    }

    nav.navbar-bottom a {
      color: #b30000;
      font-weight: 600;
      font-size: 0.9rem;
      text-align: center;
      text-decoration: none;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 2px;
    }

    nav.navbar-bottom a:hover {
      color: #e60000;
    }

    nav.navbar-bottom a .bi {
      font-size: 1.3rem;
    }

    .qty-selector {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 0.5rem;
    }

    .qty-selector button {
      width: 30px;
      height: 30px;
      border-radius: 50%;
      border: 1.5px solid #dc3545;
      color: #dc3545;
      background-color: transparent;
      font-weight: bold;
      cursor: pointer;
    }

    .qty-selector button:active {
      background-color: #dc3545;
      color: white;
    }

    .qty-selector input {
      width: 50px;
      height: 30px;
      text-align: center;
      border: 1.5px solid #dc3545;
      border-radius: 0.375rem;
      font-weight: 600;
      background-color: #fff0f0;
      color: #b30000;
      pointer-events: none;
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
  <div class="header">
    <a href="{{ url()->previous() }}" class="btn btn-outline-light rounded-pill d-flex align-items-center gap-2 position-absolute start-0 top-0 m-3 px-3 py-2 shadow-sm">
      <i class="bi bi-arrow-left-circle"></i> Kembali
    </a>
    <h1 class="fw-bold m-0" data-aos="zoom-in">GarudaTicket</h1>
    <img src="{{ asset('images/garuda.png') }}" alt="Logo Garuda" />
  </div>

  <!-- Judul -->
  <h2 class="fw-bold text-center mt-4" data-aos="zoom-in">Harga Tiket Indonesia vs Argentina</h2>

  <!-- Daftar Harga -->
  <div class="container my-5" data-aos="fade-up">
    <div class="card shadow-sm rounded-4">
      <div class="card-body">
        <h4 class="fw-bold mb-4 text-danger text-center">Daftar Harga Tiket</h4>
        <div class="table-responsive">
          <table class="table table-bordered table-striped text-center align-middle">
            <thead class="table-danger">
              <tr>
                <th>Kategori</th>
                <th>Harga (IDR)</th>
                <th>Keterangan</th>
                <th>Jumlah</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Tribun Vip Timur</td>
                <td>1.500.000</td>
                <td>View terbaik, dekat lapangan</td>
                <td>
                  <div class="qty-selector">
                    <button type="button" class="btn-minus">−</button>
                    <input type="text" value="0" readonly />
                    <button type="button" class="btn-plus">+</button>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Tribun Timur</td>
                <td>500.000</td>
                <td>View sedang, nyaman</td>
                <td>
                  <div class="qty-selector">
                    <button type="button" class="btn-minus">−</button>
                    <input type="text" value="0" readonly />
                    <button type="button" class="btn-plus">+</button>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Tribun Barat</td>
                <td>400.000</td>
                <td>View standar</td>
                <td>
                  <div class="qty-selector">
                    <button type="button" class="btn-minus">−</button>
                    <input type="text" value="0" readonly />
                    <button type="button" class="btn-plus">+</button>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Tribun Vip Barat</td>
                <td>1.500.000</td>
                <td>View terbaik, dekat lapangan</td>
                <td>
                  <div class="qty-selector">
                    <button type="button" class="btn-minus">−</button>
                    <input type="text" value="0" readonly />
                    <button type="button" class="btn-plus">+</button>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Tribun Selatan</td>
                <td>300.000</td>
                <td>View jauh, harga terjangkau</td>
                <td>
                  <div class="qty-selector">
                    <button type="button" class="btn-minus">−</button>
                    <input type="text" value="0" readonly />
                    <button type="button" class="btn-plus">+</button>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div id="checkout-container" class="text-center mt-4" style="display: none;">
            <a href="{{ route('checkout') }}" class="btn btn-danger px-4 py-2 rounded-pill fw-bold shadow-sm">
                <i class="bi bi-cart-check me-2"></i> Checkout
            </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Gambar Stadion -->
<img 
  src="{{ asset('images/stadion.png') }}" 
  alt="Stadion Gelora Bung Karno" 
  style="max-width: 100%; height: auto;" 
  class="d-block mx-auto mb-2" 
  data-aos="zoom-in" 
/>

  <!-- Script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init();

    window.addEventListener('load', () => {
      const loader = document.getElementById('loader');
      if (loader) loader.style.display = 'none';
    });

    function updateCheckoutVisibility() {
      const allInputs = document.querySelectorAll('.qty-selector input');
      const checkoutContainer = document.getElementById('checkout-container');
      let showCheckout = false;

      allInputs.forEach(input => {
        if (parseInt(input.value) > 0) {
          showCheckout = true;
        }
      });

      checkoutContainer.style.display = showCheckout ? 'block' : 'none';
    }

    document.querySelectorAll('.qty-selector').forEach(selector => {
      const input = selector.querySelector('input');
      const btnPlus = selector.querySelector('.btn-plus');
      const btnMinus = selector.querySelector('.btn-minus');

      btnPlus.addEventListener('click', () => {
        let value = parseInt(input.value) || 0;
        input.value = value + 1;
        updateCheckoutVisibility();
      });

      btnMinus.addEventListener('click', () => {
        let value = parseInt(input.value) || 0;
        if (value > 0) input.value = value - 1;
        updateCheckoutVisibility();
      });
    });
  </script>
</body>
</html>
