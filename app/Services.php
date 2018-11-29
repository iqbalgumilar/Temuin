<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $table = 'services';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_profile',
        'uid_service',
        'icon_service',
        'descripsion_service'
    ];
}
