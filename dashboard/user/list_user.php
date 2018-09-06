<?php include("header.php");?>

<div class="row">
    <div class="col-lg-7">
        <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th width='200px'>Username</th>
                    <th width='300px'>Password</th>
                    <!--<th>level</th>
                    <th>Hapus </th>-->
                    <th width=''>Edit </th>
                </tr>
            </thead>
            
            <tbody class="text-center">
<?php
include("../fungsi/koneksi.php");
$query = mysql_query("select * from admin");
while($r = mysql_fetch_array($query)){
echo "
<tr>
                    <td>$r[username]</td>
                    <td>$r[password]</td>
                    <!--<td>$r[hak_akses]</td>
                    <td> <a href='?menu=delete_anggota&id=$r[id]'><i class='fa fa-times-circle-o fa-lg'></i></a> </td>-->
                    <td> <a href='?menu=edit_user&id=$r[id]'><i class='fa fa-pencil-square-o fa-lg'></i></a> </td>
                </tr>
    ";


}
?>
    
    </tbody>
    </table>
    </div>
</div>