<?php
include("../fungsi/koneksi.php");
$username     = isset($_POST['username'])? addslashes($_POST['username']) : "";
$password     = isset($_POST['password']) ? addslashes($_POST['password']) : "";
//$hak_akses = isset($_POST['hak_akses']) ? addslashes($_POST['hak_akses']) : ""; 

$query = mysql_query("update admin set username='$username ', password='$password'");
    if ($query) {
	    echo "<script>alert('Data berhasil di update . Terima Kasih')</script>";
	    echo "<meta http-equiv='refresh' content='0; url=?menu=bantuan'>";
    } else {
	    echo "<script>alert('Data anda gagal dimasukkan. Ulangi sekali lagi')</script>";
	    echo mysql_error();
	    echo "<meta http-equiv='refresh' content='0; url=?menu=edit_user'>";
}
?>