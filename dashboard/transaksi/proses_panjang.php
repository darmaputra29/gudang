<?php
include "../fungsi/koneksi.php"; //memanggil file koneksi_db.php


$item  = isset($_POST['item']) ? $_POST['item'] : "";
$i=0;

if ($item == "") {
	echo "<script>alert('Pilih dulu buku yang akan dikembalikan');</script>";
	echo "<meta http-equiv='refresh' content='0; url=?menu=kembali_buku'>";
}
else {
    while($i<count($item)){

		$hasil          = explode("&", $item[$i]);
		$id	        = $hasil[0];
		$judul	        = $hasil[1];
		$tgl_kembali	= $hasil[3];
                $lambat         = $hasil[4];
                
                
		if($lambat > 7) {
                        echo "<script>alert('Buku yang dipinjam tidak dapat diperpanjang, karena sudah terlambat lebih dari 7 hari. Kembalikan dahulu, kemudian pinjam kembali !');</script>";
                        echo "<meta http-equiv='refresh' content='0; url=?menu=kembali_buku'>";
                }
                else {
                
                        $pecah			= explode("-",$tgl_kembali);
                        $next_7_hari	= mktime(0,0,0,$pecah[1],$pecah[0]+7,$pecah[2]);
                        $hari_next		= date("d-m-Y", $next_7_hari);
                
                        $update_tgl_kembali=mysql_query("UPDATE trans_pinjam SET tgl_kembali='$hari_next' WHERE id='$id'");
                
                }
                $i++;
	}
        /*
         if ($update_tgl_kembali) {
                echo "<script>alert('Berhasil diperpanjang....');</script>";
                echo "<meta http-equiv='refresh' content='0; url=?menu=kembali_buku'>";
            } else {
                    echo "<script>alert('Gagal diperpanjang');</script>";
                    echo "<meta http-equiv='refresh' content='0; url=?menu=kembali_buku'>";
            }
        */
    }   
?>