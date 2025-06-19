<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Metode Pembayaran - GarudaTicket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
      body {
        font-family: 'Poppins', sans-serif;
      }
      @keyframes zoomIn {
        from {
          transform: scale(1);
        }
        to {
          transform: scale(1.2);
        }
      }
    </style>
  </head>
  <body class="bg-gray-100 overflow-x-hidden">
    <!-- Splash Loading -->
    <div id="loader" class="fixed inset-0 bg-white flex items-center justify-center z-[9999]">
      <div class="text-center">
        <img src="{{ asset('images/garuda.png') }}" alt="Loading Garuda" class="w-20 animate-[zoomIn_1s_ease-in-out_infinite_alternate]" />
        <p class="mt-3 text-red-600 font-bold">Memuat Halaman...</p>
      </div>
    </div>

    <!-- Header -->
    <header class="relative bg-gradient-to-r from-red-700 to-red-600 text-white py-8 text-center">
      <a href="{{ url()->previous() }}" class="absolute left-4 top-4 px-3 py-2 bg-white/10 backdrop-blur-md rounded-full text-white flex items-center gap-2 font-medium shadow-md">
        <i class="bi bi-arrow-left-circle"></i> Kembali
      </a>
      <h1 class="text-3xl font-bold" data-aos="zoom-in">GarudaTicket</h1>
      <img src="{{ asset('images/garuda.png') }}" alt="Logo Garuda" class="absolute right-4 top-4 w-[70px]" />
    </header>

    <!-- Konten -->
    <main class="max-w-2xl mx-auto px-4 py-10">
      <section class="mb-8" data-aos="fade-right">
        <h3 class="text-xl font-bold text-gray-800 mb-1">Pilih Metode Pembayaran</h3>
        <p class="text-gray-500">Selesaikan transaksi Anda dengan metode pembayaran pilihan</p>
      </section>

      <!-- E-Wallet Section -->
      <section>
        <h5 class="text-lg font-semibold text-gray-800 mb-4" data-aos="fade-up">E-Wallet</h5>

        <!-- Kartu Metode Pembayaran -->
        <div class="space-y-6">
          <!-- DANA -->
          <div class="bg-white rounded-2xl shadow hover:shadow-lg transition-all" data-aos="fade-up">
            <a href="{{ route('pembayaran.proses', ['metode' => 'dana']) }}" class="flex items-center p-6 space-x-4 hover:bg-gray-50">
              <div class="w-14 h-14 flex items-center justify-center text-2xl rounded-xl bg-gradient-to-br from-gray-100 to-gray-200 text-red-600">
                <i class="bi bi-wallet"></i>
              </div>
              <div class="flex-1">
                <span class="inline-block bg-red-100 text-red-600 text-xs font-semibold px-3 py-1 rounded mb-1">Terpopuler</span>
                <h5 class="font-semibold text-gray-800">DANA</h5>
                <p class="text-gray-500 text-sm">Pembayaran instan dan aman dengan saldo DANA</p>
              </div>
              <div class="text-red-600 text-xl transition-transform group-hover:translate-x-1">
                <i class="bi bi-chevron-right"></i>
              </div>
            </a>
          </div>

          <!-- OVO -->
          <div class="bg-white rounded-2xl shadow hover:shadow-lg transition-all" data-aos="fade-up" data-aos-delay="100">
            <a href="{{ route('pembayaran.proses', ['metode' => 'ovo']) }}" class="flex items-center p-6 space-x-4 hover:bg-gray-50">
              <div class="w-14 h-14 flex items-center justify-center text-2xl rounded-xl bg-gradient-to-br from-gray-100 to-gray-200 text-red-600">
                <i class="bi bi-phone"></i>
              </div>
              <div class="flex-1">
                <span class="inline-block bg-green-100 text-green-700 text-xs font-semibold px-3 py-1 rounded mb-1">Promo 5%</span>
                <h5 class="font-semibold text-gray-800">OVO</h5>
                <p class="text-gray-500 text-sm">Nikmati cashback hingga 5% dengan OVO</p>
              </div>
              <div class="text-red-600 text-xl">
                <i class="bi bi-chevron-right"></i>
              </div>
            </a>
          </div>

          <!-- GoPay -->
          <div class="bg-white rounded-2xl shadow hover:shadow-lg transition-all" data-aos="fade-up" data-aos-delay="200">
            <a href="{{ route('pembayaran.proses', ['metode' => 'gopay']) }}" class="flex items-center p-6 space-x-4 hover:bg-gray-50">
              <div class="w-14 h-14 flex items-center justify-center text-2xl rounded-xl bg-gradient-to-br from-gray-100 to-gray-200 text-red-600">
                <i class="bi bi-credit-card"></i>
              </div>
              <div class="flex-1">
                <h5 class="font-semibold text-gray-800">GoPay</h5>
                <p class="text-gray-500 text-sm">Pembayaran mudah dengan dompet digital GoPay</p>
              </div>
              <div class="text-red-600 text-xl">
                <i class="bi bi-chevron-right"></i>
              </div>
            </a>
          </div>

          <!-- ShopeePay -->
          <div class="bg-white rounded-2xl shadow hover:shadow-lg transition-all" data-aos="fade-up" data-aos-delay="300">
            <a href="{{ route('pembayaran.proses', ['metode' => 'shopeepay']) }}" class="flex items-center p-6 space-x-4 hover:bg-gray-50">
              <div class="w-14 h-14 flex items-center justify-center text-2xl rounded-xl bg-gradient-to-br from-gray-100 to-gray-200 text-red-600">
                <i class="bi bi-bag"></i>
              </div>
              <div class="flex-1">
                <h5 class="font-semibold text-gray-800">ShopeePay</h5>
                <p class="text-gray-500 text-sm">Bayar dengan saldo ShopeePay</p>
              </div>
              <div class="text-red-600 text-xl">
                <i class="bi bi-chevron-right"></i>
              </div>
            </a>
          </div>
        </div>
      </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
      AOS.init();
      window.addEventListener('load', () => {
        document.getElementById('loader').style.display = 'none';
      });
    </script>
  </body>
</html>