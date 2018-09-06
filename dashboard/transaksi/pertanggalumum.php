<?php

require("../fungsi/config.php");
?>

<h2> <b>Pengeluaran Pertanggal Untuk Poli Umum</b></h2>

<br>

<div class="row">
    <div class="col-lg-12">
<form class="form-horizontal" method="post">
        <div class="table-responsive">
		<table border='0'>
		<tr>
			<td width='100px'>Tanggal Awal </td>
			
			
				<td width='200px'> 
				<select name="tgl">
				<?php
					for ($i=1; $i<=31; $i++) {
						$tg = ($i<10) ? "0$i" : $i;
						echo "<option value='$tg'>$tg</option>";	
					}
				?>
				</select> - 
				<select name="bln">
				<?php
					for ($i=1; $i<=12; $i++) {
						$bl = ($i<10) ? "0$i" : $i;
						echo "<option value='$bl'>$bl</option>";	
					}
				?>
				</select> - 
				<select name="thn">
				<?php
					for ($i=2018; $i<=2040; $i++) {
						echo "<option value='$i'>$i</option>";	
					}
				?>
				</select>
				</td>
				
				
				<td width='100px'>Tanggal Akhir </td>
			
			
				<td width='200'> 
				<select name="tgl1">
				<?php
					for ($i=1; $i<=31; $i++) {
						$tg = ($i<10) ? "0$i" : $i;
						echo "<option value='$tg'>$tg</option>";	
					}
				?>
				</select> - 
				<select name="bln1">
				<?php
					for ($i=1; $i<=12; $i++) {
						$bl = ($i<10) ? "0$i" : $i;
						echo "<option value='$bl'>$bl</option>";	
					}
				?>
				</select> - 
				<select name="tahun">
				<?php
					for ($a=2018; $a<=2040; $a++) {
						echo "<option value='$a'>$a</option>";	
					}
				?>
				
				</select>
				</td>
				<td width='200px'> <input name='tblcari' type="submit"  width='200px' value="Cari"></td>
			</tr>
			</table>
			</form>
				
				
				
		</tr>
		
		<br>
		<br>
		<br>
		
        <table class="table table-bordered table-hover">
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
if(isset($_POST['tblcari'])){
$tgl     = $_POST['tgl'] ;
$bln     = $_POST['bln'] ;
$thn     = $_POST['thn'] ;
$tgl1 = $_POST['tgl1'] ;
$bln1 = $_POST['bln1'] ;
$thn1 = $_POST['tahun'] ;

$tglawal=$thn.'-'.$bln.'-'.$tgl;
$tglakhir=$thn1.'-'.$bln1.'-'.$tgl1;
//echo "<script>alert('$tglawal');</script>";
//echo "<script>alert('$tglakhir');</script>";
$no=0;
$query = mysql_query("select *from obat, pengeluaran where obat.id = pengeluaran.id and tgl_pengeluaran>='$tglawal' and tgl_pengeluaran<='$tglakhir' and ruangan='Poli Umum'");
while($r = mysql_fetch_array($query)){
 $no++;                   
echo "
<tr>
                   <td>$no</td>
                    <td>$r[nama] $r[jenis]</td>
                    <td>$r[ruangan]</td>
                    <td>$r[jumlah] $r[jenis]</td>
                    <td>$r[tgl_pengeluaran]</td>
					";
			


}
}
if(empty($tglawal))
{
$tglawal="nodata";
$tglakhir="nodata";
}
?>
    
   </tbody>
    </table>
	<center><a target="_blank" class="btn btn-primary" href="cetakdata/data_pengeluaran_umum.php?tglawal=<?php echo $tglawal; ?>&tglakhir=<?php echo $tglakhir; ?>">Cetak Data</a></center>
    </div>
</div>