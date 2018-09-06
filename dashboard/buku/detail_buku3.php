<?php include("header3.php");?>

<?php
include("../fungsi/koneksi.php");
$id=$_GET ['id'];
$query = mysql_query("select * from data_buku where id='$id'");
while($r = mysql_fetch_array($query)){
echo "
<div class='table-responsive col-md-8'>
<table class='table table-striped table-bordered table-hover'>

<tr>
	<td class='col-md-4'><label>ID</label></td>
	<td><input value='$r[id]' class='form-control'= readonly></td>
</tr>
	
<tr>
	<td class='col-md-4'><label>Judul</label></td>
	<td><input value='$r[judul]' class='form-control'= readonly></td>
</tr>

<tr>
	<td class='col-md-4'><label>Pengarang</label></td>
	<td><input value='$r[pengarang]' class='form-control'= readonly></td>
</tr>

<tr>
	<td class='col-md-4'><label>Penerbit</label></td>
	<td><input value='$r[penerbit]' class='form-control'= readonly></td>
</tr>

<tr>
	<td class='col-md-4'><label>Tahun Terbit</label></td>
	<td><input value='$r[th_terbit]' class='form-control'= readonly></td>
</tr>

<tr>
	<td class='col-md-4'><label>ISBN</label></td>
	<td><input value='$r[isbn]' class='form-control'= readonly></td>
</tr>

<tr>
	<td class='col-md-4'><label>Tahun Pembelian</label></td>
	<td><input value='$r[th_pembelian]' class='form-control'= readonly></td>
</tr>

<tr>
	<td class='col-md-4'><label>Jenis</label></td>
	<td><input value='$r[jenis]' class='form-control'= readonly></td>
</tr>

<tr>
	<td class='col-md-4'><label>Jumlah</label></td>
	<td><input value='$r[jumlah_buku]' class='form-control'= readonly></td>
</tr>

<tr>
	<td class='col-md-4'><label>Asal-usul perolehan</label></td>
	<td><input value='$r[asal_usul_perolehan]' class='form-control'= readonly></td>
</tr>

    ";


}
?>
    
    </tbody>
    </table>
    </div>
</div>