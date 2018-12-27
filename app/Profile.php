<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_user',
        'nama_profile',
        'tempat_lhr_profile',
        'tgl_lhr_profile',
        'tlp_profile',
        'uid_work',
        'alamat',
        'foto'
    ];
}
