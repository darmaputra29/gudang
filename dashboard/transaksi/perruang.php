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
                    <th>Ruangan</th>
                    <th width='150px'>Jumlah Pengambilan</th>
                    <th width='150px'>Lihat Detail</th>
                </tr>
            </thead>
            
            <tbody>
<?php
include("../fungsi/koneksi.php");
$no=0;
$query = mysql_query("select count(id) as jumlah, ruangan, id from pengeluaran group by ruangan");
while($r = mysql_fetch_array($query)){
 $no++;                   
echo "
<tr>
                    <td><center>$no</center></td> 
                    <td><center>$r[ruangan]<center></td>
                    <td><center>$r[jumlah]<center></td>
					";
					echo"
                    <td> <center><a href='?menu=semua_pengeluaran&ruangan=$r[ruangan]'><i class='fa fa-times-circle-o fa-lg'></i></a> </center></td>
              
					</tr>
					";



}
?>
    
    </tbody>
    </table>
    </div>
	<table>
	<center>
	<a href="cetakdata/pengeluaran_semua.php"><button type="submit" name="simpan" class="btn btn-primary">Cetak Data</button></a>
	<a href="?menu=pertanggalsemua"><button type="submit" name="simpan" class="btn btn-warning">Berdasarkan Tanggal</button></a></center>
	</center>
	</table>
</div>
