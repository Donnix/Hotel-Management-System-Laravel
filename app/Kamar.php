<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    protected $fillable = [
        'nama_kamar','jenis_kamar','harga_kamar','sisa_kamar'
    ];
}
