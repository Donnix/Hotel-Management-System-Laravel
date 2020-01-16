<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $fillable = [
        'nama_tamu','jk_tamu','alamat_tamu','nohp_tamu','image'
    ];
}
