<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $table = 'experiences';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_profile',
        'uid_work',
        'from_experience',
        'date_first_experience',
        'date_last_experience'
    ];
}
