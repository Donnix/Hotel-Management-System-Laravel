<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'nama_tamu','nama_kamar','tanggal_cekin','tanggal_cekout','harga_kamar','jumlah_kamar','lama_inap','total','bayar','kembalian'
    ];
}
