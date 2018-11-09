<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterWorks extends Model
{
    protected $fillable = [
        'work',
        'status',
        'created_by',
        'updated_by'
    ];
}
