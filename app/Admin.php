<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'username',
        'password',
        'level'
    ];
}
