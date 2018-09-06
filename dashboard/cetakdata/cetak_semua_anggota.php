<?php

include("koneksi.php");


$strhtml .= "<img src='surat.png'>";


$strhtml .="<br>";
$strhtml .="<br>";
$strhtml .="<br>";
$strhtml .= "Berikut ini merupakan data seluruh anggota Perpustakaan Ali Bin Abi Thalib RSIA Aceh : ";
$strhtml .="<br>";
$strhtml .="<br>";
$strhtml .="<br>";

$strhtml .="<table border='1'>
<tr>
											<th><center> No</center> </th>
                                            <th width='100px'>Id anggota</th>
                                            <th width='200px'>Nama</th>
  											<th width='70px'>Jk</th>
											<th width='150px'>No.Telepon</th>											
                                            <th width='150px'>Status</th>
											
											
                                           
                                        </tr>";
										
									
										
		$query = ("SELECT *from data_anggota");
		$no=1;
		$sql = mysql_query($query);
		while($data=mysql_fetch_array($sql)){
			$strhtml.="
			 <tr class='odd gradeX'>
											<td><center>$no</center></td>
			                                <td>$data[id_anggota]</td>
                                            <td><center>$data[nama]</center></td>
											<td><center>$data[jk]</center></td>
											<td><center>$data[no_telepon]</center></td>
											<td><center>$data[status]</center></td>
											
											
			 
			 
			 </tr>";
		$no++;	
		}
		$strhtml.="</table>";
		
	
	
		
		$array_bulan = array(1=>'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','Novemer','Desember');
$bulan = $array_bulan[date('n')];
$tgl = date('j');
$thn = date('Y');

$strhtml .="<br><br>";

$ttd=mysql_query("SELECT * FROM bantuan");
	while($baris_ttd=mysql_fetch_array($ttd))
$strhtml .="
		<table  align='right'>
		
		<div class='kanan'>
		<tr>
			<td>Banda Aceh, $tgl $bulan $thn  <br>
				
				Mengetahui 
				<br><br><br><br><br>

				$baris_ttd[tndtngn]<br>
			NIP $baris_ttd[nip]
				</td>
		</tr>
		</table>
		</div>
";



			include("mpdf60/mpdf.php");

			$mpdf= new mPDF('utf-8','A4', 0,'',10 ,10 , 5, 1, 1, 1, '');
			$stylesheet = file_get_contents('css/styles.css');
			$mpdf ->SetMargins (25.4,25.4,0,25.4);
			$mpdf->WriteHTML($stylesheet,1);
			$mpdf->WriteHTML($strhtml);
			$mpdf->Output();


?>