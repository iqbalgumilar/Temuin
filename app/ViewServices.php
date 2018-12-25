<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ViewServices extends Model
{
    protected $table = 'view_services';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_profile',
        'uid_service',
        'service',
        'descripsion_service',
        'created_at',
        'updated_at'
    ];
}
