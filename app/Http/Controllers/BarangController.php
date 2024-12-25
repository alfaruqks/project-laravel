<?php

namespace App\Http\Controllers;

use App\Models\Barang; // Import model
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        // Mengambil semua data barang dari tabel `barang`
        $brang = Barang::all();

        // Mengirim data ke view
        return view('barang.index', ['barang' => $brang]);
    }
}
