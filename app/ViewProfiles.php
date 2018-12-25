<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ViewProfiles extends Model
{
    protected $table = 'view_profiles';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_user',
        'nama_profile',
        'tempat_lhr_profile',
        'tgl_lhr_profile',
        'tlp_profile',
        'uid_work',
        'work',
        'alamat',
        'created_at',
        'updated_at'
    ];
}
