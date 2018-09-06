<?php
//include("header4.php");
require("../fungsi/config.php");
include("koneksi.php");
    /*$query = mysql_query("select mksmlhari from bantuan");
    $mksmlhari;
	while($r=mysql_fetch_array($query)){
	
    $mksmlhari=$r['mksmlhari'];    
    }
	// echo "<script>alert('$mksmlhari')</script>";
date_default_timezone_set("Asia/Jakarta"); 
$pinjam			= date("Y-m-d");
//$pinjam++;
$enam_hari		= mktime(0,0,0,date("m"),date("d")+$mksmlhari,date("Y"));
$kembali		= date("Y-m-d", $enam_hari);
*/
?>
<script>
        var htmlobjek;
          $(document).ready(function(){
          //apabila terjadi event onchange terhadap object <select id=propinsi>
            $("#ruang").change(function(){
              var ruang = $("#ruang").val();
              $.ajax({
                url: "ajax/ambilruang.php",
                data: "ruang="+ruang,
                cache: false,
                success: function(msg){
                //jika data sukses diambil dari server kita tampilkan
                //di <select id=kota>
                $("#kota1").html(msg);
                }
              });
            });
                  
        });
    </script>

<h2><b>Input Pengeluran Obat</b></h2>
<br>
<br>
<div class="col-lg-12">
    <form action="?menu=input_pengeluaran" class="form-horizontal" method="post" id="form_pinjam">
        
        <div class="form-group">
            <label class="col-lg-2 control-label">Nama Obat :</label>
            <div class="col-lg-5">
             <select name="id" class="form-control">
                <option> Nama Obat</option>
                <?php getDataNama();?>
             </select>
            </div>
        </div>
		
        
        <div class="form-group">
            <label class="col-lg-2 control-label">Ruangan :</label>
            <div class="col-lg-5">
             <select class="form-control" name="ruangan">
                <option> Pilih Ruangan </option>
                <option value="Apotik">Apotik</option>
             </select>   
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-lg-2 control-label">Jumlah :</label>
            <div class="col-lg-5">
             <input class="form-control" type="text" name="jumlah">
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-lg-2 control-label">Tgl Pengeluaran:</label>
            <div class="col-lg-5">
             <input class="form-control" type="date" name="tgl_pengeluaran">
            </div>
        </div>
		
                    
                    
		
		
        
        <input type="submit" class="btn btn-default col-lg-1 col-lg-offset-3" value="Proses">
    </form>
</div>