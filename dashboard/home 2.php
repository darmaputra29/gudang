<h2><b>Data Semua Obat<b><h2>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
        <table class="table table-bordered table-hover"id='table1'>
            <thead>
                <tr>
					<th>No</th>
                    <th>Nama Obat</th>
                    <th>Tanggal Masuk</th>
                    <th>Stok Tersedia</th>
                    <th>Tgl Expayer</th>
                   
				
					
                </tr>
            </thead>
            
            <tbody>
<?php
include("../fungsi/koneksi.php");
$i=0;
$query = mysql_query("select *from obat");
while($r = mysql_fetch_array($query)){
 $format1 = date('d F Y', strtotime($r['tgl_masuk_terakhir']));
 $format2 = date('d F Y', strtotime($r['tglexpayer']));
$i++;

$id = isset($_POST['id']); 
$query1 = mysql_query(" SELECT SUM(jumlah) AS stok_obat, id FROM pengeluaran where id='$r[id]'");
while($r2 = mysql_fetch_array($query1)){
$stok=$r2['stok_obat'];
$stok2=$r['stok']-$stok;
//$stok=0;
}
echo "
<tr>

                    <td><center>$i</center></td>
                    <td><center>$r[nama] $r[jenis]</center></td>
                    <td><center>$format1</center></td>
					
					";
					echo"
					
					<td class='text-center'>$stok2 $r[kemasan]</td>
					<td><center>$format2</center></td>
				
					";
					
				
					
					
					echo"
					
                    
                </tr>
    ";


					
				
}
?>
    
    </tbody>
    </table>
	
	</div>
	
</div>


<p align="center">--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
<br>
<h2><b>&nbsp &nbsp Data Obat Hampir Habis<b><h2>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
        <table class="table table-bordered table-hover"id='table2'>
            <thead>
                <tr>
					<th>No</th>
                    <th>Nama Obat</th>
                    <th>Tanggal Masuk</th>    
                    <th>Sisa</th>
                    <th>Tgl Expayer</th>
                   
				
					
                </tr>
            </thead>
            
            <tbody>
<?php
include("../fungsi/koneksi.php");
$i=0;


$id = isset($_POST['id']); 
$query1 = mysql_query("SELECT SUM(pengeluaran.jumlah) AS stok_obat, pengeluaran.id, obat.nama, obat.jenis FROM obat, pengeluaran");
while($r2 = mysql_fetch_array($query1)){
$stok=$r2['stok_obat'];
$stok2=$r['stok']-$stok;
$stok3=$stok2;
$i++;
//$stok=0;

$query3 = mysql_query("select *from obat where stok= $stok3 < '200'");
while($r3 = mysql_fetch_array($query3)){



 
 
}
echo "
<tr>

                    <td><center>$i</center></td>
                    <td><center>$r2[nama] $r2[jenis]</center></td>
                    <td><center>$format1</center></td>
					
					";
					echo"
					
					
					<td class='text-center'>$r3[stok]</td>
					<td><center>$format2</center></td>
				
					";
					
				
					
					
					echo"
					
                    
                </tr>
    ";


					
	}

?>
    
    </tbody>
    </table>
	
	</div>
	
</div>


<p align="center">--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
<br>
<h2><b> &nbsp &nbsp Data Obat Kadaluarsa<b><h2>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
        <table class="table table-bordered table-hover"id='table2'>
            <thead>
                <tr>
					<th width= '5px'>No</th>
                    <th>Nama Obat</th>   
                    <th width='150px'>Tanggal Masuk</th>
                    <th width='150px'>Tanggal Kadaluarsa</th>
					       
                    
                </tr>
            </thead>
            
            <tbody>
<?php
include("../fungsi/koneksi.php");
$no=0;
$hariini=date('d-m-Y');
$query = mysql_query("SELECT * FROM obat where tglexpayer < curdate() group by obat.id ");
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
 
           
                    				

					</tr>
					";



}
?>
    
    </tbody>
    </table>
	
	</div>
	
</div>


