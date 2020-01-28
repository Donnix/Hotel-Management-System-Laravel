@extends('layouts.master')
  
@section('content')

 

    
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Tambahkan Transaksi</h2>
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

   <br>
<div class="pull-right">
            <a class="btn btn-primary" href="{{ route('guests.create') }}">Tambah Tamu</a>
        </div>
<form action="{{ route('transactions.store') }}" method="POST">
    @csrf
  
     <div class="row">

     <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Tamu</strong>
                <select class="form-control" name="nama_tamu" id="nama_tamu">
                @foreach($guests as $guest)
                <option value="{{$guest->nama_tamu}}">{{$guest->nama_tamu}}</option>
                @endforeach
                </select>
           
           
            </div>
             </div>
               <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Kamar</strong>
              
                <select name="nama_kamar" class="form-control" class="form-control form-control-md" id="" onchange='changeValueNama(this.value)' required="required">
                            <option value="" disabled="disabled" selected="selected">Nama Kamar</option>
                            <?php
                                $con = mysqli_connect("localhost", "root","", "db_hotel");
                                $query=mysqli_query($con, "select * from kamars order by nama_kamar asc");
                                $result = mysqli_query($con, "select * from kamars");
                                $jsArrayNama = "var nama_kamarName = new Array();\n";
                                while ($row = mysqli_fetch_array($result)) {
                                echo '<option name="nama_kamar"  value="' . $row['nama_kamar'] . '">' . $row['nama_kamar'] . '</option>';
                                $jsArrayNama .= "nama_kamarName['" . $row['nama_kamar'] . "'] = {harga_kamar:'" . addslashes($row['harga_kamar']) . "'};\n";
                                }
                            ?>
                </select>
               
              
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Cek IN </strong>
                <input type="date" name="tanggal_cekin" id="dt1"class="form-control" placeholder="">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Cek OUT </strong>
                <input type="date" name="tanggal_cekout" id="dt2" class="form-control" placeholder="" >
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Harga: </strong>
                        <input class="form-control" name="harga_kamar" id="harga_kamar" readonly="readonly">
                    </div>
                </div>
 <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jumlah Kamar </strong>
                <input type="number" name="jumlah_kamar" id="jumlah_kamar"class="form-control" placeholder=" Masukan jumlah kamar "  >
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Lama Inap </strong>
                <!-- ini teh bukaan php
                
$start_date = new DateTime("tanggal_cekin");
$end_date = new DateTime("tanggal_cekout");
$interval = $start_date->diff($end_date);

ini teh bukaan php{{"$interval->days hari ";}}  ?> 
?> -->
                <input type="number" name="lama_inap" id="lama_inap" class="form-control" placeholder=" Masukan Lama Inap" onkeyup="sum();"/ >
            </div>
        </div>

     <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Total </strong>
                <input type="number" name="total" id="total" class="form-control" readonly="readonly">

               
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Bayar </strong>
                <input type="number" name="bayar" class="form-control" id="bayar" placeholder=" Masukan Bayar " onkeyup="suma();"/>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kembalian </strong>
                <input type="number" name="kembalian" class="form-control" id="kembalian" readonly="readonly">
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