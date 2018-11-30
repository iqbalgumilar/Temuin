<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    protected $table = 'awards';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_profile',
        'award',
        'description_award',
        'icon_award',
        'image_award'
    ];
}
