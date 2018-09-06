<?php
include("../fungsi/koneksi.php");
$no     = isset($_POST['no']);
$tndtngn     = isset($_POST['tndtngn']) ? addslashes($_POST['tndtngn']) : "";
$nip = isset($_POST['nip']) ? addslashes($_POST['nip']) : ""; 

$query = mysql_query("update bantuan set tndtngn='$tndtngn ', nip='$nip' WHERE no='$no'");
    if ($query) {
	    echo "<script>alert('Data berhasil di update . Terima Kasih')</script>";
	    echo "<meta http-equiv='refresh' content='0; url=?menu=bantuan'>";
    } else {
	    echo "<script>alert('Data anda gagal dimasukkan. Ulangi sekali lagi')</script>";
	    echo mysql_error();
	    echo "<meta http-equiv='refresh' content='0; url=?menu=edit_mengetahui'>";
}
?>