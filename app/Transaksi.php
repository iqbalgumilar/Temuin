<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksis';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_user',
        'uid_produk',
        'harga_transaksi',
        'diskon_transaksi',
        'total_transaksi',
        'status_transaksi',
        'image_transaksi'
    ];
}
