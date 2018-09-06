<?php

include("koneksi.php");
$nama_dokumen='data_obat_tablet';

$strhtml .= "<img src='coprspn.png'>";


$strhtml .="<br>";
$strhtml .="<br>";
$strhtml .="<br>";
$strhtml .= "Berikut ini merupakan Data Obat Tablet pada apotik RSPN UNSYIAH : ";
$strhtml .="<br>";
$strhtml .="<br>";
$strhtml .="<br>";

$strhtml .="<table border='1'>
<tr>
											<th><center> No</center> </th>
                                            <th width='300px'><center>Nama Obat</center></th>
                                            <th width='150px'><center>Jenis obat/Satuan</center></th>
  											<th width ='150px'>Tanggal Masuk Terakhir</th>
											<th width ='150px'>Jumlah Masuk Terakhir</th>																																	
                                            <th width ='130'>Stok</th>
										
											
                                           
                                        </tr>";
										
									
										
$i=0;
$query = mysql_query("select *from obat where jenis='Tablet'");
while($r = mysql_fetch_array($query)){
$i++;

$id = isset($_POST['id']); 
$query1 = mysql_query(" SELECT SUM(jumlah) AS stok_obat, id FROM pengeluaran where id='$r[id]'");
while($r2 = mysql_fetch_array($query1)){
$stok=$r2['stok_obat'];
$stok2=$r['stok']-$stok;
//$stok=0;
}

			$strhtml.="
			 <tr class='odd gradeX'>
											<td><center>$i</center></td>
			                                <td>$r[nama]</td>
                                            <td><center>$r[jenis]</center></td>
											<td><center>$r[tgl_masuk_terakhir]</center></td>
											<td><center>$r[jumlah_masuk]</center></td>
											<td class='text-center'><center>$stok2/$r[stok]</center></td>
										
											
			 
			 
			 </tr>";
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

			$mpdf= new mPDF('utf-8','A4', 0,'',10 ,10 , 5, 1, 1, 1, '');
			$stylesheet = file_get_contents('css/styles.css');
			$mpdf ->SetMargins (25.4,25.4,0,25.4);
			$mpdf->WriteHTML($stylesheet,1);
			$mpdf->WriteHTML($strhtml);
			$mpdf->Output($nama_dokumen.".pdf" ,'I');


?>