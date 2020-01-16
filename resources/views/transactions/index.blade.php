@extends('layouts.master')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>FORM TRANSAKSI</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('transactions.create') }}"> Add New Transacaction</a>
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
            <th>ID Trasaksi</th>
            <th>NAMA Tamu</th>
            <th>NAMA Kamar</th>
            <th>Tanggal CekIn</th>
            <th>Tanggal CekOut</th>
            <th>Harga Kamar</th>
            <th>Jumlah Kamar</th>
            <th>Lama Inap</th>
            <th>Total</th>
            <th>Bayar</th>
            <th>kembalian</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($transactions as $transaction)
        <tr>
        <td>{{ ++$i }}</td>
            <td>{{ $transaction->id }}</td>
            <td>{{ $transaction->nama_tamu}}</td>
            <td>{{ $transaction->nama_kamar}}</td>
            <td>{{ $transaction->tanggal_cekin}}</td>
            <td>{{ $transaction->tanggal_cekout}}</td>   
            <td>{{ $transaction->harga_kamar}}</td>       
            <td>{{ $transaction->jumlah_kamar}}</td> 
            <td>{{ $transaction->lama_inap}}</td>          
            <td>{{ $transaction->total}}</td>
            <td>{{ $transaction->bayar}}</td>
            <td>{{ $transaction->kembalian}}</td>  

            <td>
                <form action="{{ route('transactions.destroy',$transaction->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('transactions.show',$transaction->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('transactions.edit',$transaction->id) }}">Edit</a>
   
                    @csrf   
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger" onClick="return confirm('Apakah Yakin ingin  Hapus Data dan CekOut ?')">Cekout</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $transactions->links() !!}
      
@endsection