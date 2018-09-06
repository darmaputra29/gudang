<?php

include("koneksi.php");
require("../../fungsi/config.php");

$strhtml="";
$strhtml .= "<img src='surat.png'>";


$strhtml .="<br>";
$strhtml .="<br>";
$strhtml .="<br>";
$strhtml .= "Berikut ini merupakan data anggota karyawan Perpustakaan Ali Bin Abi Thalib RSIA Aceh : ";
$strhtml .="<br>";
$strhtml .="<br>";
$strhtml .="<br>";

$strhtml .="<table border='1'>
<tr>
											<th><center> No</center> </th>
                                            <th width='250px'>Judul</th>
                                            <th width='120px'>Id Peminjam</th>
  											<th width='200px'>Nama Peminjam</th>
											<th width='100px'>Tgl Pinjam</th>																																	
											<th width='100px'>Tgl Kembali</th>																																	
                                            <th width='100px'>Status</th>
                                            <th width='150px'>Terlambat</th>
											
                                           
                                        </tr>";
										
									
										
		$query = ("select data_buku.judul,data_anggota.id_anggota,data_anggota.nama, trans_pinjam.tgl_pinjam, trans_pinjam.tgl_kembali, trans_pinjam.status from trans_pinjam,data_buku,data_anggota where trans_pinjam.status='pinjam' and data_buku.id=trans_pinjam.id and data_anggota.id_anggota=trans_pinjam.id_anggota and  tgl_pinjam>='".$_GET['tglawal']."' and tgl_pinjam<='".$_GET['tglakhir']."'");
		$no=1;
		$sql = mysql_query($query);
		while($data=mysql_fetch_array($sql)){
		
		$tgl_dateline=$data['tgl_kembali'];
                                        $tgl_kembali=date('d-m-Y');
                                        $lambat=terlambat($tgl_dateline, $tgl_kembali);
                                        $denda=$lambat*$denda1;
                                        if ($lambat>0) {
                                         $tlb="$lambat hari<br>(Rp $denda)</font>";
                                        }
                                        else {
                                         $tlb=$lambat." hari";
                                        }
		
		
			$strhtml.="
			 <tr class='odd gradeX'>
											<td><center>$no</center></td>
			                                <td><center>$data[judul]</center></td>
                                            <td><center>$data[id_anggota]</center></td>
											<td><center>$data[nama]</center></td>
											<td><center>$data[tgl_pinjam]</center></td>
											<td><center>$data[tgl_kembali]</center></td>
											<td><center>$data[status]</center></td>
											<td><center>$tlb</center></td>
			 </tr>";$no++;	
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