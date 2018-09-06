<?php
include("../fungsi/koneksi.php");
$tgl     = isset($_POST['tgl']) ? addslashes($_POST['tgl']) : "";
$bln     = isset($_POST['bln']) ? addslashes($_POST['bln']) : "";
$thn     = isset($_POST['thn']) ? addslashes($_POST['thn']) : "";
$tgl1 = isset($_POST['tgl1']) ? addslashes($_POST['tgl1']) : "";
$bln1 = isset($_POST['bln1']) ? addslashes($_POST['bln1']) : "";
$thn1 = isset($_POST['thn1']) ? addslashes($_POST['thn1']) : "";

$tglawal=$thn.'-'.$bln.'-'.$tgl;
$tglakhir=$thn1.'-'.$bln1.'-'.$tgl1;
echo "<script>alert('$tglawal');</script>";
/*
if($id==""||$nama==""||$jk==""||$no_telepon==""||$alamat==""||$status==""){
    echo "<script>alert('Pengisian form belum benar. Ulangi lagi');</script>";
	echo "<meta http-equiv='refresh' content='0; url=?menu=add_anggota'>";
}

else{
$query = mysql_query("update data_anggota set id='$id', nama='$nama', jk='$jk', no_telepon='$no_telepon', alamat='$alamat', status='$status' WHERE id='$id'");
    if ($query) {
	    echo "<script>alert('Data berhasil di update . Terima Kasih')</script>";
	    echo "<meta http-equiv='refresh' content='0; url=?menu=list_anggota'>";
    } else {
	    echo "<script>alert('Data anda gagal dimasukkan. Ulangi sekali lagi')</script>";
	    echo mysql_error();
	    echo "<meta http-equiv='refresh' content='0; url=?menu=edit_anggota'>";
    }
}*/
?>