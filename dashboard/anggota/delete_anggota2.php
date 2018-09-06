<?php
include("../fungsi/koneksi.php");

$id = isset($_GET['id']) ? $_GET['id'] : "";

if ($id=="") {
	echo "<script>alert('Pilih dulu data yang akan di-hapus');</script>";
	echo "<meta http-equiv='refresh' content='0; url=?menu=list_anggota2'>";
} else {
	$query = mysql_query("DELETE FROM data_anggota WHERE id_anggota='$id'");

	if ($query) {
		echo "<script>alert('Data berhasil dihapus')</script>";
		echo "<meta http-equiv='refresh' content='0; url=?menu=list_anggota2'>";
	} else {
		echo "Data anda gagal dihapus. Ulangi sekali lagi";
		echo "<meta http-equiv='refresh' content='0; url=?menu=list_anggota2'>";
	}
}
?>