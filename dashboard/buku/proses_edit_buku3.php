<?php
include("../fungsi/koneksi.php");
$id     				= isset($_POST['id']) ? addslashes($_POST['id']) : "";
$judul     				= isset($_POST['judul']) ? addslashes($_POST['judul']) : "";
$pengarang 				= isset($_POST['pengarang']) ? addslashes($_POST['pengarang']) : "";
$penerbit  				= isset($_POST['penerbit']) ? addslashes($_POST['penerbit']) : "";
$th_terbit  			= isset($_POST['th_terbit']) ? addslashes($_POST['th_terbit']) : "";
$isbn  					= isset($_POST['isbn']) ? addslashes($_POST['isbn']) : "";
$th_pembelian  			= isset($_POST['th_pembelian']) ? addslashes($_POST['th_pembelian']) : "";
$jenis	   				= isset($_POST['jenis']) ? addslashes($_POST['jenis']) : "";
$jumlah_buku			= isset($_POST['jumlah_buku']) ? addslashes($_POST['jumlah_buku']) : "";
$asal_usul_perolehan	= isset($_POST['asal_usul_perolehan']) ? addslashes($_POST['asal_usul_perolehan']) : "";

if($id==""||$judul==""||$pengarang==""||$penerbit==""||$th_terbit==""||$th_pembelian==""||$jenis==""||$jumlah_buku==""||$asal_usul_perolehan==""){
    echo "<script>alert('Pengisian form belum benar. Ulangi lagi');</script>";
	echo "<meta http-equiv='refresh' content='0; url=?menu=add_buku3'>";
}

else{
$query = mysql_query("update data_buku set id='$id',judul='$judul', pengarang='$pengarang', penerbit='$penerbit', th_terbit='$th_terbit', isbn='$isbn', th_pembelian='$th_pembelian', jenis='$jenis',jumlah_buku='$jumlah_buku',asal_usul_perolehan='$asal_usul_perolehan' WHERE id='$id'");

	if ($query) {
	    echo "<script>alert('Data berhasil di update . Terima Kasih')</script>";
	    echo "<meta http-equiv='refresh' content='0; url=?menu=list_buku3'>";
    } else {
	    echo "<script>alert('Data anda gagal dimasukkan. Ulangi sekali lagi')</script>";
	    echo mysql_error();
	    //echo "<meta http-equiv='refresh' content='0; url=?menu=edit_buku2'>";
    }
}
?>