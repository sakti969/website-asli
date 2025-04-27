<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Fungsi untuk mengedit tiket
    public function editTicket($id)
{
    // Buat data palsu dulu
    $ticket = (object)[
        'id' => $id,
        'buyer_name' => 'Nama Dummy',
        'quantity' => 2,
    ];

    return view('admin.edit_ticket', compact('ticket'));
}

    // Fungsi untuk update tiket
    public function update(Request $request, $id)
    {
        // Validasi input form
        $request->validate([
            'buyer_name' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
        ]);

        // Ambil data tiket berdasarkan ID
        $ticket = Ticket::findOrFail($id);

        // Update data tiket
        $ticket->buyer_name = $request->buyer_name;
        $ticket->quantity = $request->quantity;
        $ticket->save();

        // Redirect kembali ke halaman manage tiket
        return redirect()->route('admin.manageTickets')->with('success', 'Tiket berhasil diperbarui!');
    }

    // Fungsi untuk menghapus tiket
    public function deleteTicket($id)
    {
        $ticket = Ticket::findOrFail($id);
        $ticket->delete();
        return redirect()->route('admin.manageTickets')->with('success', 'Tiket berhasil dihapus!');
    }
}
