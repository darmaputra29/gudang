<h2><b>Data Obat Tablet<b><h2>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
        <table class="table table-bordered table-hover"id='table1'>
            <thead>
                <tr>
					<th>No</th>
                    <th>Nama Obat</th>
                    <th>Jenis Obat</th>
                    <th>Kemasan</th>
                    <th>Tanggal Masuk Terakhir</th>
					<th>Jumlah Masuk Terakhir</th>
                    <th>Stok Tersedia</th>
                    <th>Jumlah Stok</th>
                    
					
                </tr>
            </thead>
            
            <tbody>
<?php
include("../fungsi/koneksi.php");
$i=0;
$query = mysql_query("select *from obat where Jenis='Tablet'");
while($r = mysql_fetch_array($query)){
$format1 = date('d F Y', strtotime($r['tgl_masuk_terakhir']));
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
                    <td><center>$r[nama]</center></td>
					<td><center>$r[jenis]</center></td>
					<td><center>$r[kemasan]</center></td>
                    <td><center>$format1</center></td>
					 <td><center>$r[jumlah_masuk_terakhir]</center></td>
					";
					echo"
					<td class='text-center'>$stok2</td>
					<td class='text-center'>$r[stok]</td>
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