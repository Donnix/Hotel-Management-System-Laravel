@extends('layouts.master')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>FORM LAPORAN</h2>
            </div>
           
        </div>  
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table ">
        <tr>
        <td>NO</td>
        <th>NAMA TAMU</th>
            <th>ID TRANSAKSI</th>
            <th>NAMA KAMAR</th>
            <th>TANGGAL CekIn</th>
            <th>TANGGAL CekOut</th>
            <th>JUMLAH KAMAR</th>
            <th>LAMA INAP</th>
            <th>WAKTU BAYAR</th>
            <th>TOTAL HARGA</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($laporans as $laporan)
        <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $laporan->nama_tamu}}</td>
            <td>{{ $laporan->id}}</td>
            <td>{{ $laporan->nama_kamar}}</td>
            <td>{{ $laporan->tanggal_cekin}}</td>
            <td>{{ $laporan->tanggal_cekout}}</td>        
            <td>{{ $laporan->jumlah_kamar}}</td>    
            <td>{{ $laporan->lama_inap}}</td>
            <td>{{ $laporan->created_at}}</td>
            <td>{{ $laporan->total}}</td>
           
           
               <td>
               <a class="btn btn-info" href="{{ route('laporans.show',$laporan->id) }}">Show</a>
               </td>  
        </tr>
        </form>
        @endforeach
    </table>
  
    {!! $laporans->links() !!}
      
@endsection