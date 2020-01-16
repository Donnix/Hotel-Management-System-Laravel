@extends('layouts.master')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Tambahkan Kamar</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('kamars.index') }}"> Back</a>
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
   
<form action="{{ route('kamars.store') }}" method="POST">
    @csrf
  
     <div class="row">

     <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Kamar</strong>
                <input type="text" name="nama_kamar" class="form-control" placeholder=" Masukan Nama Kamar">
            </div>
        </div>
       
       
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>Jenis Kamar</strong>
            <select class="form-control" name="jenis_kamar" id="jenis_kamar">
                <option value="Standard">Standard</option>
                 <option value="Superior" >Superior</option>
                 <option value="Deluxe" >Deluxe</option>
                 </select>
            </div>
        </div>


    
      
      
       <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Harga Kamar</strong>
                <input type="text" name="harga_kamar" class="form-control" placeholder="Masukan Harga">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sisa Kamar</strong>
                <input type="text" name="sisa_kamar" class="form-control" placeholder="Masukan Sisa">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection