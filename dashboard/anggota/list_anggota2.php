<?php include("header2.php");?>

<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
        <table class="table table-bordered table-hover"id='table2'>
            <thead>
                <tr>
					<th>No</th>
					<th>Id karyawan</th>
                    <th>Nama</th>
                    <th>JK</th>
                    <th>No.Telepon</th>
                    <th>Status</th>
                    <th>Hapus </th>
                    <th>Edit </th>
                    <th>Detail </th>
                </tr>
            </thead>
            
            <tbody>
<?php
include("../fungsi/koneksi.php");
$i=0;
$query = mysql_query("select * from data_anggota where status='umum'");
while($r = mysql_fetch_array($query)){
$i++;
echo "
<tr>
					<td><center>$i</center></td>
					<td><center>$r[id_anggota]</center></td>
                    <td><center>$r[nama]</center></td>
                    <td class='text-center'>$r[jk]</td>
                    <td class='text-center'>$r[no_telepon]</td>
                    <td>$r[status]</td>
                    <td><center> <a href='?menu=delete_anggota2&id=$r[id_anggota]'><i class='fa fa-times-circle-o fa-lg'></i></a></center> </td>
                    <td><center> <a href='?menu=edit_anggota2&id=$r[id_anggota]'><i class='fa fa-pencil-square-o fa-lg'></i></a></center> </td>
					<td><center> <a href='?menu=detail_anggota2&id=$r[id_anggota]'><i class='fa fa-file-text fa-lg'></i></a></center> </td>	
                </tr>
    ";


}
?>
    
    </tbody>
    </table>
	<center><a href="cetakdata/cetak_anggota_umum.php"><button type="submit" name="simpan" class="btn btn-primary">Cetak Data</button></a></center>
    </div>
</div>