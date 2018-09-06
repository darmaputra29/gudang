<?php
include("../fungsi/koneksi.php");
$id = isset($_GET['id']) ? $_GET['id'] : "";

$query = mysql_query("select * from obat where id=$id");
$row = mysql_fetch_array($query);
?>
<h3><b> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp TAMBAH STOK OBAT<b></H3>
<br>
<div class="col-lg 12">
    <form action="?menu=proses_edit_obat" class="form-horizontal" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id'];?>"> 
		 <div class="form-group">
            <label class="col-lg-2 control-label">Nama Obat :</label>
            <div class="col-lg-5">
             <input class="form-control" type="text" name="nama" value="<?php echo $row['nama'];?>"readonly>
            </div>
        </div>
		
		<div class="col-lg 12">
    <form action="?menu=proses_edit_obat" class="form-horizontal" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id'];?>"> 
		 <div class="form-group">
            <label class="col-lg-2 control-label">Jenis Obat:</label>
            <div class="col-lg-5">
             <input class="form-control" type="text" name="jenis" value="<?php echo $row['jenis'];?>"readonly>
            </div>
        </div>
		
		 <div class="form-group">
            <label class="col-lg-2 control-label">Tanggal Masuk:</label>
            <div class="col-lg-5">
             <input class="form-control" type="date" name="tgl_masuk_terakhir">
            </div>
        </div>
		
		<div class="form-group">
            <label class="col-lg-2 control-label">Tanggal Expayer:</label>
            <div class="col-lg-5">
             <input class="form-control" type="date" name="tglexpayer">
            </div>
        </div>
		
		
		 <div class="form-group">
            <label class="col-lg-2 control-label">Masukkan Jumlah :</label>
            <div class="col-lg-5">
             <input class="form-control" type="text" name="stok">
            </div>
        </div>
		
		<div class="form-group">
            <label class="col-lg-2 control-label">Komfirmasi Jumlah :</label>
            <div class="col-lg-5">
             <input class="form-control" type="text" name="jumlah_masuk_terakhir">
            </div>
        </div>
		
		 
		
		 
         
         
         <input type="submit" class="btn btn-default col-lg-1 col-lg-offset-3" value="TAMBAH">
    </form>
</div>