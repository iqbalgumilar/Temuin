<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ViewMasterProduk extends Model
{
    protected $table = 'view_master_produk';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_jenis_produk',
        'jenis_produk',
        'produk',
        'file_produk',
        'status',
        'harga_produk',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at'
    ];
}
