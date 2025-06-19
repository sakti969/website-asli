<h2 class="text-2xl font-semibold text-gray-800 mb-4">
  Manajemen Transaksi
</h2>

<div class="bg-white p-6 rounded-lg shadow mb-6">
  <h3 class="text-xl font-semibold text-gray-800 mb-4">Filter Transaksi</h3>
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
    <div>
      <label class="block text-sm font-medium text-gray-700 mb-1">Status</label>
      <select class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-500">
        <option value="">Semua Status</option>
        <option value="sukses">Sukses</option>
        <option value="pending">Pending</option>
        <option value="gagal">Gagal</option>
      </select>
    </div>
    <div>
      <label class="block text-sm font-medium text-gray-700 mb-1">Tanggal Mulai</label>
      <input type="date" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-500">
    </div>
    <div>
      <label class="block text-sm font-medium text-gray-700 mb-1">Tanggal Akhir</label>
      <input type="date" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-500">
    </div>
    <div>
      <label class="block text-sm font-medium text-gray-700 mb-1">Cari</label>
      <div class="flex">
        <input type="text" placeholder="ID, Nama Pengguna" class="w-full border border-gray-300 rounded-l px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-500">
        <button class="bg-red-600 text-white px-4 py-2 rounded-r hover:bg-red-700">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
          </svg>
        </button>
      </div>
    </div>
  </div>
</div>

<div class="bg-white p-6 rounded-lg shadow">
  <div class="flex justify-between items-center mb-4">
    <h3 class="text-xl font-semibold text-gray-800">Data Transaksi</h3>
    <button class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 flex items-center">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
      </svg>
      Export
    </button>
  </div>
  <div class="overflow-x-auto">
    <table class="min-w-full table-auto border-collapse border border-gray-200">
      <thead>
        <tr class="bg-red-600 text-white">
          <th class="border border-gray-300 px-4 py-2 text-left">ID Transaksi</th>
          <th class="border border-gray-300 px-4 py-2 text-left">Pengguna</th>
          <th class="border border-gray-300 px-4 py-2 text-left">Pertandingan</th>
          <th class="border border-gray-300 px-4 py-2 text-left">Tanggal</th>
          <th class="border border-gray-300 px-4 py-2 text-left">Jumlah</th>
          <th class="border border-gray-300 px-4 py-2 text-left">Status</th>
          <th class="border border-gray-300 px-4 py-2 text-left">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr class="hover:bg-gray-100">
          <td class="border border-gray-300 px-4 py-2">TRX001</td>
          <td class="border border-gray-300 px-4 py-2">Andi</td>
          <td class="border border-gray-300 px-4 py-2">Indonesia vs Malaysia</td>
          <td class="border border-gray-300 px-4 py-2">2025-05-20</td>
          <td class="border border-gray-300 px-4 py-2">Rp150.000</td>
          <td class="border border-gray-300 px-4 py-2">
            <span class="px-2 py-1 rounded-full bg-green-100 text-green-800 text-xs font-semibold">Sukses</span>
          </td>
          <td class="border border-gray-300 px-4 py-2">
            <button class="text-blue-600 hover:text-blue-800 mr-2" onclick="viewTransaction('TRX001')">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
              </svg>
            </button>
          </td>
        </tr>
        <tr class="hover:bg-gray-100">
          <td class="border border-gray-300 px-4 py-2">TRX002</td>
          <td class="border border-gray-300 px-4 py-2">Budi</td>
          <td class="border border-gray-300 px-4 py-2">Indonesia vs Malaysia</td>
          <td class="border border-gray-300 px-4 py-2">2025-05-19</td>
          <td class="border border-gray-300 px-4 py-2">Rp250.000</td>
          <td class="border border-gray-300 px-4 py-2">
            <span class="px-2 py-1 rounded-full bg-yellow-100 text-yellow-800 text-xs font-semibold">Pending</span>
          </td>
          <td class="border border-gray-300 px-4 py-2">
            <button class="text-blue-600 hover:text-blue-800 mr-2" onclick="viewTransaction('TRX002')">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
              </svg>
            </button>
          </td>
        </tr>
        <tr class="hover:bg-gray-100">
          <td class="border border-gray-300 px-4 py-2">TRX003</td>
          <td class="border border-gray-300 px-4 py-2">Citra</td>
          <td class="border border-gray-300 px-4 py-2">Indonesia vs Malaysia</td>
          <td class="border border-gray-300 px-4 py-2">2025-05-18</td>
          <td class="border border-gray-300 px-4 py-2">Rp300.000</td>
          <td class="border border-gray-300 px-4 py-2">
            <span class="px-2 py-1 rounded-full bg-red-100 text-red-800 text-xs font-semibold">Gagal</span>
          </td>
          <td class="border border-gray-300 px-4 py-2">
            <button class="text-blue-600 hover:text-blue-800 mr-2" onclick="viewTransaction('TRX003')">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
              </svg>
            </button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  
  <div class="mt-4 flex justify-between items-center">
    <div class="text-sm text-gray-600">Menampilkan 1-3 dari 100 data</div>
    <div class="flex space-x-2">
      <button class="px-3 py-1 border border-gray-300 rounded hover:bg-gray-100 disabled:opacity-50">
        Sebelumnya
      </button>
      <button class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700">1</button>
      <button class="px-3 py-1 border border-gray-300 rounded hover:bg-gray-100">2</button>
      <button class="px-3 py-1 border border-gray-300 rounded hover:bg-gray-100">3</button>
      <button class="px-3 py-1 border border-gray-300 rounded hover:bg-gray-100">4</button>
      <button class="px-3 py-1 border border-gray-300 rounded hover:bg-gray-100">
        Selanjutnya
      </button>
    </div>
  </div>
</div>

<!-- Modal detail transaksi (akan ditampilkan saat tombol lihat diklik) -->
<div id="transactionModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center hidden">
  <div class="bg-white rounded-lg shadow-lg w-full max-w-2xl">
    <div class="p-4 border-b flex justify-between items-center">
      <h3 class="text-lg font-semibold text-gray-800">Detail Transaksi</h3>
      <button onclick="closeModal()" class="text-gray-500 hover:text-gray-700">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>
    <div class="p-4" id="transactionDetails">
      <!-- Isi detail transaksi akan dimasukkan secara dinamis -->
    </div>
    <div class="p-4 border-t flex justify-end">
      <button onclick="closeModal()" class="bg-gray-300 text-gray-800 px-4 py-2 rounded hover:bg-gray-400">
        Tutup
      </button>
    </div>
  </div>
</div>

<script>
  function viewTransaction(id) {
    // Data detail transaksi (dalam implementasi nyata, ini akan diambil dari server)
    const transactionData = {
      'TRX001': {
        id: 'TRX001',
        user: 'Andi',
        email: 'andi@example.com',
        match: 'Indonesia vs Malaysia',
        date: '2025-05-20',
        amount: 'Rp150.000',
        status: 'Sukses',
        payment_method: 'Transfer Bank',
        ticket_count: 2,
        stadium: 'Gelora Bung Karno',
        seat: 'Tribun Utara, Baris A, Nomor 12-13'
      },
      'TRX002': {
        id: 'TRX002',
        user: 'Budi',
        email: 'budi@example.com',
        match: 'Indonesia vs Malaysia',
        date: '2025-05-19',
        amount: 'Rp250.000',
        status: 'Pending',
        payment_method: 'QRIS',
        ticket_count: 3,
        stadium: 'Gelora Bung Karno',
        seat: 'Tribun Selatan, Baris C, Nomor 5-7'
      },
      'TRX003': {
        id: 'TRX003',
        user: 'Citra',
        email: 'citra@example.com',
        match: 'Indonesia vs Malaysia',
        date: '2025-05-18',
        amount: 'Rp300.000',
        status: 'Gagal',
        payment_method: 'Kartu Kredit',
        ticket_count: 4,
        stadium: 'Gelora Bung Karno',
        seat: 'VIP, Baris B, Nomor 8-11'
      }
    };
    
    const transaction = transactionData[id];
    
    // Siapkan konten HTML untuk detail transaksi
    let statusClass = '';
    if (transaction.status === 'Sukses') statusClass = 'bg-green-100 text-green-800';
    else if (transaction.status === 'Pending') statusClass = 'bg-yellow-100 text-yellow-800';
    else statusClass = 'bg-red-100 text-red-800';
    
    let detailHTML = `
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
          <p class="text-sm text-gray-600 mb-1">ID Transaksi</p>
          <p class="text-lg font-semibold">${transaction.id}</p>
        </div>
        <div>
          <p class="text-sm text-gray-600 mb-1">Status</p>
          <p><span class="px-2 py-1 rounded-full ${statusClass} text-xs font-semibold">${transaction.status}</span></p>
        </div>
        <div>
          <p class="text-sm text-gray-600 mb-1">Nama Pengguna</p>
          <p>${transaction.user}</p>
        </div>
        <div>
          <p class="text-sm text-gray-600 mb-1">Email</p>
          <p>${transaction.email}</p>
        </div>
        <div>
          <p class="text-sm text-gray-600 mb-1">Pertandingan</p>
          <p>${transaction.match}</p>
        </div>
        <div>
          <p class="text-sm text-gray-600 mb-1">Tanggal Transaksi</p>
          <p>${transaction.date}</p>
        </div>
        <div>
          <p class="text-sm text-gray-600 mb-1">Jumlah</p>
          <p>${transaction.amount}</p>
        </div>
        <div>
          <p class="text-sm text-gray-600 mb-1">Metode Pembayaran</p>
          <p>${transaction.payment_method}</p>
        </div>
        <div>
          <p class="text-sm text-gray-600 mb-1">Jumlah Tiket</p>
          <p>${transaction.ticket_count} tiket</p>
        </div>
        <div>
          <p class="text-sm text-gray-600 mb-1">Stadion</p>
          <p>${transaction.stadium}</p>
        </div>
        <div class="md:col-span-2">
          <p class="text-sm text-gray-600 mb-1">Tempat Duduk</p>
          <p>${transaction.seat}</p>
        </div>
      </div>
    `;
    
    // Tampilkan modal dan isi dengan detail transaksi
    document.getElementById('transactionDetails').innerHTML = detailHTML;
    document.getElementById('transactionModal').classList.remove('hidden');
  }
  
  function closeModal() {
    document.getElementById('transactionModal').classList.add('hidden');
  }
</script>