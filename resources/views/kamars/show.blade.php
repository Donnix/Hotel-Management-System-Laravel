@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show kamar</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('kamars.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID KAMAR:</strong>
                {{ $kamar->id }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama kamar :</strong>
                {{ $kamar->nama_kamar }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jenis kamar :</strong>
                {{ $kamar->jenis_kamar }}
            </div>
        </div>
        
       

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Harga kamar :</strong>
                {{ $kamar->harga_kamar }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sisa_kamar :</strong>
                {{ $kamar->sisa_kamar }}
            </div>
        </div>





    </div>
@endsection