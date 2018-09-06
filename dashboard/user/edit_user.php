<?php
include("../fungsi/koneksi.php");
$no = isset($_GET['no']) ? $_GET['no'] : "";
$query = mysql_query("select * from admin");
$row = mysql_fetch_array($query);
?>

<div class="col-lg 12">
    <form action="?menu=proses_edit_user" class="form-horizontal" method="post">
        <input type="hidden" name="no" value="<?php echo $row['no'];?>">
        
<h4> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Edit User </h4>
         <div class="form-group">
            <label class="col-lg-2 control-label">Username :</label>
            <div class="col-lg-5">
             <input class="form-control" type="text" name="username" value="<?php echo $row['username'];?>" disable>
            </div>
        </div>
         
         <div class="form-group">
            <label class="col-lg-2 control-label">Password :</label>
            <div class="col-lg-5">
             <input class="form-control" type="text" name="password" value="<?php echo $row['password'];?>" disable>
            </div>
        </div>
		
		<!--<div class="form-group">
            <label class="col-lg-2 control-label">Hak Akses :</label>
            <div class="col-lg-5">
             <input class="form-control" type="text" name="hak_akses" value="<?php echo $row['hak_akses'];?>" disable>
            </div>
        </div>-->
		 
		 <input type="submit" class="btn btn-default col-lg-1 col-lg-offset-3" value="Edit">
    </form>
</div>


