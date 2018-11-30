<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = [
        'email',
        'username',
        'password',
        'saldo',
        'is_verification'
    ];
}
