<?php
include("../fungsi/koneksi.php");
$id     = isset($_POST['id']) ? addslashes($_POST['id']) : "";
$nama = isset($_POST['nama']) ? addslashes($_POST['nama']) : "";
$jk    = isset($_POST['jk']) ? addslashes($_POST['jk']) : "";
$no_telepon  = isset($_POST['no_telepon']) ? addslashes($_POST['no_telepon']) : "";
$alamat	   = isset($_POST['alamat']) ? addslashes($_POST['alamat']) : "";
$status  = isset($_POST['status']) ? addslashes($_POST['status']) : "";

if($id==""||$nama==""||$jk==""||$no_telepon==""||$alamat==""||$status==""){
    echo "<script>alert('Pengisian form belum benar. Ulangi lagi');</script>";
	echo "<meta http-equiv='refresh' content='0; url=?menu=add_anggota2'>";
}

else{
$query = mysql_query("update data_anggota set id_anggota='$id', nama='$nama', jk='$jk', no_telepon='$no_telepon', alamat='$alamat', status='$status' WHERE id_anggota='$id'");
    if ($query) {
	    echo "<script>alert('Data berhasil di update . Terima Kasih')</script>";
	    echo "<meta http-equiv='refresh' content='0; url=?menu=list_anggota2'>";
    } else {
	    echo "<script>alert('Data anda gagal dimasukkan. Ulangi sekali lagi')</script>";
	    echo mysql_error();
	    echo "<meta http-equiv='refresh' content='0; url=?menu=edit_anggota2'>";
    }
}
?>