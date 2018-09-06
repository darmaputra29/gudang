<?php

require("../fungsi/config.php");
?>

<h2><b>Semua Pengeluaran</b></h2>
<br>
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
        <table class="table table-bordered table-hover" id='table1'>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Obat</th>   
                    <th>Ruangan</th>
                    <th>Jumlah Pengeluaran</th>
                    <th>Tgl Pengeluaran</th>
                </tr>
            </thead>
            
            <tbody>
<?php
include("../fungsi/koneksi.php");
$no=0;
$query = mysql_query("select * from obat, pengeluaran where obat.id=pengeluaran.id");
while($r = mysql_fetch_array($query)){
 $no++;                   
echo "
<tr>
                    <td>$no</td> 
                    <td>$r[nama]</td>
                    <td>$r[ruangan]</td>
                    <td>$r[jumlah]</td>
                    <td>$r[tgl_pengeluaran]</td>
					</tr>
					";



}
?>
    
    </tbody>
    </table>
    </div>
	<table>
	<center>
	<a href="cetakdata/cetak_semua_transaksi.php"><button type="submit" name="simpan" class="btn btn-primary">Cetak Data</button></a>
	<a href="?menu=pertanggalsemua"><button type="submit" name="simpan" class="btn btn-warning">Berdasarkan Tanggal</button></a></center>
	</center>
	</table>
</div>
