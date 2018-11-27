<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterServices extends Model
{
    protected $table = 'master_services';
    protected $primaryKey = 'id';
    protected $fillable = [
        'service',
        'status',
        'created_by',
        'updated_by'
    ];
}
