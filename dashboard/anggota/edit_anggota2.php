<?php
include("header.php");
include("../fungsi/koneksi.php");
$id = isset($_GET['id']) ? $_GET['id'] : "";

$query = mysql_query("select * from data_anggota where id_anggota=$id");
$row = mysql_fetch_array($query);
?>
<div class="col-lg 12">
    <form action="?menu=proses_edit_anggota2" class="form-horizontal" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id_anggota'];?>">
        
         <div class="form-group">
            <label class="col-lg-2 control-label">ID :</label>
            <div class="col-lg-5">
             <input class="form-control" type="text" name="id" value="<?php echo $row['id_anggota'];?>" disable>
            </div>
        </div>
         
         <div class="form-group">
            <label class="col-lg-2 control-label">Nama :</label>
            <div class="col-lg-5">
             <input class="form-control" type="text" name="nama" value="<?php echo $row['nama'];?>">
            </div>
        </div>
         
         <div class="form-group">
            <label class="col-lg-2 control-label">Jenis Kelamin :</label>
            <div class="col-lg-5">
             <select class="form-control" name="jk">
               <?php
               if($row['jk']=="LK"){
                echo "
                <option value='LK'>Laki-Laki</option>
                <option value='PR'>Perempuan</option>";
               }
               else{
                 echo "
                <option value='PR'>Perempuan</option>
                <option value='LK'>Laki-Laki</option>";
               }
               ?>
             </select>   
            </div>
        </div>
         
         <div class="form-group">
            <label class="col-lg-2 control-label">No.Telepon :</label>
            <div class="col-lg-5">
             <input class="form-control" type="text" name="no_telepon" value="<?php echo $row['no_telepon'];?>">
            </div>
        </div>
         
         <div class="form-group">
            <label class="col-lg-2 control-label">Alamat :</label>
            <div class="col-lg-5">
             <input class="form-control" type="text" name="alamat" value="<?php echo $row['alamat'];?>">
            </div>
         </div>
         
         <div class="form-group">
            <label class="col-lg-2 control-label">Status :</label>
            <div class="col-lg-5">
             <select class="form-control" name="status">
               <?php
               if($row['status']=="karyawan"){
                echo "
                <option value='karyawan'>Karyawan</option>
                <option value='umum'>Umum</option>";
               }
               else{
                 echo "
				<option value='umum'>Umum</option>
                <option value='karyawan'>Karyawan</option>";
                
               }
               ?>
             </select>   
            </div>
        </div>
         
         <input type="submit" class="btn btn-default col-lg-1 col-lg-offset-3" value="Update">
    </form>
</div>