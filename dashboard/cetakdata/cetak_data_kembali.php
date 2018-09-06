<?php
require("../../fungsi/config.php");
include("koneksi.php");
 
                                       
                                       
                   


$strhtml .= "<img src='surat.png'>";


$strhtml .="<br>";
$strhtml .="<br>";
$strhtml .="<br>";
$strhtml .= "Berikut ini merupakan data buku yang sudah di kembalikan di Perpustakaan Ali Bin Abi Thalib RSIA Aceh : ";
$strhtml .="<br>";
$strhtml .="<br>";
$strhtml .="<br>";

$strhtml .="<table border='1'>
<tr>
											<th><center> No</center> </th>
                                            <th width='200px'>Judul</th>
                                            <th width='120px'>Id Peminjam</th>
  											<th width='150px'>Nama Peminjam</th>
											<th width='100px'>Tgl Pinjam</th>																																	
											<th width='100px'>Tgl Kembali</th>											
											<th width='150px'>Tgl dikembalikan</th>											
                                            <th width='80px'>Status</th>
                                            <th width='150px'>Telambat</th>
											
                                           
                                        </tr>";
										
									
										
		$query = ("select data_buku.judul,data_anggota.id_anggota,data_anggota.nama, trans_pinjam.tgl_pinjam, trans_pinjam.tgl_kembali, trans_pinjam.tgl_dikembalikan, trans_pinjam.status, trans_pinjam.denda from trans_pinjam,data_buku,data_anggota where trans_pinjam.status='kembali' and data_buku.id=trans_pinjam.id and data_anggota.id_anggota=trans_pinjam.id_anggota");
		$no=1;
		$sql = mysql_query($query);
		while($data=mysql_fetch_array($sql)){
			$strhtml.="
			 <tr class='odd gradeX'>
											<td><center>$no</center></td>
			                                <td>$data[judul]</td>
                                            <td><center>$data[id_anggota]</center></td>
											<td><center>$data[nama]</center></td>
											<td><center>$data[tgl_pinjam]</center></td>
											<td><center>$data[tgl_kembali]</center></td>
											<td><center>$data[tgl_dikembalikan]</center></td>
											<td><center>$data[status]</center></td>
											";
											
									
$tgl2 = $data['tgl_dikembalikan'];  
$tgl1 = $data['tgl_kembali'];  
$pecah1 = explode("-", $tgl1);
$date1 = $pecah1[2];
$month1 = $pecah1[1];
$year1 = $pecah1[0];
$pecah2 = explode("-", $tgl2);
$date2 = $pecah2[2];
$month2 = $pecah2[1];
$year2 =  $pecah2[0];
$jd1 = GregorianToJD($month1, $date1, $year1);
$jd2 = GregorianToJD($month2, $date2, $year2);
$selisih = $jd2 - $jd1;
	if ($selisih<0){
$selisih=0;}		
											
			$strhtml.="
					<td><center>$selisih hari<br>(Rp $data[denda])</center></td>	
					
											
											
											
			 
			 
			 </tr>";
								$no++;	
		}
		
		
		$a=mysql_query("SELECT SUM(denda)FROM trans_pinjam WHERE status ='kembali'");
		$r = mysql_fetch_assoc($a);
		
		$denda2=$r['SUM(denda)'];
	
		
	
		
		
		$strhtml .="<tr><td colspan='8px'><center>Total Kas Perpustakaan Ali Bin Abi thalib RSIA Aceh</center></td><td><center><h4>Rp.$denda2<h4></centar></td></tr>";
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