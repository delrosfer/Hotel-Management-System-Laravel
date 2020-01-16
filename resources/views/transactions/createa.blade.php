<!DOCTYPE html>
<html>
  <head>
    <title>Hotel Reservation Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, textarea, label { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 50px;
      color: #fff;
      z-index: 2;
      line-height: 83px;
      }
      legend {
      padding: 10px;      
      font-family: Roboto, Arial, sans-serif;
      font-size: 18px;
      color: #fff;
      background-color: #006622;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 8px #006622; 
      }
      .banner {
      position: relative;
      height: 250px;
      background-image: url("/uploads/media/default/0001/02/b23a2c8c49b8e43249487140e4c2e22a63bd7cb8.jpeg");  
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.4); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      input[type="date"] {
      padding: 4px 5px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color:  #006622;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 3px 0  #006622;
      color: #006622;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .item span {
      color: red;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #00b33c;
      }
      .item i {
      right: 1%;
      top: 30px;
      z-index: 1;
      }
      .week {
      display:flex;
      justify-content:space-between;
      }
      .columns {
      display:flex;
      justify-content:space-between;
      flex-direction:row;
      flex-wrap:wrap;
      }
      .columns div {
      width:48%;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      input[type=radio], input[type=checkbox]  {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 15px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      .question-answer label {
      display: block;
      }
      label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      input[type=radio]:checked + label:before, label.radio:hover:before {
      border: 2px solid  #006622;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid  #006622;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .flax {
      display:flex;
      justify-content:space-around;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background:  #006622;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background:  #00b33c;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .name-item div {
      width: calc(50% - 20px);
      }
      .name-item div input {
      width:97%;}
      .name-item div label {
      display:block;
      padding-bottom:5px;
      }
      }
    </style>

 
  </head>
  <body>
@php 






@endphp
  <div class="row">
  <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Tambahkan Transaksi</h2>
        </div>
        <div class="pull-right">
            <a class="btn-block" href="{{ route('transactions.index') }}"> Back</a>
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
   <div class="testbox">
    <form>
      <div class="banner">
        <h1>Hotel Reservation Form</h1>
      </div>
      <br/>
      <br/>
      <fieldset>
      <legend>Transaction</legend>

<form action="{{ route('transactions.store') }}" method="POST">
    @csrf
  

      <div class="columns">
        <div class="item">
      <p>Nama Tamu</p>
      <select  name="nama_tamu" id="nama_tamu">
                @foreach($guests as $guest)
                <option value="{{$guest->nama_tamu}}">{{$guest->nama_tamu}}</option>
                @endforeach
                </select>
           
            </div>
              
      <div class="item">
      <p>Nama Kamar</p>
      <select name="nama_kamar"  id="nama_kamar" onchange='changeValueNama(this.value)' required="required">
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
      

<div class="item">
      <label for="tanggal_cekin">Check-in Date <span>*</span></label>
      <input id="tanggal_cekin" type="date" id="dt1" name="tanggal_cekin" >
      <i class="fas fa-calendar-alt"></i>
      </div>
      <div class="item">
      <label for="tanggal_cekout">Check-out Date <span>*</span></label>
      <input id="tanggal_cekout" type="date" id="dt2" name="tanggal_cekout" onChange="sumdt();"/ >
      <i class="fas fa-calendar-alt"></i>
      </div>

<div class="item">
            <label for="harga_kamar">Harga Kamar<span>*</span></label>
            <input id="harga_kamar" type="text"   name="harga_kamar" >
          </div>
<div class="item">
            <label for="jumlah_kamar">Jumlah Kamar<span>*</span></label>
            <input id="jumlah_kamar" type="text"   name="jumlah_kamar" >
          </div>

<div class="item">
            <label for="lama_inap">Lama Inap<span>*</span></label>
            <input id="lama_inap" type="text"   name="lama_inap" onkeyup="sum();"/>
          </div>

<div class="item">
            <label for="total">Total<span>*</span></label>
            <input id="total" type="text"   name="total" >
          </div>

<div class="item">
            <label for="bayar">Bayar<span>*</span></label>
            <input id="bayar" type="text"   name="bayar" onkeyup="suma();"/>
          </div>

<div class="item">
            <label for="kembalian">Kembalian<span>*</span></label>
            <input id="kembalian" type="text"   name="kembalian" >
          </div>


</div>
</fieldset>
      <div class="btn-block">
      <button type="submit" href="{{ route('transactions.index') }}" >Submit</button>
      </div>
    
      
    </div>
      </div>
    </form>
    </div>
  </body>

  
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

        function sumdt(){
            var FirstNumberValues = document.parseInt.getElementById('dt1').value;
            var SecondNumberValues = document.parseInt.getElementById('dt2').value;
            var result = SecondNumberValues-FirstNumberValues ;
    
            document.getElementById('lama_inap'). value= result;
            
        }
</script>

</html>