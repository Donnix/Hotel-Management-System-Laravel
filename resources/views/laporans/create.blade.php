@extends('layouts.master')
  
@section('content')

 
    
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Tambahkan Transaksi</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('transactions.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('transactions.store') }}" method="POST">
    @csrf
  
     <div class="row">

     <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Tamu</strong>
                <select class="form-control" name="nama_tamu" id="nama_tamu">
                @foreach($guests as $guest)
                <option value="{{$guest->nama_tamu}}">{{$guest->nama_tamu}}</option>
                @endforeach
                </select>
            </div>


        </div>  <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Kamar</strong>
                <select class="form-control" name="nama_kamar" id="nama_kamar">
                @foreach($kamars as $kamar)
                <option value="{{$kamar->nama_kamar}}">{{$kamar->nama_kamar}}</option>

                @endforeach
                </select>
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Cek IN </strong>
                <input type="date" name="tanggal_cekin" class="form-control" placeholder="">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Cek OUT </strong>
                <input type="date" name="tanggal_cekout" class="form-control" placeholder="">
            </div>
        </div>


 <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jumlah Kamar </strong>
                <input type="text" name="jumlah_kamar" class="form-control" placeholder=" Masukan jumlah kamar ">
            </div>
        </div>

       

     <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Total </strong>
                <input type="text" name="total"  class="form-control" placeholder=" Masukan Total ">

               
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Bayar </strong>
                <input type="text" name="bayar" class="form-control" placeholder=" Masukan Bayar ">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kembalian </strong>
                <input type="text" name="kembalian" class="form-control" placeholder=" Masukan Harga ">
            </div>
        </div>
      
      


        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection