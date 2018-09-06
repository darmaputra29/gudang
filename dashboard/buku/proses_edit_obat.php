<?php
include("../fungsi/koneksi.php");
$id    				= isset($_POST['id']) ? addslashes($_POST['id']) : "";
$nama    				= isset($_POST['nama']) ? addslashes($_POST['nama']) : "";
$jenis    				= isset($_POST['jenis']) ? addslashes($_POST['jenis']) : "";
$tgl_masuk_terakhir    		= isset($_POST['tgl_masuk_terakhir']) ? addslashes($_POST['tgl_masuk_terakhir']) : "";
$tglexpayer    				= isset($_POST['tglexpayer']) ? addslashes($_POST['tglexpayer']) : "";
$stok 			= isset($_POST['stok']) ? addslashes($_POST['stok']) : "";
$jumlah_masuk_terakhir 			= isset($_POST['jumlah_masuk_terakhir']) ? addslashes($_POST['jumlah_masuk_terakhir']) : "";


if($nama==""){
    echo "<script>alert('Pengisian form belum benar. Ulangi lagi');</script>";
	echo "<meta http-equiv='refresh' content='0; url=?menu=tambah_stokobat.php'>";
}

else{
$query = mysql_query("select *from obat where id='$id'");
$jumlah=0;
while($r = mysql_fetch_array($query)){
$jumlah=$r["stok"];
}
$jumlah=$jumlah+$stok;

$query1 = mysql_query("update obat set nama='$nama',jenis='$jenis',tgl_masuk_terakhir='$tgl_masuk_terakhir',tglexpayer='$tglexpayer',stok='$jumlah', jumlah_masuk_terakhir='$jumlah_masuk_terakhir' WHERE id='$id'");

	if ($query) {
	    echo "<script>alert('Obat Berhasil di Tambah. Terima Kasih')</script>";
	    echo "<meta http-equiv='refresh' content='0; url=?menu=semua_obat'>";
    } else {
	    echo "<script>alert('Data anda gagal dimasukkan. Ulangi sekali lagi')</script>";
	    echo mysql_error();
	    //echo "<meta http-equiv='refresh' content='0; url=?menu=edit_buku2'>";
    }
}
?>