<?php

include("koneksi.php");


$strhtml .= "<img src='img/kop.png'>";


$strhtml .="<br>";
$strhtml .="<br>";
$strhtml .="<br>";
$strhtml .= "RSUD Meuraxa Banda Aceh Dengan ini Menerangkan Bahwa : ";
$strhtml .="<br>";
$strhtml .="<br>";
$strhtml .="<br>";

$strhtml .="<table>
										<tr>
											<center>
											<th><center>No</center></th>
											<th><center>ID</center></th>
											<th><center>Nama Ruang</center></th>
											<th><center>merek</center></th>
											<th><center>Serial</center></th>
											</center>
										
                                        </tr>";

		$ada=mysqli_query($conect_db,"select barang.id,barang.serial,barang.merek,ruang.nama_ruang from barang,ruang where barang.id_ruang=ruang.id_ruang and barang.type='printer'") or die(mysql_error()); 
		$no=1;
		while($row=mysqli_fetch_array($ada)){
			$strhtml.="
			 <tr class='odd gradeX'>
			 <td><center>$no</center></td>
			 <td>$row[id]</td>
			 <td>$row[nama_ruang]</td>
			 <td>$row[merek]</td>
			 <td>$row[serial]</td>
			 <center>
			 
			 </tr>";
		$no++;	
		}
		$strhtml.="</table>";
		
		$array_bulan = array(1=>'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','Novemer','Desember');
$bulan = $array_bulan[date('n')];
$tgl = date('j');
$thn = date('Y');

$strhtml.="
		<div class='kanan'>
		<tr>
			<td>Banda Aceh, $tgl $bulan $thn </td>
		</tr>
		</div>
";
	


			include("mpdf60/mpdf.php");

			$mpdf= new mPDF('utf-8','A4', 0,'',10 ,10 , 5, 1, 1, 1, '');
			$stylesheet = file_get_contents('css/style.css');
			$mpdf->WriteHTML($stylesheet,1);
			$mpdf->WriteHTML($strhtml);
			$mpdf->Output();


?>