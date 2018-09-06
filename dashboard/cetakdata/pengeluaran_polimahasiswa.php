<?php

include("koneksi.php");
$nama_dokumen='pengeluaran_polimahasiswa';
require("../../fungsi/config.php");

$strhtml="";
$strhtml .= "<img src='coprspn.png'>";


$strhtml .="<br>";
$strhtml .="<br>";
$strhtml .="<br>";
$strhtml .= "Berikut ini merupakan data pengeluaran obat untuk Poli Mahasiswa dari Apotik RSPN UNSYIAH : ";
$strhtml .="<br>";
$strhtml .="<br>";

$strhtml .="<table border='1'>
<tr>
											<th><center> No</center> </th>
                                            <th width='350px'>Nama Obat</th>
                                            <th width='100px'>Satuan</th>
                                            <th width='150px'>Ruangan</th>
  											<th width='100px'>Jumlah</th>
											<th width='120px'>Tanggal Pengeluaran</th>																																	
											
											
                                           
                                        </tr>";
										
									
										
		$query = ("select *from obat, pengeluaran where obat.id = pengeluaran.id and ruangan='Poli Mahasiswa'");
		$no=1;
		$sql = mysql_query($query);
		while($data=mysql_fetch_array($sql)){
		
		
		
		
			$strhtml.="
			 <tr class='odd gradeX'>
											<td><center>$no</center></td>
			                                <td>$data[nama]</td>
											<td><center>$data[jenis]</center></td>
                                            <td><center>$data[ruangan]</center></td>
											<td><center>$data[jumlah]</center></td>
											<td><center>$data[tgl_pengeluaran]</center></td>
											
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
				
				Kaunit Apotik
				<br><br><br><br>

				<u>$baris_ttd[tndtngn]</u><br>
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
			$mpdf->Output($nama_dokumen.".pdf" ,'I');


?>