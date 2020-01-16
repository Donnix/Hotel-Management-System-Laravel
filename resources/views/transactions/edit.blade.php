@extends('layouts.master')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Jabatan</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('transactions.index') }}"> Back</a>
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
  
    <form action="{{ route('transactions.update',$transaction->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Tamu</strong>
                <select class="form-control" name="nama_tamu" id="nama_tamu">
                    @foreach($guests as $guest)
                    <option value="{{$guest->nama_tamu}}" @if($transaction->nama_tamu == $guest->nama_tamu)selected @endif>{{$guest->nama_tamu}}</option>
                    @endforeach
                </select>
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Kamar</strong>
                <select name="nama_kamar" name="nama_kamar"  class="form-control" class="form-control form-control-md" id="" onchange='changeValueNama(this.value)' required="required"  >
                            <option value="" disabled="disabled" selected="selected"></option>
                            <?php
                                $con = mysqli_connect("localhost", "root","", "db_hotel");
                                $query=mysqli_query($con, "select * from kamars order by nama_kamar asc");
                                $result = mysqli_query($con, "select * from kamars");
                                $jsArrayNama = "var harga_kamarName = new Array();\n";
                               
                                echo "<option name='nama_kamar'  value='$transaction->nama_kamar' selected>" . $transaction->nama_kamar . '</option>';
                                while ($row = mysqli_fetch_array($result)) {
                                echo '<option name="nama_kamar"  value="' . $row['nama_kamar'] . '">' . $row['nama_kamar'] . '</option>';
                                $jsArrayNama .= "harga_kamarName['" . $row['nama_kamar'] . "'] = {harga_kamar:'" . addslashes($row['harga_kamar']) . "'};\n";
                                }
                            ?>
                </select>
            </div>
        </div>
       

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Cek IN </strong>
                <input type="date" name="tanggal_cekin" value="{{ $transaction->tanggal_cekin}}" class="form-control" placeholder="">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Cek OUT </strong>
                <input type="date" name="tanggal_cekout" value="{{ $transaction->tanggal_cekout}}" class="form-control" placeholder="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Harga: </strong>
                        <input class="form-control" id="harga_kamar"name="harga_kamar" value="{{ $transaction->harga_kamar}}" id="harga_kamar" readonly="readonly"/>
                    </div>
                </div>

 <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jumlah Kamar </strong>
                <input type="text" id="jumlah_kamar" value="{{$transaction->jumlah_kamar}}"name="jumlah_kamar" class="form-control" placeholder=" Masukan jumlah kamar">
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Lama Inap </strong>
                <input type="text" id="lama_inap"value="{{$transaction->lama_inap}}"name="lama_inap" class="form-control" placeholder=" Masukan Lama Inap" onkeyup="sum();"/>
            </div>
        </div>

     

     <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Total </strong>
                <input type="text" id="total"value="{{$transaction->total}}"name="total" class="form-control" placeholder=" Masukan Total "  readonly="readonly"/>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Bayar </strong>
                <input type="text" id="bayar" value="{{$transaction->bayar}}"name="bayar" class="form-control" placeholder=" Masukan Bayar " onkeyup="suma();"/>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kembalian </strong>
                <input type="text" id="kembalian" value="{{$transaction->kembalian}}"name="kembalian" class="form-control" placeholder=" Masukan kembalian" readonly="readonly">
            </div>
        </div>
      



            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>


    

    <script type="text/javascript">
        <?php echo $jsArrayNama; ?>
        function changeValueNama(id){
            console.log(id);
            console.log(nama_kamarName);
            document.getElementById('harga_kamar').value = nama_kamarName[id].harga_kamar;
        }
        </script>

<script type="text/javascript">
        function sum(){
            var txtFirstNumberValue = document.getElementById('harga_kamar').value;
            var txtSecondNumberValue = document.getElementById('jumlah_kamar').value;
            var txtThirdNumberValue = document.getElementById('lama_inap').value;
            var result = txtFirstNumberValue *  txtSecondNumberValue *  txtThirdNumberValue;
    
            document.getElementById('total'). value= result;
            
        }


        function suma(){
            var FirstNumberValue = document.getElementById('total').value;
            var SecondNumberValue = document.getElementById('bayar').value;
            var result = SecondNumberValue-FirstNumberValue ;
    
            document.getElementById('kembalian'). value= result;
            
        }
</script>
@endsection