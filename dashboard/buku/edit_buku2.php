<?php
include("header2.php");
include("../fungsi/koneksi.php");
$id = isset($_GET['id']) ? $_GET['id'] : "";

$query = mysql_query("select * from data_buku where id=$id");
$row = mysql_fetch_array($query);
?>
<div class="col-lg 12">
    <form action="?menu=proses_edit_buku2" class="form-horizontal" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id'];?>">
        
         <div class="form-group">
            <label class="col-lg-2 control-label">ID :</label>
            <div class="col-lg-5">
             <input class="form-control" type="text" name="id" value="<?php echo $row['id'];?>">
            </div>
        </div>
		 
		 <div class="form-group">
            <label class="col-lg-2 control-label">Judul :</label>
            <div class="col-lg-5">
             <input class="form-control" type="text" name="judul" value="<?php echo $row['judul'];?>">
            </div>
        </div>
         
         <div class="form-group">
            <label class="col-lg-2 control-label">Pengarang :</label>
            <div class="col-lg-5">
             <input class="form-control" type="text" name="pengarang" value="<?php echo $row['pengarang'];?>">
            </div>
        </div>
		
		  <div class="form-group">
            <label class="col-lg-2 control-label">Penerbit :</label>
            <div class="col-lg-5">
             <input class="form-control" type="text" name="penerbit" value="<?php echo $row['penerbit'];?>">
            </div>
        </div>
         
         <div class="form-group">
            <label class="col-lg-2 control-label">Tahun Terbit :</label>
            <div class="col-lg-5">
             <input class="form-control" type="text" name="th_terbit" value="<?php echo $row['th_terbit'];?>">
            </div>
        </div>
		
		 <div class="form-group">
            <label class="col-lg-2 control-label">ISBN :</label>
            <div class="col-lg-5">
             <input class="form-control" type="text" name="isbn" value="<?php echo $row['isbn'];?>">
            </div>
        </div>
		
		<div class="form-group">
            <label class="col-lg-2 control-label">Tahun Pembelian :</label>
            <div class="col-lg-5">
             <input class="form-control" type="text" name="th_pembelian" value="<?php echo $row['th_pembelian'];?>">
            </div>
        </div>
		
		 <div class="form-group">
            <label class="col-lg-2 control-label">Jenis :</label>
            <div class="col-lg-5">
             <select class="form-control" name="jenis">
               <?php
               if($row['jenis']=="kesehatan"){
                echo "
                <option value='kesehatan'>Buku Kesehatan</option>
                <option value='umum'>Buku Umum</option>";
               }
               else{
                 echo "
				<option value='umum'>Buku Umum</option>
                <option value='kesehatan'>Buku Kesehatan</option>";
                
               }
               ?>
             </select>   
            </div>
        </div>
		
         
        <div class="form-group">
            <label class="col-lg-2 control-label">Jumlah Buku :</label>
            <div class="col-lg-5">
             <input class="form-control" type="text" name="jumlah_buku" value="<?php echo $row['jumlah_buku'];?>">
            </div>
         </div>
         
         <div class="form-group">
            <label class="col-lg-2 control-label">Asal-usul perolehan :</label>
            <div class="col-lg-5">
             <input class="form-control" type="text" name="asal_usul_perolehan" value="<?php echo $row['asal_usul_perolehan'];?>">
            </div>
        </div>
         
         <input type="submit" class="btn btn-default col-lg-1 col-lg-offset-3" value="Update">
    </form>
</div>