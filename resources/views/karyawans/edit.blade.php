@extends('layouts.master')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit karyawan</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('karyawans.index') }}"> Back</a>
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
  
    <form action="{{ route('karyawans.update',$karyawan->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama karyawan</strong>
                <input type="text" name="nama_karyawan" value="{{$karyawan->nama_karyawan}}" class="form-control" placeholder=" Masukan Nama karyawan">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jenis Kelamin</strong>
                <select class="form-control" name="jk_karyawan" id="jk_karyawan">
                <option value="Laki-laki" @if ($karyawan->jk_karyawan == "Laki-laki")selected @endif>Laki-laki</option>
                <option value="Perempuan"@if( $karyawan->jk_karyawan == "Perempuan")selected @endif>Perempuan</option>
                    
                </select>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Alamat Karyawan</strong>
                    <textarea class="form-control" style="height:150px" name="alamat_karyawan" placeholder="Masukan alamat Karyawan">{{ $karyawan->alamat_karyawan }}</textarea>
                </div>
            </div>
      
      
       <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NO HP </strong>
                <input type="text" name="nohp_karyawan" value="{{$karyawan->nohp_karyawan}}" class="form-control" placeholder="Masukan No HP ">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jabatan</strong>
                <select class="form-control" name="jabatan_karyawan" id="jabatan_karyawan">
                    @foreach($jabatans as $jabatan)
                    <option value="{{$jabatan->jabatan}}" @if($karyawan->jabatan_karyawan == $jabatan->jabatan)selected @endif>{{$jabatan->jabatan}}</option>
                    @endforeach
                </select>
            </div>
        </div>



            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection