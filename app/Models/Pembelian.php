<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'Pembelian';
    protected $fillable = [
        'id_pembelian',
        'nama_pembeli',
        'nama_barang',
        'jumlah_barang',
        'harga_barang',
        'total_harga',
        'metode_pembayaran',
        'tanggal_pembelian',
        'status_pembelian',
        'alamat_pembeli',
    ];
}
