<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterWorks extends Model
{
    protected $table = 'master_works';
    protected $primaryKey = 'id';
    protected $fillable = [
        'work',
        'status',
        'created_by',
        'updated_by'
    ];
}
