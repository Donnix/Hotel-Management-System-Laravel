<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $fillable = [
        'nama_tamu','nama_kamar','tanggal_cekin','tanggal_cekout','jumlah_kamar','total','bayar','kembalian'
    ];
}
