<?php

include("koneksi.php");
$nama_dokumen='pengeluaran_semua_pertanggal';
require("../../fungsi/config.php");
$tanggal1=$_GET['tglawal'];
$tanggal2=$_GET['tglakhir'];
			  $format3 = date('d F Y', strtotime($tanggal1));
			  $format4 = date('d F Y', strtotime($tanggal2));

$strhtml="";
$strhtml .= "<img src='coprspn.png'>";


$strhtml .="<br>";
$strhtml .="<br>";
$strhtml .="<br>";
$strhtml .= "Berikut ini merupakan data semua pengeluaran obat dari gudang obat RSPN UNSYIAH terhitung tanggal $format3 s.d $format4: ";
$strhtml .="<br>";
$strhtml .="<br>";

$strhtml .="<table border='1'>
<tr>
											<th><center> No</center> </th>
                                            <th width='250px'>Nama Obat</th>
                                          
                                            <th width='150px'>Ruangan</th>
  											<th width='100px'>Jumlah</th>
											<th width='200px'>Tanggal Pengeluaran</th>
											
																				
											
											
                                           
                                        </tr>";
										
									
										
		$query = ("select *from obat, pengeluaran where obat.id = pengeluaran.id and tgl_pengeluaran>='".$_GET['tglawal']."' and tgl_pengeluaran<='".$_GET['tglakhir']."'");
		$no=1;
		$sql = mysql_query($query);
		while($data=mysql_fetch_array($sql)){
		
		
		
		
			$strhtml.="
			 <tr class='odd gradeX'>
											<td><center>$no</center></td>
			                                <td>$data[nama] $data[jenis]</td>
			                               
                                            <td><center>$data[ruangan]</center></td>
											<td><center>$data[jumlah] $data[kemasan]</center></td>
											<td>". date('d F Y', strtotime($data[tgl_pengeluaran]))."</td>	
											
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

				$baris_ttd[tndtngn]<br>
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