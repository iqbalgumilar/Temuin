<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterSkills extends Model
{
    protected $table = 'master_skills';
    protected $primaryKey = 'id';
    protected $fillable = [
        'skill',
        'status',
        'created_by',
        'updated_by'
    ];
}
