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
                    <th>Jenis Obat</th>
                    <th>Kemasan</th>
                    <th>Tanggal Masuk Terakhir</th>
					<th>Jumlah Masuk Terakhir</th>
                    <th>Stok Tersedia</th>
                    <th>Jumlah Stok</th>
                    <th>Tgl Expayer</th>
                    <th>Harga/Kemasan</th>
					<?php 
					error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
					session_start();
					if(isset($_SESSION['user']))
					{
					?>
                    <th>Tambah Stok</th>
                    <th>Edit</th>
					<?php
					session_start();
					}
					?>
					
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
                    <td><center>$r[nama]</center></td>
					<td><center>$r[jenis]</center></td>
					<td><center>$r[kemasan]</center></td>
                    <td><center>$format1</center></td>
					 <td><center>$r[jumlah_masuk_terakhir]</center></td>
					";
					echo"
					<td class='text-center'>$stok2</td>
					<td class='text-center'>$r[stok]</td>
					<td><center>$format2</center></td>
					<td><center>$r[harga]</center></td>
					";
					
				
					error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
					session_start();
					if(isset($_SESSION['user']))
					{
					
					
					echo"
					
                    <td> <center><a href='?menu=tambah_stokobat&id=$r[id]'><i class='fa fa-plus-square-o fa-lg'></i></a> </center></td>	
					<td> <center><a href='?menu=edit_obat&id=$r[id]'><i class='fa fa-pencil-square-o fa-lg'></i></a> </center></td>	
                </tr>
    ";


					session_start();
					}
				
}
?>
    
    </tbody>
    </table>
	<?php 
					error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
					session_start();
					if(isset($_SESSION['user']))
					{
					?>
	<center><a href="cetakdata/cetak_obat_semua.php"><button type="submit" name="simpan" class="btn btn-primary">Cetak Data</button></a></center>
    <?php
	session_start();
	}
	?>
	</div>
	
</div>