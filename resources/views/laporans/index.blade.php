@extends('layouts.master')
 
@section('content')
    <div class="row" class="form-control">
        <div class="col-lg-12 margin-tb">
      
            <div class="pull-left">
                <h2>Laporan</h2>
                <form action="/laporans/cari" method="GET">
                @csrf
                <div class="form-row align-items-center">
                    <div class="col-auto">
                        <p>Tanggal Awal</p>
                        <input type="date" ¬ss="form-control @error('startDate') is-invalid @enderror mb-3" name="startDate" id="startDate">
                        @error('starDate')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                    </div>
                    <div class="col-auto">
                        <p> </p>
                        <label class="col-sm-2 mb-3"><b>-</b></label>
                    </div>
                    <div class="col-auto">
                  <p>Tanggal Akhir</p>
                        <input type="date" class="form-contorl @error('endDate')is-invalid @enderror mb-3" name="endDate" id="endDate">
                        @error('endDate')
                        <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3">Cari</button>
                        @php if(isset($startDate) && isset($endDate)){ @endphp
                        <a href="{{ route('laporans.print', ['startDate' => $startDate, 'endDate' => $endDate]) }}" class="btn btn-info mb-3 ml-2">Cetak</a>
                        @php }else{ @endphp
                        <a href="{{ route('laporans.print') }}" class="btn btn-info mb-3 ml-2">Cetak</a>
                        @php } @endphp
                    </div>
            </div>
        </div>
    </div>
  </form>

</form> 
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
          
        </tr>
        @endforeach
   		 </table>
     	
     @endsection
  
