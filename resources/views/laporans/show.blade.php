@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Transaksi</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('transactions.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NAMA TAMU :</strong>
                {{ $laporan->nama_tamu }}
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NAMA KAMAR :</strong>
                {{ $laporan->nama_kamar }}
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal cekin :</strong>
                {{ $laporan->tanggal_cekin }}
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Cekout:</strong>
                {{ $laporan->tanggal_cekout }}
            </div>
        </div>
       
        

 <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jumlah Kamar </strong>
              {{$laporan->jumlah_kamar}}
                          </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Lama Inap: </strong>
                      {{ $laporan->lama_inap}}
                    </div>
                </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Waktu Bayar </strong>
             {{$laporan->created_at}}
            </div>
        </div>

     <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Total Harga </strong>
              {{$laporan->total}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Bayar </strong>
             {{$laporan->bayar}}
            </div>
        </div>

        


    </div>
@endsection