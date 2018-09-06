<?php
include("header5.php");
require("../fungsi/config.php");
include("../fungsi/koneksi.php");

if(isset($_POST['peminjam'])){
    $hasil= explode("-", $_POST['peminjam']);
    $id=$hasil[0];
    
    $query = mysql_query("select trans_pinjam.id_pinjaman, data_buku.judul,data_anggota.id_anggota,data_anggota.nama, trans_pinjam.tgl_pinjam, trans_pinjam.tgl_kembali, trans_pinjam.status from trans_pinjam,data_buku,data_anggota where trans_pinjam.status='pinjam' and data_buku.id=trans_pinjam.id and data_anggota.id_anggota=trans_pinjam.id_anggota");

}
else{
    $query = mysql_query("select trans_pinjam.id_pinjaman, data_buku.judul,data_anggota.id_anggota,data_anggota.nama, trans_pinjam.tgl_pinjam, trans_pinjam.tgl_kembali, trans_pinjam.status from trans_pinjam,data_buku,data_anggota where trans_pinjam.status='pinjam' and data_buku.id=trans_pinjam.id and data_anggota.id_anggota=trans_pinjam.id_anggota");

}
?>
<form class="form-horizontal" id="form" method="post">
<div class="form-group">
            <div class="col-lg-5">
             <select name="peminjam" class="form-control" onchange="form.submit();">
                <option> Pilih Nama Peminjam</option>
                <?php getDataNama();?>
             </select>
            </div>
        </div>
</form>

<div class="row">
    <div class="col-lg-12">
        <form method="post">
        <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul Buku</th>
                    <th>ID_pinjam</th>
                    <th>Nama Peminjam</th>
                    <th>Tgl.Pinjam</th>
                    <th>Tgl.Kembali</th>
                    <th>Status</th>
                    <th>Terlambat</th>
                    <th> </th>
                </tr>
            </thead>
            
            <tbody>
            <?php    
                $no=0;
while($r = mysql_fetch_array($query)){
 $no++;                   
echo "
<tr>
                    <td>$no</td>
                    <td>$r[judul]</td>
                    <td>$r[id_anggota]</td>
                    <td>$r[nama]</td>
                    <td>$r[tgl_pinjam]</td>
                    <td>$r[tgl_kembali]</td>
                    <td>$r[status]</td>
                    <td>";
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
                    <td> <input type='checkbox' name='item[]' value='$r[id_pinjaman]&$r[judul]&$denda&$r[tgl_kembali]&$lambat' class='form-conrol'> </td>
                </tr>
    ";


}
?>
</tbody>
    </table>
    </div>
       <button class="btn btn-default" type="submit" formaction="?menu=proses_kembali">Kembalikan Buku</button>
        <!--<button class="btn btn-default" type="submit" formaction="?menu=proses_panjang">Perpanjang Buku</button>-->	
    </form>    
</div>