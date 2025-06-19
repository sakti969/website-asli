<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Admin Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Sidebar terbuka: main content bergeser ke kanan */
    main.sidebar-open {
      margin-left: 16rem; /* 256px sesuai lebar sidebar */
    }
    /* Sidebar tertutup: main content menempel ke kiri */
    main.sidebar-closed {
      margin-left: 0;
    }
  </style>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal overflow-x-hidden">

<!-- Header -->
<header class="relative z-40 bg-gradient-to-r from-red-700 to-red-600 text-white py-6 flex items-center justify-between px-6 shadow-md">
  <div class="flex items-center space-x-4">
  </div>
  
  <h1 class="text-2xl font-bold absolute left-1/2 transform -translate-x-1/2">
    GarudaTicket
  </h1>
  
  <form action="{{ route('logoutAdmin') }}" method="POST" class="inline">
      @csrf
      <button
        type="submit"
        class="bg-white text-red-600 font-semibold px-4 py-2 rounded shadow hover:bg-red-50 transition"
        aria-label="Logout"
      >
        Logout
      </button>
  </form>
</header>

<!-- Navbar -->
<div class="flex justify-center mt-6 mb-4">
  <nav class="bg-white/60 backdrop-blur-md border border-white/30 rounded-lg shadow-md px-6 py-3 inline-flex space-x-6">
    <a href="#" class="text-gray-700 font-medium hover:text-red-600 transition">Transaksi</a>
    <a href="#" class="text-gray-700 font-medium hover:text-red-600 transition">Aktivitas</a>
    <a href="#" class="text-gray-700 font-medium hover:text-red-600 transition">Produk</a>
    <a href="#" class="text-gray-700 font-medium hover:text-red-600 transition">User</a>
  </nav>
</div>

<script>
  function logout() {
    // Ganti ini dengan logic logout kamu
    alert('Logout clicked!');
  }
</script>
    <!-- Page Content -->
    <main
      id="mainContent"
      class="flex-1 p-6 transition-all duration-300 sidebar-closed"
      tabindex="0"
    >
      <h2 class="text-2xl font-semibold text-gray-800 mb-4">
        Selamat Datang di Dashboard Admin
      </h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-5 rounded-lg shadow">
          <h3 class="text-gray-600">Jumlah Pengguna</h3>
          <p class="text-3xl font-bold text-red-600 mt-2">{{ $userCount }}</p>
        </div>
        <div class="bg-white p-5 rounded-lg shadow">
          <h3 class="text-gray-600">Chart</h3>
        </div>
        <div class="bg-white p-5 rounded-lg shadow">
          <h3 class="text-gray-600">Aktivitas Terbaru</h3>
        </div>
      </div>

      <div class="mt-8 bg-white p-6 rounded-lg shadow">
      <h3 class="text-xl font-semibold text-gray-800 mb-4">Data User</h3>
      <div class="overflow-x-auto">
        <table class="min-w-full table-auto border-collapse border border-gray-200">
          <thead>
            <tr class="bg-red-600 text-white">
              <th class="border border-gray-300 px-4 py-2 text-left">ID</th>
              <th class="border border-gray-300 px-4 py-2 text-left">Username</th>
              <th class="border border-gray-300 px-4 py-2 text-left">Email</th>
              <th class="border border-gray-300 px-4 py-2 text-left">No. Telepon</th>
              <th class="border border-gray-300 px-4 py-2 text-left">Created At</th>
            </tr>
          </thead>
          <tbody>
            @foreach($users as $user)
            <tr class="hover:bg-gray-100">
              <td class="border border-gray-300 px-4 py-2">{{ $user->id }}</td>
              <td class="border border-gray-300 px-4 py-2">{{ $user->username }}</td>
              <td class="border border-gray-300 px-4 py-2">{{ $user->email }}</td>
              <td class="border border-gray-300 px-4 py-2">{{ $user->no_telp }}</td>
              <td class="border border-gray-300 px-4 py-2">{{ $user->created_at->format('Y-m-d') }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

<form action="{{ route('tikets.updateAll') }}" method="POST">
  @csrf
  <div class="mt-8 bg-white p-6 rounded-lg shadow">
    <div class="flex justify-between items-center mb-4">
      <h3 class="text-xl font-semibold text-gray-800">Tiket Produk</h3>
      <button type="submit" 
              class="bg-blue-600 text-white px-4 py-2 rounded shadow hover:bg-blue-700 transition">
        Simpan Semua Perubahan
      </button>
    </div>

    <div class="overflow-x-auto">
      <table class="min-w-full table-auto border-collapse border border-gray-200">
        <thead>
          <tr class="bg-red-600 text-white">
            <th class="border border-gray-300 px-4 py-2 text-left">ID</th>
            <th class="border border-gray-300 px-4 py-2 text-left">Nama Pertandingan</th>
            <th class="border border-gray-300 px-4 py-2 text-left">Tanggal</th>
            <th class="border border-gray-300 px-4 py-2 text-left">Stock</th>
            <th class="border border-gray-300 px-4 py-2 text-left">Harga</th>
          </tr>
        </thead>
        <tbody>
          @foreach($tikets as $index => $tiket)
          <tr class="hover:bg-gray-100">
            <td class="border border-gray-300 px-4 py-2">{{ $tiket->id }}</td>
            <td class="border border-gray-300 px-4 py-2">
              <input type="text" 
                     name="tikets[{{ $index }}][nama_pertandingan]" 
                     value="{{ $tiket->nama_pertandingan }}" 
                     class="w-full border rounded px-2 py-1" />
            </td>
            <td class="border border-gray-300 px-4 py-2">
              <input type="date" 
                     name="tikets[{{ $index }}][tanggal]" 
                     value="{{ $tiket->tanggal->format('Y-m-d') }}" 
                     class="w-full border rounded px-2 py-1" />
            </td>
            <td class="border border-gray-300 px-4 py-2">
              <input type="number" 
                    name="tikets[{{ $index }}][stok]" 
                    value="{{ $tiket->stok }}" 
                    class="w-full border rounded px-2 py-1" />
            </td>
            <td class="border border-gray-300 px-4 py-2">
              <input type="number" 
                     name="tikets[{{ $index }}][harga]" 
                     value="{{ $tiket->harga }}" 
                     class="w-full border rounded px-2 py-1" />
            </td>
            <input type="hidden" name="tikets[{{ $index }}][id]" value="{{ $tiket->id }}">
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</form>


  <script>
    function toggleSidebar() {
      const sidebar = document.getElementById("sidebar");
      const mainContent = document.getElementById("mainContent");

      if (sidebar.classList.contains("-translate-x-full")) {
        sidebar.classList.remove("-translate-x-full");
        mainContent.classList.remove("sidebar-closed");
        mainContent.classList.add("sidebar-open");
      } else {
        sidebar.classList.add("-translate-x-full");
        mainContent.classList.remove("sidebar-open");
        mainContent.classList.add("sidebar-closed");
      }
    }
  </script>
</body>
</html>
