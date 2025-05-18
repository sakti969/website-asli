<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Daftar - GarudaTicket</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-b from-red-700 to-white min-h-screen flex items-center justify-center relative">

  <!-- Tombol Kembali -->
  <a href="/" class="absolute top-6 left-6 flex items-center text-white text-lg font-semibold hover:text-red-600 hover:bg-white hover:shadow-md py-2 px-4 rounded-full transition duration-200">
    <i class="bi bi-arrow-left-circle-fill mr-2 text-2xl"></i> Kembali
  </a>

  <!-- Card Formulir -->
  <div class="w-full max-w-md rounded-2xl overflow-hidden shadow-2xl bg-white border border-gray-100">
    <!-- Header -->
    <div class="bg-red-600 p-6 flex items-center justify-between">
      <h1 class="text-white font-bold text-2xl">GarudaTicket</h1>
      <img src="/images/garuda.png" alt="Logo Garuda" class="w-12 h-12" />
    </div>

    <!-- Formulir -->
    <div class="bg-white p-8">
      <h2 class="text-2xl font-bold text-gray-800 mb-6 leading-snug">Daftar & Dukung Timnas!</h2>

      <!-- Tambahkan ini untuk menampilkan error -->
      @if ($errors->any())
        <div class="mb-6 p-4 bg-red-100 border border-red-400 text-red-700 rounded-lg">
          <ul class="list-disc list-inside">
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <form method="POST" action="/signup" class="space-y-5">
        @csrf
        <input type="text" name="username" placeholder="Username"
          class="w-full px-4 py-3 text-base border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-red-500"
          required />
        <input type="text" name="email" placeholder="Email"
          class="w-full px-4 py-3 text-base border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-red-500"
          required />
        <input type="tel" name="no_telp" placeholder="No Telpon"
          class="w-full px-4 py-3 text-base border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-red-500"
          required />
        <input type="password" name="password" placeholder="Kata Sandi"
          class="w-full px-4 py-3 text-base border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-red-500"
          required />
        <button type="submit"
          class="w-full bg-red-600 hover:bg-red-700 text-white font-semibold py-3 rounded-xl transition duration-200 text-lg shadow">
          Sign up
        </button>
      </form>

      <!-- Link ke Login -->
      <p class="mt-6 text-center text-sm text-gray-600">
        Login Sekarang
        <a href="/login" class="text-red-600 font-semibold hover:underline">Klik di sini</a>
      </p>
    </div>
  </div>

</body>
</html>
