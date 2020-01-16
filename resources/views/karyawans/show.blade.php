@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show kamar</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('karyawans.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID TAMU:</strong>
                {{ $karyawan->id }}</div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NAMA KARYAWAN:</strong>
                {{ $karyawan->nama_karyawan }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>JENIS KELAMIN :</strong>
                {{ $karyawan->jk_karyawan }}
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ALAMAT KARYAWAN :</strong>
                {{ $karyawan->alamat_karyawan }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NO HP:</strong>
                {{ $karyawan->nohp_karyawan }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>JABATAN:</strong>
                {{ $karyawan->jabatan_karyawan }}
            </div>
        </div>




    </div>
@endsection