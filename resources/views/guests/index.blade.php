@extends('layouts.master')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Form Tamu</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('guests.create') }}"> Add New Tamu</a>
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
            <th>ID TAMU</th>
            <th>NAMA TAMU</th>
            <th>JENIS KELAMIN TAMU</th>
            <th>ALAMAT TAMU</th>
            <th>NOHP TAMU</th>
            <th>KARTU INDENTITAS</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($guests as $guest)
        <tr>
        <td>{{ ++$i }}</td>
            <td>{{ $guest->id }}</td>
            <td>{{ $guest->nama_tamu }}</td>
            <td>{{ $guest->jk_tamu }}</td>
            <td>{{ $guest->alamat_tamu }}</td>
            <td>{{ $guest->nohp_tamu }}</td>
            <td><img width="150px" src="{{ url('/images/'.$guest->image) }}" ></td>
    
            <td>
                <form action="{{ route('guests.destroy',$guest->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('guests.show',$guest->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('guests.edit',$guest->id) }}">Edit</a>
   
                    @csrf   
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger" onClick="return confirm('Apakah Yakin ingin  Hapus Data ?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $guests->links() !!}
      
@endsection