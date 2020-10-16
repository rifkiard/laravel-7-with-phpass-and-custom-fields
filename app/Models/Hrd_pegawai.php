<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Hrd_pegawai extends Authenticatable
{
    use Notifiable;

    protected $table = "hrd_pegawai";

    protected $primaryKey = 'id_hrd_pegawai';

    protected $fillable = [
        'nama_hrd_pegawai', 'email_hrd_pegawai', 'pass_hrd_pegawai',
    ];

    protected $hidden = [
        'pass_hrd_pegawai', 'remember_token'
    ];

    public function getAuthPassword()
    {
        return $this->pass_hrd_pegawai;
    }
}
