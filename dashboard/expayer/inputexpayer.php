<?php
include("../fungsi/koneksi.php");
$id = isset($_POST['id']) ? addslashes($_POST['id']) : "";
$tgl_masuk = isset($_POST['tgl_masuk']) ? addslashes($_POST['tgl_masuk']) : "";
$tgl_expayer = isset($_POST['tgl_expayer']) ? addslashes($_POST['tgl_expayer']) : "";

if($id==""||$tgl_masuk==""){
    echo "<script>alert('Pengisian form belum benar. Ulangi lagi');</script>";
	echo "<meta http-equiv='refresh' content='0; url=?menu=add_obat'>";
}

else{
$query = mysql_query("insert into expayer(id,tgl_masuk,tgl_expayer) values('$id','$tgl_masuk','$tgl_expayer')");
    if ($query) {
	    echo "<script>alert('Data berhasil ditambahkan . Terima Kasih')</script>";
	    echo "<meta http-equiv='refresh' content='0; url=?menu=obatexpayer'>";
    } else {
	    echo "<script>alert('Data anda gagal dimasukkan karena. Ulangi sekali lagi')</script>";
	    echo mysql_error();
	    //echo "<meta http-equiv='refresh' content='0; url=?menu=add_obat'>";
    }
}
?>