<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MatchGame; // ✅ Jangan pakai alias "Match"

class TicketController extends Controller
{
    public function index()
    {
        $matches = MatchGame::orderBy('match_date', 'asc')->get();
        return view('tickets.index', compact('matches'));
    }

    public function show($id)
    {
        $match = MatchGame::findOrFail($id);
        return view('tickets.show', compact('match'));
    }

    public function checkout(Request $request)
    {
        $data = $request->validate([
            'match_id' => 'required|exists:matches,id',
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'jumlah' => 'required|integer|min:1',
        ]);

        return view('tickets.confirmation', ['data' => $data]);
    }
}
