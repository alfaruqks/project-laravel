<?php

namespace App\Http\Controllers;

use App\Models\PenjualanBarang;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index()
    {
        $penjualan = PenjualanBarang::all(); // Ambil semua data
        return view('penjualan.index', ['penjualan' => $penjualan]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required',
            'jumlah' => 'required|integer',
            'harga_total' => 'required|numeric',
        ]);

        PenjualanBarang::create([
            'nama_barang' => $request->nama_barang,
            'jumlah' => $request->jumlah,
            'harga_total' => $request->harga_total,
            'status' => 'Proses',
        ]);

        return redirect()->route('penjualan.index')->with('success', 'Penjualan berhasil ditambahkan.');
    }

    public function destroy($id)
    {
        $penjualan = PenjualanBarang::findOrFail($id);
        $penjualan->delete();

        return redirect()->route('penjualan.index')->with('success', 'Penjualan berhasil dihapus.');
    }

    public function cancel($id)
    {
        $penjualan = PenjualanBarang::findOrFail($id);
        $penjualan->update(['status' => 'Dibatalkan']);

        return redirect()->route('penjualan.index')->with('success', 'Penjualan berhasil dibatalkan.');
    }
}
