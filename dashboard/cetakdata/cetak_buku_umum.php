<?php

include("koneksi.php");


$strhtml .= "<img src='surat.png'>";


$strhtml .="<br>";
$strhtml .="<br>";
$strhtml .="<br>";
$strhtml .= "Berikut ini merupakan Data Buku Umum Perpustakaan Ali Bin Abi Thalib RSIA Aceh : ";
$strhtml .="<br>";
$strhtml .="<br>";
$strhtml .="<br>";

$strhtml .="<table border='1'>
<tr>
											<th><center> No</center> </th>
                                            <th><center>Id buku</center></th>
                                            <th width='250px'>Judul</th>
  											<th width ='250'>Pengarang</th>
											<th>Penerbit</th>																																	
                                            <th width ='60'>Jenis</th>
											<th><center>Jumlah</center></th>	
											
                                           
                                        </tr>";
										
									
										
		$query = ("SELECT *from data_buku where jenis='umum'");
		$no=1;
		$sql = mysql_query($query);
		while($data=mysql_fetch_array($sql)){
			$strhtml.="
			 <tr class='odd gradeX'>
											<td><center>$no</center></td>
			                                <td>$data[id]</td>
                                            <td>$data[judul]</td>
											<td>$data[pengarang]</td>
											<td>$data[penerbit]</td>
											<td>$data[jenis]</td>
											<td><center>$data[jumlah_buku]</center></td>
											
			 
			 
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
				<br><br><br><br>

				$baris_ttd[tndtngn]<br>
			NIP $baris_ttd[nip]
				</td>
		</tr>
		</table>
		</div>
";



			include("mpdf60/mpdf.php");

			$mpdf=new mPDF('utf-8', 'A4-L');
			$stylesheet = file_get_contents('css/styles.css');
			$mpdf ->SetMargins (25.4,25.4,0,25.4);
			$mpdf->WriteHTML($stylesheet,1);
			$mpdf->WriteHTML($strhtml);
			$mpdf->Output();


?>