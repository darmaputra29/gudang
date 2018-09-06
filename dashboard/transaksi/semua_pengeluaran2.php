
<h2><b>Semua Pengeluaran</b></h2>
<br>
<div class="row">
    
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
 $no++;                   
echo "
<tr>
                    <td><center>$no</center></td> 
                    <td>$r[nama] $r[jenis]</td>
                    <td><center>$r[ruangan]<center></td>
                    <td><center>$r[jumlah] $r[jenis]<center></td>
                    <td><center>$r[tgl_pengeluaran]</center></td>
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
