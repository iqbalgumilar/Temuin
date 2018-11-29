<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $table = 'education';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_profile',
        'education',
        'from_education',
    ];
}
