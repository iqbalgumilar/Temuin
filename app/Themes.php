<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Themes extends Model
{
    protected $table = 'themes';
    protected $primaryKey = 'id';
    protected $fillable = [
        'uid_pb',
        'uid_cv',
        'uin_kn'
    ];
}
