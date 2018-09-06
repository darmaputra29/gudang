<?php

include("koneksi.php");
$nama_dokumen='obat_expayer';
require("../../fungsi/config.php");

$strhtml="";
$strhtml .= "<img src='coprspn.png'>";


$strhtml .="<br>";
$strhtml .="<br>";
$strhtml .="<br>";
$strhtml .= "Berikut ini merupakan data obat yang sudah expayer pada gudang obat RSPN UNSYIAH : ";
$strhtml .="<br>";
$strhtml .="<br>";

$strhtml .="<table border='1'>
<tr>
											<th><center> No</center> </th>
                                            <th width='300px'>Nama Obat</th>
                                          
                                            <th width='150px'>Tanggal Masuk</th>
  											<th width='150px'>Tanggal Expayer</th>
											<th width='150px'>Kondisi</th>																																	
											
											
                                           
                                        </tr>";
										
									
										
		$query = ("SELECT * FROM obat where tglexpayer < curdate() group by obat.id");
		$no=1;
		$sql = mysql_query($query);
		while($data=mysql_fetch_array($sql)){
		 $format1 = date('d F Y', strtotime($r['tgl_masuk_terakhir']));
		$format2 = date('d F Y', strtotime($r['tglexpayer']));
		
		
		
		
			$strhtml.="
			 <tr class='odd gradeX'>
											<td><center>$no</center></td>
			                                <td>$data[nama] $data[jenis]</td>
											<td><center>$format1</center></td>
											<td><center>$format2</center></td>
                                            <td><center>Sudah Expayer</center></td>
											
											
											";
											
			
											
			
			
			$strhtml.=" </tr>";$no++;	
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
				
				Mengetahui,
				<br><br><br><br>

				$baris_ttd[tndtngn]
				<br>
			NIK. $baris_ttd[nip]
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
			$mpdf->Output($nama_dokumen.".pdf" ,'I');


?>