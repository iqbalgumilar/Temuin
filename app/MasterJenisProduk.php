<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterJenisProduk extends Model
{
    protected $table = 'master_jenis_produks';
    protected $primaryKey = 'id';

    protected $fillable = [
        'jenis_produk',
        'status',
        'created_by',
        'updated_by'
    ];
}
