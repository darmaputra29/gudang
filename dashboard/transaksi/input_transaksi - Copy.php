<?php
$id					= isset($_POST['id']) ? $_POST['id'] : "";
$ruangan			= isset($_POST['ruangan']) ? $_POST['ruangan'] : "";
$jumlah				= isset($_POST['jumlah']) ? $_POST['jumlah'] : "";
$tgl_pengeluaran    = isset($_POST['peminjam']) ? $_POST['peminjam'] : "";

//echo "<script>alert('$tgl_pinjam');</script>";
//echo "<script>alert('$tgl_kembali');</script>";
//echo "<script>alert('$id_buku');</script>";
//echo "<script>alert('$id_peminjam');</script>";



	include "../fungsi/koneksi.php";
	
		$qt	= mysql_query("INSERT INTO pengeluaran (id,ruangan,jumlah,tgl_pengeluaran) VALUES ('$id', '$ruangan','$jumlah','$tgl_pengeluaran')") or die ("Gagal Masuk".mysql_error());
		//$qu	= mysql_query("UPDATE data_buku SET jumlah_buku=(jumlah_buku-1) WHERE id=$id_buku ");

		if ($qt) {
			echo "<script>alert('BERHASIL DI INPUT...');</script>";
			echo "<meta http-equiv='refresh' content='0; url=?menu=pinjam_buku'>";
		} else {
			echo "<script>alert('Transaksi GAGAL...');</script>";
			//echo "<meta http-equiv='refresh' content='0; url=?menu=pinjam_buku'>";
		}
?>