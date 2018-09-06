<?php
include("../fungsi/koneksi.php");
$query = mysql_query("select * from obat where id=$id");
$row = mysql_fetch_array($query);

$id    				= isset($_POST['id']) ? addslashes($_POST['id']) : "";
$nama    				= isset($_POST['nama']) ? addslashes($_POST['nama']) : "";

$stok 			= isset($_POST['stok']) ? addslashes($_POST['stok']) : "";
$jumlah_masuk_terakhir 			= isset($_POST['jumlah_masuk_terakhir']) ? addslashes($_POST['jumlah_masuk_terakhir']) : "";


$tambah = $row ;


if($nama==""||$jenis==""||$tgl_masuk_terakhir==""||$stok==""||$jumlah_masuk_terakhir==""){
    echo "<script>alert('Pengisian form belum benar. Ulangi lagi');</script>";
	echo "<meta http-equiv='refresh' content='0; url=?menu=add_buku2'>";
}

else{
$query = mysql_query("update obat set nama='$nama', stok='$stok', jumlah_masuk_terakhir='$jumlah_masuk_terakhir' WHERE id='$id'");

	if ($query) {
	    echo "<script>alert('Data berhasil di update . Terima Kasih')</script>";
	    echo "<meta http-equiv='refresh' content='0; url=?menu=semua_obat'>";
    } else {
	    echo "<script>alert('Data anda gagal dimasukkan. Ulangi sekali lagi')</script>";
	    echo mysql_error();
	    //echo "<meta http-equiv='refresh' content='0; url=?menu=edit_buku2'>";
    }
}
?>