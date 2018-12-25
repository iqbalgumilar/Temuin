<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ViewExperiences extends Model
{
    protected $table = 'view_experiences';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_profile',
        'uid_work',
        'work',
        'from_experience',
        'date_first_experience',
        'date_last_experience',
        'created_at',
        'updated_at'
    ];
}
