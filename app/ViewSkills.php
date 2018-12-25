<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ViewSkills extends Model
{
    protected $table = 'view_skills';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_profile',
        'uid_skill',
        'skill',
        'persentase_skill',
        'created_at',
        'updated_at'
    ];
}
