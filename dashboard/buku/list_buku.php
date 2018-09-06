<?php include("header.php");?>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
        <table class="table table-bordered table-hover"id='table1'>
            <thead>
                <tr>
					<th>No</th>
					<th>Id Buku</th>
                    <th>Judul</th>
                    <th>Pengarang</th>
                    <th>Penerbit</th>
                    <th>Stok/Jumlah</th>
                    <th>Jenis</th>
                    <th>Hapus</th>
                    <th>Edit</th>
					<th>Detail</th>
					
                </tr>
            </thead>
            
            <tbody>
<?php
include("../fungsi/koneksi.php");
$i=0;
$query = mysql_query("select * from data_buku where jenis='kesehatan'");
while($r = mysql_fetch_array($query)){
$i++;

$query1 = mysql_query("select count(id_pinjaman) from trans_pinjam where id='$r[id]' and status='pinjam'  ");
while($r2 = mysql_fetch_array($query1)){
$stok=$r2['count(id_pinjaman)'];
$stok=$r['jumlah_buku']-$stok;
//$stok=0;
}
echo "
<tr>

                    <td><center>$i</center></td>
                    <td><center>$r[id]</center></td>
					<td><center>$r[judul]</center></td>
                    <td><center>$r[pengarang]</center></td>
                    <td><center>$r[penerbit]</center></td>
					";
					
					echo"
                    <td class='text-center'>$stok/$r[jumlah_buku]</td>
					";
					echo"
                    <td><center>$r[jenis]</center></td>
                    <td> <center><a href='?menu=delete_buku&id=$r[id]'><i class='fa fa-times-circle-o fa-lg'></i></a> </center></td>
                    <td> <center><a href='?menu=edit_buku&id=$r[id]'><i class='fa fa-pencil-square-o fa-lg'></i></a> </center></td>
					<td> <center><a href='?menu=detail_buku&id=$r[id]'><i class='fa fa-file-text fa-lg'></i></a> </center></td>				
                </tr>
    ";


}
?>
    
    </tbody>
    </table>
	<center><a href="cetakdata/cetak_buku_kesehatan.php"><button type="submit" name="simpan" class="btn btn-primary">Cetak Data</button></a></center>
    </div>
</div>