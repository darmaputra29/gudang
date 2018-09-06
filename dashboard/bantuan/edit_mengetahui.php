<?php
include("../fungsi/koneksi.php");
$no = isset($_GET['no']) ? $_GET['no'] : "";
$query = mysql_query("select * from bantuan where no=1");
$row = mysql_fetch_array($query);
?>

<div class="col-lg 12">
    <form action="?menu=proses_edit_mengetahui" class="form-horizontal" method="post">
        <input type="hidden" name="no" value="<?php echo $row['no'];?>">
        
<h4> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Edit Mengetahui </h4>
         <div class="form-group">
            <label class="col-lg-2 control-label">Mengetahui :</label>
            <div class="col-lg-5">
             <input class="form-control" type="text" name="tndtngn" value="<?php echo $row['tndtngn'];?>" disable>
            </div>
        </div>
         
         <div class="form-group">
            <label class="col-lg-2 control-label">NIP :</label>
            <div class="col-lg-5">
             <input class="form-control" type="text" name="nip" value="<?php echo $row['nip'];?>" disable>
            </div>
        </div>
		 
		 <input type="submit" class="btn btn-default col-lg-1 col-lg-offset-3" value="Simpan">
    </form>
</div>


