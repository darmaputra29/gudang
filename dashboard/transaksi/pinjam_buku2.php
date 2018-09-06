<?php
include("header4.php");
require("../fungsi/config.php");
include("koneksi.php");
    $query = mysql_query("select mksmlhari from bantuan");
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
?>

<div class="col-lg-12">
    <form action="?menu=input_transaksi" class="form-horizontal" method="post" id="form_pinjam">
        <input type="hidden" name="pinjam" value="<?php echo $pinjam; ?>">
        <input type="hidden" name="kembali" value="<?php echo $kembali; ?>">
        
        <div class="form-group">
            <label class="col-lg-2 control-label">Judul Buku :</label>
            <div class="col-lg-5">
             <select name="buku" class="form-control">
                <option> Pilih judul Buku</option>
                <?php getDataJudul();?>
             </select>
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-lg-2 control-label">Nama Peminjam :</label>
            <div class="col-lg-5">
             <select name="peminjam" class="form-control">
                <option> Pilih Nama Peminjam</option>
                <?php getDataNama();?>
             </select>
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-lg-2 control-label">Tanggal Pinjam :</label>
            <div class="col-lg-5">
             <p class="form-control-static" ><?php echo $pinjam;?></p>
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-lg-2 control-label">Tanggal Kembali :</label>
            <div class="col-lg-5">
             <p class="form-control-static"><?php echo $kembali;?></p>
            </div>
        </div>
        
        <input type="submit" class="btn btn-default col-lg-1 col-lg-offset-3" value="Pinjam">
    </form>
</div>