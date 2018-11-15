<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nama_pria', 
        'jk_pria',
        'tempat_lahir_pria',
        'tgl_lahir_pria',
        'warganegara_pria',
        'status_pria',
        'agama_pria',
        'pekerjaan_pria',
        'bin_pria',
        'tempat_tinggal_pria',
        'istri_dulu_pria',

        'nama_wanita', 
        'jk_wanita',
        'tempat_lahir_wanita',
        'tgl_lahir_wanita',
        'warganegara_wanita',
        'status_wanita',
        'agama_wanita',
        'pekerjaan_wanita',
        'binti_wanita',
        'tempat_tinggal_wanita',
        'suami_dulu_wanita',

        //Data Orangtua
        'nama_ayah_pria', 
        'jk_ayah_pria',
        'tempat_lahir_ayah_pria',
        'tgl_lahir_ayah_pria',
        'warganegara_ayah_pria',
        'agama_ayah_pria',
        'pekerjaan_ayah_pria',
        'tempat_tinggal_ayah_pria',

        'nama_ibu_pria', 
        'jk_ibu_pria',
        'tempat_lahir_ibu_pria',
        'tgl_lahir_ibu_pria',
        'warganegara_ibu_pria',
        'agama_ibu_pria',
        'pekerjaan_ibu_pria',
        'tempat_tinggal_ibu_pria',

        'nama_ayah_wanita', 
        'jk_ayah_wanita',
        'tempat_lahir_ayah_wanita',
        'tgl_lahir_ayah_wanita',
        'warganegara_ayah_wanita',
        'agama_ayah_wanita',
        'pekerjaan_ayah_wanita',
        'tempat_tinggal_ayah_wanita',

        'nama_ibu_wanita', 
        'jk_ibu_wanita',
        'tempat_lahir_ibu_wanita',
        'tgl_lahir_ibu_wanita',
        'warganegara_ibu_wanita',
        'agama_ibu_wanita',
        'pekerjaan_ibu_wanita',
        'tempat_tinggal_ibu_wanita',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
