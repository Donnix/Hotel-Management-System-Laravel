@extends('layouts.master')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>FORM JABATAN</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('jabatans.create') }}"> Add New Jabatan</a>
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
            <th>ID Jabatan</th>
            <th>NAMA Jabatan</th>
            <th>DETAIL Jabatan</th>
           
            <th width="280px">Action</th>
        </tr>
        @foreach ($jabatans as $jabatan)
        <tr>
        <td>{{ ++$i }}</td>
            <td>{{ $jabatan->id }}</td>
            <td>{{ $jabatan->jabatan }}</td>
            <td>{{ $jabatan->detail_jabatan}}</td>
           
    
            <td>
                <form action="{{ route('jabatans.destroy',$jabatan->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('jabatans.show',$jabatan->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('jabatans.edit',$jabatan->id) }}">Edit</a>
   
                    @csrf   
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger" onClick="return confirm('Apakah Yakin ingin  Hapus Data ?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $jabatans->links() !!}
      
@endsection