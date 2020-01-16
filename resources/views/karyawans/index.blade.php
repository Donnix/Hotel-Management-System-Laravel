@extends('layouts.master')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Form Karyawan</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('karyawans.create') }}">Tambahkan Karyawan </a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
        <td>NO</td>
            <th>ID KARYAWAN</th>
            <th>NAMA KARYAWAN</th>
            <th>JENIS KELAMIN KARYAWAN</th>
            <th>ALAMAT KARYAWAN</th>
            <th>NOHP KARYAWAN</th>
            <th>JABATAN KARYAWAN</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($karyawans as $karyawan)
        <tr>
        <td>{{ ++$i }}</td>
            <td>{{ $karyawan->id }}</td>
            <td>{{ $karyawan->nama_karyawan }}</td>
            <td>{{ $karyawan->jk_karyawan }}</td>
            <td>{{ $karyawan->alamat_karyawan }}</td>
            <td>{{ $karyawan->nohp_karyawan }}</td>
            <td>{{ $karyawan->jabatan_karyawan }}</td>
    
            <td>
                <form action="{{ route('karyawans.destroy',$karyawan->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('karyawans.show',$karyawan->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('karyawans.edit',$karyawan->id) }}">Edit</a>
   
                    @csrf   
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger" onClick="return confirm('Apakah Yakin ingin  Hapus Data ?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $karyawans->links() !!}
      
@endsection