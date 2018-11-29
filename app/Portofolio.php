<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    protected $table = 'portofolios';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_profile',
        'portofolio',
        'image_portofolio',
        'link_portofolio'
    ];
}
