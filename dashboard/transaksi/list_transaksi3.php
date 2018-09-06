<?php
include("header3.php");
require("../fungsi/config.php");
?>

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
					for ($i=2015; $i<=2040; $i++) {
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
					for ($a=2015; $a<=2040; $a++) {
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
                    <th>Judul Buku</th>
                    
                    <th>Nama Peminjam</th>
                    <th>Tgl.Pinjam</th>
                    <th>Tgl.Kembali</th>
                    <th>Tgl.Dikembalikan</th>
                    <th>Status</th>
                    <th>Terlambat</th>
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
$query = mysql_query("select data_buku.judul,data_anggota.id_anggota,data_anggota.nama, trans_pinjam.tgl_pinjam, trans_pinjam.tgl_kembali,trans_pinjam.tgl_dikembalikan,trans_pinjam.status, trans_pinjam.denda from trans_pinjam,data_buku,data_anggota where data_buku.id=trans_pinjam.id and data_anggota.id_anggota=trans_pinjam.id_anggota and tgl_pinjam>='$tglawal' and tgl_pinjam<='$tglakhir'");
while($r = mysql_fetch_array($query)){
 $no++;                   
echo "
<tr>
                   <td>$no</td>
                    <td>$r[judul]</td>
                   
                    <td>$r[nama]</td>
                    <td>$r[tgl_pinjam]</td>
                    <td>$r[tgl_kembali]</td>
                    <td>$r[tgl_dikembalikan]</td>
					";
					echo"
                    <td>$r[status]</td>             
                    <td>";
						if ($r['status']=="pinjam"){
					
                                        date_default_timezone_set("Asia/Jakarta");
										$tgl_dateline=$r['tgl_kembali'];
                                        $tgl_kembali=date('d-m-Y');										
                                        $lambat=terlambat($tgl_dateline, $tgl_kembali);
                                        $denda=$lambat*$denda1;
                                        if ($lambat>0) {
                                         echo "<font color='red'>$lambat hari<br>(Rp $denda)</font>";
                                        }
                                        else {
                                         echo $lambat." hari";
                                        }
										}
										else if($r['status']=="kembali"){
										$tgl_dateline=$r['tgl_kembali'];
                                        $tgl_kembali=$r['tgl_dikembalikan'];										
                                        $lambat=terlambat($tgl_dateline, $tgl_kembali);
										echo "<font color='red'>$lambat hari <br>(Rp.$r[denda])</font>";
										
										}
       echo"             </td>
                </tr>
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
	<center><a target="_blank" class="btn btn-primary" href="cetakdata/data_semua.php?tglawal=<?php echo $tglawal; ?>&tglakhir=<?php echo $tglakhir; ?>">Cetak Data</a></center>
    </div>
</div>