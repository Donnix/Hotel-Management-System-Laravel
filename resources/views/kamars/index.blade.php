@extends('layouts.master')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Form Kamar</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('kamars.create') }}"> Add New kamar</a>
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
            <th>ID KAMAR</th>
            <th>NAMA  KAMAR</th>
            <th>JENIS KAMAR</th>
           <th>HARGA KAMAR</th>
            <th>SISA KAMAR</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($kamars as $kamar)
        <tr>
        <td>{{ ++$i }}</td>
            <td>{{ $kamar->id }}</td>
            <td>{{ $kamar->nama_kamar }}</td>
            <td>{{ $kamar->jenis_kamar }}</td>
            <td>{{ $kamar->harga_kamar }}</td>
            <td>{{ $kamar->sisa_kamar }}</td>
            <td>
                <form action="{{ route('kamars.destroy',$kamar->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('kamars.show',$kamar->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('kamars.edit',$kamar->id) }}">Edit</a>
   
                    @csrf   
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger " onClick="return confirm('Apakah Yakin ingin  Hapus Data ?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $kamars->links() !!}
      
@endsection