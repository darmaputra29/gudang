<?php include("header3.php");?>

<?php
include("../fungsi/koneksi.php");
$id=$_GET ['id'];
$query = mysql_query("select * from data_anggota where id_anggota='$id'");
while($r = mysql_fetch_array($query)){
echo "
<div class='table-responsive col-md-8'>
<table class='table table-striped table-bordered table-hover'>

<tr>
	<td class='col-md-4'><label>ID</label></td>
	<td><input value='$r[id_anggota]' class='form-control'= readonly></td>
</tr>
	
<tr>
	<td class='col-md-4'><label>Nama</label></td>
	<td><input value='$r[nama]' class='form-control'= readonly></td>
</tr>

<tr>
	<td class='col-md-4'><label>Jenis Kelamin</label></td>
	<td><input value='$r[jk]' class='form-control'= readonly></td>
</tr>

<tr>
	<td class='col-md-4'><label>No.Telepon</label></td>
	<td><input value='$r[no_telepon]' class='form-control'= readonly></td>
</tr>

<tr>
	<td class='col-md-4'><label>Alamat</label></td>
	<td><input value='$r[alamat]' class='form-control'= readonly></td>
</tr>

<tr>
	<td class='col-md-4'><label>Status</label></td>
	<td><input value='$r[status]' class='form-control'= readonly></td>
</tr>

    ";


}
?>
    
    </tbody>
    </table>
    </div>
</div>