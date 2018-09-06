<?php


function getData(){
    include("koneksi.php");


                    
					
    $query = mysql_query("select * from data_buku");
    while($r=mysql_fetch_array($query)){
	$query2 = mysql_query("select count(id_pinjaman) from trans_pinjam where id='$r[id]' and status='pinjam' ");
	while($r2 = mysql_fetch_array($query2)){
	$stok=$r2['count(id_pinjaman)'];
	//echo "<script>alert('$stok');</script>";
	$stok=$r['jumlah_buku']-$stok;
	//echo "<script>alert('$stok');</script>";
	//$stok=1;
	}
if ($stok!=0){
        echo "<option value='$r[id]-$r[judul]'> $r[judul] </option>";
    }  
}
}

function getDataNama(){
    include("koneksi.php");
    $query = mysql_query("select * from obat");
    while($r=mysql_fetch_array($query)){
        echo "<option value='$r[id]'> $r[nama] - $r[jenis] </option>";
    }  
}

function terlambat($tgl_dateline, $tgl_kembali) {

$tgl_dateline_pcs = explode ("-", $tgl_dateline);
$tgl_dateline_pcs = $tgl_dateline_pcs[2]."-".$tgl_dateline_pcs[1]."-".$tgl_dateline_pcs[0];

$tgl_kembali_pcs = explode ("-", $tgl_kembali);
$tgl_kembali_pcs = $tgl_kembali_pcs[2]."-".$tgl_kembali_pcs[1]."-".$tgl_kembali_pcs[0];

$selisih = strtotime ($tgl_kembali_pcs) - strtotime ($tgl_dateline_pcs);

$selisih = $selisih / 86400;
//$selisih++;
if ($selisih>=1) {
	$hasil_tgl = floor($selisih);
}
else {
	$hasil_tgl = 0;
}
return $hasil_tgl;
}
?>
