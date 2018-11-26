<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterSkills extends Model
{
    protected $table = 'skills';
    protected $fillable = [
        'skill',
        'status',
        'created_by',
        'updated_by'
    ];
}
