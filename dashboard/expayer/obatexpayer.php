<?php

require("../fungsi/config.php");
?>

<h2><b>Obat Yang Sudah Expayer</b></h2>
<br>
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
        <table class="table table-bordered table-hover" id='table1'>
            <thead>
                <tr>
                    <th width= '5px'>No</th>
                    <th>Nama Obat</th>   
                    <th width='150px'>Tanggal Masuk</th>
                    <th width='150px'>Tanggal Expayer</th>
                    <th width='150px'>Kondisi</th>
					
                 
                
                    
                </tr>
            </thead>
            
            <tbody>
<?php
include("../fungsi/koneksi.php");
$no=0;
$query = mysql_query("SELECT * FROM obat where tglexpayer < curdate() group by obat.id");
while($r = mysql_fetch_array($query)){
 $format1 = date('d F Y', strtotime($r['tgl_masuk_terakhir']));
 $format2 = date('d F Y', strtotime($r['tglexpayer']));
 $no++;

$exp = date($r['tglexpayer']); // batas waktu
$hariini=date('d-m-Y');
if (!(strtotime($exp) > strtotime($hariini))) {

$tampil1 = "Sudah Expayer";
} else {
 $tampil2 = "Belum Expayer";
}
echo "
<tr>
                    <td><center>$no</center></td> 
                    <td>$r[nama] $r[jenis]</td>
                    <td><center>$format1</center></td>
                    <td><center>$format2</center></td>
                    <td><center> Sudah Expayar </center></td>
           
                    				

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
	<a href="cetakdata/cetak_expayer.php"><button type="submit" name="simpan" class="btn btn-primary">Cetak Data</button></a>
	</center>
	<?php
	session_start();
	}
	?>
	</table>
</div>
