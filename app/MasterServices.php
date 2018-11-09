<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterServices extends Model
{
    protected $fillable = [
        'service',
        'status',
        'created_by',
        'updated_by'
    ];
}
