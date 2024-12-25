<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'brang'; // Nama tabel
    protected $fillable = ['kode_brg','nama_brg', 'stok', 'harga_jual']; // Kolom yang bisa diisi
}
