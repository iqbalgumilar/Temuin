<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $table = 'skills';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_profile',
        'uid_skill',
        'persentase_skill'
    ];
}
