<?php
include("../fungsi/koneksi.php");
$id   = isset($_POST['id']) ? addslashes($_POST['id']) : "";
$a=0;
			//$tgl=date('dmY');
			$p=mysql_query('select *from data_anggota');
			$a=mysql_num_rows($p);
			$a++;
			$id=$id.$a;
$nama = isset($_POST['nama']) ? addslashes($_POST['nama']) : "";
$jk    = isset($_POST['jk']) ? addslashes($_POST['jk']) : "";
$no_telepon  = isset($_POST['no_telepon']) ? addslashes($_POST['no_telepon']) : "";
$alamat	   = isset($_POST['alamat']) ? addslashes($_POST['alamat']) : "";
$status  = isset($_POST['status']) ? addslashes($_POST['status']) : "";

if($id==""||$nama==""||$jk==""||$no_telepon==""||$alamat==""||$status==""){
    echo "<script>alert('Pengisian form belum benar. Ulangi lagi');</script>";
	echo "<meta http-equiv='refresh' content='0; url=?menu=add_anggota'>";
}

else{
$query = mysql_query("insert into data_anggota (id_anggota,nama,jk,no_telepon,alamat,status) values('$id','$nama','$jk','$no_telepon','$alamat','$status')");
    if ($query) {
	    echo "<script>alert('Data berhasil ditambahkan . Terima Kasih')</script>";
	    echo "<meta http-equiv='refresh' content='0; url=?menu=add_anggota'>";
    } else {
	    echo "<script>alert('Data anda gagal dimasukkan karena. Ulangi sekali lagi')</script>";
	    echo mysql_error();
	    echo "<meta http-equiv='refresh' content='0; url=?menu=add_anggota'>";
    }
}
?>