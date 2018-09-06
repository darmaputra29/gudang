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
                <option value="Rawat Inap">Rawat Inap</option>
                <option value="UGD">UGD</option>
                <option value="Poli Mahasiswa">Poli Mahasiswa</option>
                <option value="Poli Umum">Poli Umum</option>
                <option value="Poli Penyakit Dalam">Poli Penyakit Dalam</option>
                <option value="Poli Obgyn">Poli Obgyn</option>
                <option value="Poli Obgyn">Poli Bedah</option>
                <option value="Poli Obgyn">Poli Anak</option>
                <option value="Poli Obgyn">Poli Jantung</option>
                <option value="Poli Obgyn">Poli Saraf</option>
             </select>   
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-lg-2 control-label">Jumlah Pengeluaran :</label>
            <div class="col-lg-5">
             <input class="form-control" type="text" name="jumlah">
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-lg-2 control-label">Tgl_Pengeluaran:</label>
            <div class="col-lg-5">
             <input class="form-control" type="date" name="tgl_pengeluaran">
            </div>
        </div>
        
        <input type="submit" class="btn btn-default col-lg-1 col-lg-offset-3" value="Pinjam">
    </form>
</div>