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
											<th width='150px'>Tgl Dikembalikan</th>																																	
                                            <th width='80px'>Status</th>
                                            <th width='150px'>Terlambat</th>
											
                                           
                                        </tr>";
										
									
										
		$query = ("select data_buku.judul,data_anggota.id_anggota,data_anggota.nama, trans_pinjam.tgl_pinjam, trans_pinjam.tgl_kembali, trans_pinjam.tgl_dikembalikan, trans_pinjam.status, trans_pinjam.denda from trans_pinjam,data_buku,data_anggota where data_buku.id=trans_pinjam.id and data_anggota.id_anggota=trans_pinjam.id_anggota");
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
											
			if ($data['status']=="pinjam"){
					
                    
                                        $tgl_dateline=$data['tgl_kembali'];
                                        $tgl_kembali=date('d-m-Y');
                                        $lambat=terlambat($tgl_dateline, $tgl_kembali);
                                        $denda=$lambat*$denda1;
                                        if ($lambat>0) {
                                        $strhtml .= "<td> <font color=''><center>$lambat hari<br>(Rp $denda)</center></font></td>";
                                        }
                                        else {
                                          
										 $strhtml .=" <td><center> $lambat hari</center></td>";
                                        }
										
										}else if($data['status']=="kembali"){
					$lambat2=terlambat($data['tgl_kembali'],$data['tgl_dikembalikan'] );
					
					 $strhtml .="<td> <font color=''><center>$lambat2 hari<br>(Rp $data[denda])</center></center></font></td>";
					 //echo" <td>$lambat2  hari</tr>";
					 
					}
											
			
			
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