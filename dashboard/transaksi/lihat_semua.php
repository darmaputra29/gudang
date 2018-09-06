<?php
include("header.php");
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
                    <!--<th>ID_pinjam</th>-->
                    <th>Nama Peminjam</th>
                    <th>Tgl.Pinjam</th>
                    <th>Tgl.Kembali</th>
                    <th>Status</th>
                    <th>Terlambat</th>
                </tr>
            </thead>
            
            <tbody>
<?php
include("../fungsi/koneksi.php");
$no=0;
$query = mysql_query("select data_buku.judul,data_anggota.id_anggota,data_anggota.nama, trans_pinjam.tgl_pinjam, trans_pinjam.tgl_kembali, trans_pinjam.status from trans_pinjam,data_buku,data_anggota where trans_pinjam.status='pinjam' and data_buku.id=trans_pinjam.id and data_anggota.id_anggota=trans_pinjam.id_anggota");
while($r = mysql_fetch_array($query)){
 $no++;                   
echo "
<tr>
                    <td>$no</td>
                    <td>$r[judul]</td>
                    
                    <td>$r[nama]</td>
                    <td>$r[tgl_pinjam]</td>
                    <td>$r[tgl_kembali]</td>
                    <td>$r[status]</td>
                    <td>";
										
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
       echo"             </td>
                </tr>
    ";


}
?>
    
    </tbody>
    </table>
    </div>
	<table>
	<center>
	<a href="cetakdata/cetak_data_pinjam.php"><button type="submit" name="simpan" class="btn btn-primary">Cetak Data</button></a>
	<a href="?menu=list_transaksi"><button type="submit" name="simpan" class="btn btn-warning">Berdasarkan Tanggal</button></a></center>
	</center>
	</table>
</div>
