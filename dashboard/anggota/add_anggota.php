<?php
include("header0.php");
include("koneksi.php");
//$tgl=date('dmY');
			$a=0;
			//$tgl=date('dmY');
			$p=mysql_query('select *from data_anggota');
			$a=mysql_num_rows($p);
			$a++;
			
?>
<div class="col-lg 12">
    <form action="?menu=input_anggota" class="form-horizontal" method="post">
         <div class="form-group">
            <label class="col-lg-2 control-label">ID :</label>
            <div class="col-lg-2">
             <input class="form-control" style='width:170px' type="text" name="id">
			 </div>
			 <div class="col-lg-5">
             <input class="form-control" style='width:50px' type="text"value='<?php echo $a; ?>' name="" disabled>
            </div>
        </div>
         
         <div class="form-group">
            <label class="col-lg-2 control-label">Nama :</label>
            <div class="col-lg-5">
             <input class="form-control" type="text" name="nama">
            </div>
        </div>
         
         <div class="form-group">
            <label class="col-lg-2 control-label">Jenis Kelamin :</label>
            <div class="col-lg-5">
             <select class="form-control" name="jk">
                <option> Pilih Jenis Kelamin </option>
                <option value="LK">Laki-Laki</option>
                <option value="PR">Perempuan</option>
             </select>   
            </div>
        </div>
         
         <div class="form-group">
            <label class="col-lg-2 control-label">No.Telepon :</label>
            <div class="col-lg-5">
             <input class="form-control" type="text" name="no_telepon">
            </div>
        </div>
         
         <div class="form-group">
            <label class="col-lg-2 control-label">Alamat :</label>
            <div class="col-lg-5">
             <input class="form-control" type="text" name="alamat">
            </div>
         </div>
         
         <div class="form-group">
            <label class="col-lg-2 control-label">Status :</label>
            <div class="col-lg-5">
             <select class="form-control" name="status">
                <option> Pilih Status Anggota </option>
                <option value="karyawan">Karyawan</option>
                <option value="umum">Umum</option>
             </select>   
            </div>
        </div>
         
         <input type="submit" class="btn btn-default col-lg-1 col-lg-offset-3" value="Input">
    </form>
</div>