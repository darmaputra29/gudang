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
                    <th width= '5px'>No</th>
                    <th>Nama Obat</th>   
                    <th>Ruangan</th>
                    <th width='150px'>Jumlah Pengeluaran</th>
                    <th width='150px'>Tgl Pengeluaran</th>
                    
                </tr>
            </thead>
            
            <tbody>
<?php
include("../fungsi/koneksi.php");
$no=0;
$query = mysql_query("select * from obat, pengeluaran where obat.id=pengeluaran.id");
while($r = mysql_fetch_array($query)){
 $format1 = date('d F Y', strtotime($r['tgl_pengeluaran']));
 $no++;                   
echo "
<tr>
                    <td><center>$no</center></td> 
                    <td>$r[nama] $r[jenis]</td>
                    <td><center>$r[ruangan]<center></td>
                    <td><center>$r[jumlah] $r[kemasan]<center></td>
                    <td><center>$format1</center></td>
				

					</tr>
					";



}

?>
    
    </tbody>
    </table>
    </div>
	<table>
	<?php 
					error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
					session_start();
					if(isset($_SESSION['user']))
					{
					?>
	<center>
	<a href="cetakdata/pengeluaran_semua.php"><button type="submit" name="simpan" class="btn btn-primary">Cetak Data</button></a>
	<a href="?menu=pertanggalsemua"><button type="submit" name="simpan" class="btn btn-warning">Berdasarkan Tanggal</button></a></center>
	</center>
	<?php
	session_start();
	}
	?>
	</table>
</div>
