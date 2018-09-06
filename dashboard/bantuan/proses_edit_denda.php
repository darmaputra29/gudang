<?php
include("../fungsi/koneksi.php");
$no     = isset($_POST['no']);
$denda     = isset($_POST['denda']) ? addslashes($_POST['denda']) : "";
$mksmlhari = isset($_POST['mksmlhari']) ? addslashes($_POST['mksmlhari']) : ""; 
 /*echo "<script>alert('$no')</script>";
 echo "<script>alert('$denda')</script>";
 echo "<script>alert('$mksmlhari')</script>";*/


/*if($denda==""||$mksmlhari==""||){
    echo "<script>alert('Pengisian form belum benar. Ulangi lagi');</script>";
	echo "<meta http-equiv='refresh' content='0; url=?menu=edit_denda'>";
}*/

//else{
$query = mysql_query("update bantuan set denda='$denda', mksmlhari='$mksmlhari' WHERE no='$no'");
    if ($query) {
	    echo "<script>alert('Data berhasil di update . Terima Kasih')</script>";
	    echo "<meta http-equiv='refresh' content='0; url=?menu=bantuan'>";
    } else {
	    echo "<script>alert('Data anda gagal dimasukkan. Ulangi sekali lagi')</script>";
	    echo mysql_error();
	    echo "<meta http-equiv='refresh' content='0; url=?menu=edit_denda'>";
    }
//}
?>