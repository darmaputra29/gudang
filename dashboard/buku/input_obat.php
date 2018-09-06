<?php
include("../fungsi/koneksi.php");
$nama = isset($_POST['nama']) ? addslashes($_POST['nama']) : "";
$jenis = isset($_POST['jenis']) ? addslashes($_POST['jenis']) : "";
$kemasan = isset($_POST['kemasan']) ? addslashes($_POST['kemasan']) : "";
$tgl_masuk_terakhir = isset($_POST['tgl_masuk_terakhir']) ? addslashes($_POST['tgl_masuk_terakhir']) : "";
$stok = isset($_POST['stok']) ? addslashes($_POST['stok']) : "";
$jumlah_masuk = isset($_POST['jumlah_masuk']) ? addslashes($_POST['jumlah_masuk']) : "";
$tglexpayer = isset($_POST['tglexpayer']) ? addslashes($_POST['tglexpayer']) : "";
$harga = isset($_POST['harga']) ? addslashes($_POST['harga']) : "";

if($nama==""||$jenis==""){
    echo "<script>alert('Pengisian form belum benar. Ulangi lagi');</script>";
	echo "<meta http-equiv='refresh' content='0; url=?menu=add_obat'>";
}

else{
$query = mysql_query("insert into obat(nama, jenis,kemasan,tgl_masuk_terakhir,stok,jumlah_masuk, tglexpayer, harga) values('$nama','$jenis','$kemasan','$tgl_masuk_terakhir','$stok','$jumlah_masuk','$tglexpayer','$harga')");
    if ($query) {
	    echo "<script>alert('Data berhasil ditambahkan . Terima Kasih')</script>";
	    echo "<meta http-equiv='refresh' content='0; url=?menu=semua_obat'>";
    } else {
	    echo "<script>alert('Data anda gagal dimasukkan karena. Ulangi sekali lagi')</script>";
	    echo mysql_error();
	    //echo "<meta http-equiv='refresh' content='0; url=?menu=add_obat'>";
    }
}
?>