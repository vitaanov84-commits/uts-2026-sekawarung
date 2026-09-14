<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExpenseController extends Controller
{
    public function index()
    {
        $expenses = Expense::with('user')->get();
        return view('expenses.index', compact('expenses'));
    }

    public function create()
    {
        return view('expenses.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'keterangan' => 'required',
            'jumlah' => 'required|numeric',
        ]);

        Expense::create([
            'tanggal' => $request->tanggal,
            'keterangan' => $request->keterangan,
            'jumlah' => $request->jumlah,
            'user_id' => Auth::id() ?? 1, // Default ke ID 1 jika belum pakai auth ketat
        ]);

        return redirect()->route('expenses.index')->with('success', 'Data pengeluaran berhasil disimpan.');
    }

    public function destroy(Expense $expense)
    {
        $expense->delete();
        return redirect()->route('expenses.index')->with('success', 'Data pengeluaran dihapus.');
    }
}