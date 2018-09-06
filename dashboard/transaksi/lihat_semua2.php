<?php
include("header2.php");
require("../fungsi/config.php");
?>

<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
        <table class="table table-bordered table-hover" id='table1'>
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
                </tr>
            </thead>
            
            <tbody>
<?php

include("../fungsi/koneksi.php");
$no=0;
$query = mysql_query("select data_buku.judul,data_anggota.id_anggota,data_anggota.nama, trans_pinjam.tgl_pinjam, trans_pinjam.tgl_kembali,trans_pinjam.tgl_dikembalikan, trans_pinjam.status, trans_pinjam.denda from trans_pinjam,data_buku,data_anggota where trans_pinjam.status='kembali' and data_buku.id=trans_pinjam.id and data_anggota.id_anggota=trans_pinjam.id_anggota");
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
                    <td>$r[status]</td>
                    <td>";
					
$tgl2 = $r['tgl_dikembalikan'];  
$tgl1 = $r['tgl_kembali'];  
$pecah1 = explode("-", $tgl1);
$date1 = $pecah1[2];
$month1 = $pecah1[1];
$year1 = $pecah1[0];
$pecah2 = explode("-", $tgl2);
$date2 = $pecah2[2];
$month2 = $pecah2[1];
$year2 =  $pecah2[0];
$jd1 = GregorianToJD($month1, $date1, $year1);
$jd2 = GregorianToJD($month2, $date2, $year2);
$selisih = $jd2 - $jd1;

 

 

                                        
$denda=$selisih*$denda1;
                                        if ($selisih>0) {
                                         echo "<font color='red'>$selisih hari <br> Rp.$r[denda] </font>";
                                        }
                                        else {
                                         echo "0 hari";
                                        }
       echo"             </td>
           </tr>     
    ";


}
?>
   
    </tbody>
    </table>
	 <?php
		$a=mysql_query("SELECT SUM(denda)FROM trans_pinjam WHERE status ='kembali'");
		$r = mysql_fetch_assoc($a);
		
		$denda2=$r['SUM(denda)'];
		//}
		
		
	?>
	<br><br>
	  <div class="form-group pull-right">
            <label class="col-lg-3 control-label">Kas :</label>
            <div class="col-lg-6">
             <input class="form-control" type="text" value="<?php echo "Rp. ".$denda2;?>" readonly>
            </div>
        </div>
		<br><br>
	<table>	
	<center>
	<a href="cetakdata/cetak_data_kembali.php"><button type="submit" name="simpan" class="btn btn-primary">Cetak Data</button></a>
	<a href="?menu=list_transaksi22"><button type="submit" name="simpan" class="btn btn-warning">Berdasarkan Tanggal</button></a></center>
	</center>
	</table>
    </div>
</div>