<?php
include("../fungsi/koneksi.php");
$id = isset($_POST['id']) ? addslashes($_POST['id']) : "";
//echo "<script>alert('$id')</script>";
$ruangan = isset($_POST['ruangan']) ? addslashes($_POST['ruangan']) : "";
//echo "<script>alert('$ruangan')</script>";
$jumlah = isset($_POST['jumlah']) ? addslashes($_POST['jumlah']) : "";
//echo "<script>alert('$jumlah')</script>";
$tgl_pengeluaran = isset($_POST['tgl_pengeluaran']) ? addslashes($_POST['tgl_pengeluaran']) : "";
//echo "<script>alert('$tgl_pengeluaran')</script>";

if($id==""){
    echo "<script>alert('Pengisian form belum benar. Ulangi lagi');</script>";
	echo "<meta http-equiv='refresh' content='0; url=?menu=add_obat'>";
}

else{
$query = mysql_query("insert into pengeluaran(id, ruangan, jumlah, tgl_pengeluaran) values('$id','$ruangan','$jumlah','$tgl_pengeluaran')");
    if ($query) {
	    echo "<script>alert('Data berhasil ditambahkan . Terima Kasih')</script>";
	    echo "<meta http-equiv='refresh' content='0; url=?menu=semua_pengeluaran'>";
    } else {
	    echo "<script>alert('Data anda gagal dimasukkan karena. Ulangi sekali lagi')</script>";
	    echo mysql_error();
	    //echo "<meta http-equiv='refresh' content='0; url=?menu=add_obat'>";
    }
}
?>