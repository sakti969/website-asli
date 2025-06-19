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

  <!-- Card Formulir -->
  <div class="w-full max-w-md rounded-2xl overflow-hidden shadow-2xl bg-white border border-gray-100">
    <!-- Header -->
    <div class="bg-red-600 p-6 flex items-center justify-between">
      <h1 class="text-white font-bold text-2xl">GarudaTicket</h1>
      <img src="/images/garuda.png" alt="Logo Garuda" class="w-12 h-12" />
    </div>

    <!-- Formulir -->
    <div class="bg-white p-8">
      <h2 class="text-2xl font-bold text-gray-800 mb-6 leading-snug">Login Admin</h2>

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

      <form method="POST" action="/loginAdmin" class="space-y-5">
        @csrf
        <input type="text" name="username" placeholder="Username"
          class="w-full px-4 py-3 text-base border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-red-500"
          required />
        <input type="password" name="password" placeholder="Kata Sandi"
          class="w-full px-4 py-3 text-base border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-red-500"
          required />
        <button type="submit"
          class="w-full bg-red-600 hover:bg-red-700 text-white font-semibold py-3 rounded-xl transition duration-200 text-lg shadow">
          Login
        </button>
      </form>
    </div>
  </div>
</body>
</html>
