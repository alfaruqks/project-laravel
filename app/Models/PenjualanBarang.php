<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenjualanBarang extends Model
{
    use HasFactory;

    protected $table = 'penjualan_barang'; // Nama tabel
    protected $fillable = ['nama_barang', 'jumlah', 'harga_total', 'status']; // Kolom yang bisa diisi
}
