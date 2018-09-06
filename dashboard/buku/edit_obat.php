<?php
include("../fungsi/koneksi.php");
$id = isset($_GET['id']) ? $_GET['id'] : "";

$query = mysql_query("select * from obat where id=$id");
$row = mysql_fetch_array($query);
?>
<h3><b> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp EDIT OBAT<b></H3>
<br>
<div class="col-lg 12">
    <form action="?menu=proses_edit_obat2" class="form-horizontal" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id'];?>">
		 
		 <div class="form-group">
            <label class="col-lg-2 control-label">Nama Obat :</label>
            <div class="col-lg-5">
             <input class="form-control" type="text" name="nama" value="<?php echo $row['nama'];?>">
            </div>
        </div>
		
		<div class="form-group">
            <label class="col-lg-2 control-label">Jenis Obat:</label>
            <div class="col-lg-5">
             <input class="form-control" type="text" name="jenis" value="<?php echo $row['jenis'];?>"readonly>
            </div>
        </div>        				
         
         <div class="form-group">
            <label class="col-lg-2 control-label">Tanggal Masuk Terakhir :</label>
            <div class="col-lg-5">
             <input class="form-control" type="date" name="tgl_masuk_terakhir" value="<?php echo $row['tgl_masuk_terakhir'];?>">
            </div>
        </div>
		
		
		<div class="form-group">
            <label class="col-lg-2 control-label">Jumlah Masuk :</label>
            <div class="col-lg-5">
             <input class="form-control" type="text" name="jumlah_masuk" value="<?php echo $row['jumlah_masuk'];?>">
            </div>
        </div>
	
         
         <input type="submit" class="btn btn-default col-lg-1 col-lg-offset-3" value="Update">
    </form>
</div>