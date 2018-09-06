<?php
include("../fungsi/koneksi.php");
$no = isset($_GET['no']) ? $_GET['no'] : "";
$query = mysql_query("select * from admin, bantuan");
$row = mysql_fetch_array($query);
?>
<div class="col-lg 12">
    <form action="?menu=edit_mengetahui" class="form-horizontal" method="post">
        <input type="hidden" name="no" value="<?php echo $row['no'];?>">
        
<h4> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Edit Mengetahui </h4>
         <div class="form-group">
            <label class="col-lg-2 control-label">Mengetahui :</label>
            <div class="col-lg-5">
			<input value="<?php echo $row['tndtngn'];?> "class='form-control'= readonly>
            </div>
        </div>
		
		 <div class="form-group">
            <label class="col-lg-2 control-label">NIP :</label>
            <div class="col-lg-5">
			<input value="<?php echo $row['nip'];?> "class='form-control'= readonly>
            </div>
        </div>
		
		 <input type="submit" class="btn btn-default col-lg-1 col-lg-offset-3" value="Edit">
		
		</form>
	</div>
		<br>
		<br>
		<br>
		<br>
		<br>
		
		<div class="col-lg 12">
    <form action="?menu=edit_user" class="form-horizontal" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id'];?>">
        
<h4> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Edit Users </h4>
         <div class="form-group">
            <label class="col-lg-2 control-label">Username :</label>
            <div class="col-lg-5">
			<input value="<?php echo $row['username'];?> "class='form-control'= readonly>
            </div>
        </div>
		
		 <div class="form-group">
            <label class="col-lg-2 control-label">Password :</label>
            <div class="col-lg-5">
			<input value="<?php echo $row['password'];?> "class='form-control'= readonly>
            </div>
        </div>
		
		 <input type="submit" class="btn btn-default col-lg-1 col-lg-offset-3" value="Edit">
    </form>
</div>


