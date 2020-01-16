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
                {{ $transaction->nama_tamu }}
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NAMA KAMAR :</strong>
                {{ $transaction->nama_kamar }}
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal cekin :</strong>
                {{ $transaction->tanggal_cekin }}
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Cekout :</strong>
                {{ $transaction->tanggal_cekout }}
            </div>
        </div>
       
        <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Harga : </strong>
                      {{ $transaction->harga_kamar}}
                    </div>
                </div>

 <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jumlah Kamar :</strong>
              {{$transaction->jumlah_kamar}}
                          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Lama Inap :</strong>
              {{$transaction->lama_inap}}
                          </div>
        </div>
     

     <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Total :</strong>
              {{$transaction->total}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Bayar :</strong>
             {{$transaction->bayar}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kembalian :</strong>
             {{$transaction->kembalian}}
            </div>
        </div>


    </div>
@endsection