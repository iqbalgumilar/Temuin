<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterSkills extends Model
{
    protected $table = 'master_skills';
    protected $fillable = [
        'skill',
        'status',
        'created_by',
        'updated_by'
    ];
}
