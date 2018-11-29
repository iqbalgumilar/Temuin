<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterProduk extends Model
{
    protected $table = 'master_produks';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_jenis_produk',
        'produk',
        'file_produk',
        'status',
        'harga_produk',
        'created_by',
        'updated_by'
    ];
}
