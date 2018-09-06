<?php ?>
<?php
//include '../../proses/databases.php';
include ("koneksi.php");
$ruang = $_GET['ruang'];

for($i=1; $i<=$ruang ; $i++){
							echo'
									
										<td ><select style="width:200px;" data-placeholder="Obat"  data-rel="chosen" required name="obat'.$i.'">
                            <option value=""></option>
							';
									
						   
									$tampil = "select * from obat";
									$sql = mysql_query($tampil);
									while($data = mysql_fetch_array($sql))
									 {
									
											
											
											
											 $tampil2 = "select count(kode_buku) from transaksi WHERE kode_buku=$data[kode_buku] and status='2'";
											$sql2 = mysqli_query($con,$tampil2);
											while($data2 = mysqli_fetch_array($sql2))
											 {
												 $pinjam=$data2['count(kode_buku)'];
												 $sisa=$data['stok']-$pinjam;
											 }
									 
									 if($sisa>0){
									 echo "
									 <option value=".$data[kode_buku].">$data[kode_buku] / $data[judul]</option>
									 
									";
									 }
									 }
							
                           
                            
                        echo '</select></td><br><br>';

}

?>