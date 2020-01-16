<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $fillable = [
        'nama_karyawan','jk_karyawan','alamat_karyawan','nohp_karyawan','jabatan_karyawan'
    ];
}
