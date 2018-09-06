<?php
include "../fungsi/koneksi.php"; //memanggil file koneksi_db.php
date_default_timezone_set("Asia/Jakarta");


$item  = isset($_POST['item']) ? $_POST['item'] : "";
$jumlahDenda=0;
$i=0;

if ($item == "") {
	echo "<script>alert('Pilih dulu buku yang akan dikembalikan');</script>";
	echo "<meta http-equiv='refresh' content='0; url=?menu=kembali_buku'>";
}
else {
	
	while($i<count($item)){
		$hasil = explode("&", $item[$i]);
		$id	= $hasil[0];
		$judul	= $hasil[1];
		$denda	= $hasil[2];
		$tgl=date('Y-m-d');
		$us=mysql_query("UPDATE trans_pinjam SET status='kembali', tgl_dikembalikan='$tgl' WHERE id_pinjaman='$id'")or die ("Gagal update".mysql_error());
		//$uj=mysql_query("UPDATE data_buku SET jumlah_buku=(jumlah_buku+1) WHERE judul='$judul'")or die ("Gagal update".mysql_error());
		$jumlahDenda += $denda;
		if ($us || $uj) {
		
		$us=mysql_query("UPDATE trans_pinjam SET denda='$denda' WHERE id_pinjaman='$id'")or die ("Gagal update".mysql_error());
		
		echo "<meta http-equiv='refresh' content='0; url=?menu=kembali_buku'>";
	}
	else {
		echo "<script>alert('Gagal Dikembalikan')</script>";
		echo "<meta http-equiv='refresh' content='0; url=?menu=kembali_buku'>";
	}
		$i++;

	}
	echo "<script>alert('Berhasil Dikembalikan \\n  Total Denda : Rp.$jumlahDenda')</script>";
	//echo "<script>alert('$id')</script>";
	
}

?>
