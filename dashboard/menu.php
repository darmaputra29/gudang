<?php
                if(isset($_GET['menu'])){
                    switch($menu=$_GET['menu']){
                        case "home":include("$menu.php"); break;
                        case "list_transaksi":include("transaksi/$menu.php"); break;
                        case "list_transaksi22":include("transaksi/$menu.php"); break;
                        case "list_transaksi3":include("transaksi/$menu.php"); break;
                        case "pertanggalsemua":include("transaksi/$menu.php"); break;
                        case "pertanggalranap":include("transaksi/$menu.php"); break;
                        case "pertanggalugd":include("transaksi/$menu.php"); break;
                        case "pertanggalmahasiswa":include("transaksi/$menu.php"); break;
                        case "pertanggalumum":include("transaksi/$menu.php"); break;
                        case "pertanggalpenyakitdalam":include("transaksi/$menu.php"); break;
                        case "pertanggalobgyn":include("transaksi/$menu.php"); break;
                        case "pertanggalbedah":include("transaksi/$menu.php"); break;
                        case "pertanggalanak":include("transaksi/$menu.php"); break;
                        case "pertanggaljantung":include("transaksi/$menu.php"); break;
                        case "pertanggalsaraf":include("transaksi/$menu.php"); break;
                        case "lihat_semua":include("transaksi/$menu.php"); break;
                        case "lihat_semua2":include("transaksi/$menu.php"); break;
                        case "semua_pengeluaran":include("transaksi/$menu.php"); break;
                        case "semua_pengeluaran2":include("transaksi/$menu.php"); break;
                        case "input_pengeluaran":include("transaksi/$menu.php"); break;     
                        case "pengeluaran_obat":include("transaksi/$menu.php"); break;
                        case "kembali_buku":include("transaksi/$menu.php"); break;
                        case "proses_kembali":include("transaksi/$menu.php"); break;
                        case "proses_panjang":include("transaksi/$menu.php"); break;        
                        case "cari_data":include("transaksi/$menu.php"); break;
						case "UGD":include("transaksi/$menu.php"); break;  						
						
                        //------------------------------------------------------------------
                        case "obat_tablet":include("buku/$menu.php"); break;
						case "obat_injeksi":include("buku/$menu.php"); break;
						case "obat_sirup":include("buku/$menu.php"); break;
						case "obat_salap":include("buku/$menu.php"); break;
						case "obat_infus":include("buku/$menu.php"); break;
						case "obat_bhp":include("buku/$menu.php"); break;
                        case "add_obat":include("buku/$menu.php"); break;						
                        case "input_obat":include("buku/$menu.php"); break;						
                        case "semua_obat":include("buku/$menu.php"); break;                                                                                                                                       
                        case "tambah_stokobat":include("buku/$menu.php"); break;                                                                                                                                       
                        case "rawat_inap":include("transaksi/$menu.php"); break;                                                                    
                        case "UGD":include("buku/$menu.php"); break;                                                                    
                        case "poli_mahasiswa":include("transaksi/$menu.php"); break;                                                                    
                        case "poli_umum":include("transaksi/$menu.php"); break;                                                                    
                        case "poli_penyakit_dalam":include("transaksi/$menu.php"); break;                                                                    
                        case "poli_obgyn":include("transaksi/$menu.php"); break;                                                                    
                        case "poli_bedah":include("transaksi/$menu.php"); break;                                                                    
                        case "poli_anak":include("transaksi/$menu.php"); break;                                                                    
                        case "poli_jantung":include("transaksi/$menu.php"); break;                                                                    
                        case "poli_saraf":include("transaksi/$menu.php"); break;
                        case "perruang":include("transaksi/$menu.php"); break;
                        case "semua_pengeluaran":include("transaksi/$menu.php"); break;
                        case "delete_obat":include("buku/$menu.php"); break;
                        case "delete_buku3":include("buku/$menu.php"); break;
                        case "edit_obat":include("buku/$menu.php"); break;
                        case "proses_edit_obat":include("buku/$menu.php"); break;
                        case "proses_edit_obat2":include("buku/$menu.php"); break;
                        case "proses_tambah_stok":include("buku/$menu.php"); break;
						case "detail_buku":include("buku/$menu.php"); break;
						case "detail_buku2":include("buku/$menu.php"); break;
						case "detail_buku3":include("buku/$menu.php"); break;
                        case "proses_edit_buku":include("buku/$menu.php"); break;        
                        case "proses_edit_buku2":include("buku/$menu.php"); break;        
                        case "proses_edit_buku3":include("buku/$menu.php"); break; 
						case "UGD":include("transaksi/$menu.php"); break; 						
						case "rawat_inap":include("transaksi/$menu.php"); break; 						
						case "UGD":include("transaksi/$menu.php"); break; 					 						
									 						
					 					 						
                                
                        //------------------------------------------------------------------        
                        case "list_anggota":include("anggota/$menu.php"); break;
                        case "list_anggota2":include("anggota/$menu.php"); break;
                        case "list_anggota3":include("anggota/$menu.php"); break;
                        case "add_anggota":include("anggota/$menu.php"); break;
                        case "input_anggota":include("anggota/$menu.php"); break;                      
                        case "delete_anggota":include("anggota/$menu.php"); break;
                        case "delete_anggota2":include("anggota/$menu.php"); break;
                        case "delete_anggota3":include("anggota/$menu.php"); break;
                        case "detail_anggota":include("anggota/$menu.php"); break;
                        case "detail_anggota2":include("anggota/$menu.php"); break;
                        case "detail_anggota3":include("anggota/$menu.php"); break;
						case "edit_anggota":include("anggota/$menu.php"); break;
						case "edit_anggota2":include("anggota/$menu.php"); break;
						case "edit_anggota3":include("anggota/$menu.php"); break;
                        case "proses_edit_anggota":include("anggota/$menu.php"); break;         
                        case "proses_edit_anggota2":include("anggota/$menu.php"); break;         
                        case "proses_edit_anggota3":include("anggota/$menu.php"); break;         
                        //------------------------------------------------------------------
						case "bantuan":include("bantuan/$menu.php"); break;
						case "edit_denda":include("bantuan/$menu.php"); break;
						case "edit_mengetahui":include("bantuan/$menu.php"); break;
						case "proses_edit_denda":include("bantuan/$menu.php"); break;
						case "proses_edit_mengetahui":include("bantuan/$menu.php"); break;
						//------------------------------------------------------------------
						case "koneksi":include("expayer/$menu.php"); break;
						case "addexpayer":include("expayer/$menu.php"); break;
						case "inputexpayer":include("expayer/$menu.php"); break;
						case "obatexpayer":include("expayer/$menu.php"); break;
						case "cetak_expayer":include("expayer/$menu.php"); break;
						case "sudahexpayer":include("expayer/$menu.php"); break;
						case "proses_edit_mengetahui":include("expayer/$menu.php"); break;
						case "hampirexpayer":include("expayer/$menu.php"); break;
						//------------------------------------------------------------------  
						case "cetak_buku_kesehatan":include("user/$menu.php"); break;
						case "cetak_buku_umum":include("user/$menu.php"); break;
						case "cetak_semua_buku":include("user/$menu.php"); break;
						case "cetak_anggota_karyawan":include("user/$menu.php"); break;
						case "cetak_anggota_umum":include("user/$menu.php"); break;
						case "cetak_semua_anggota":include("user/$menu.php"); break;
						case "cetak_data_pinjam":include("user/$menu.php"); break;
						case "cetak_data_kembali":include("user/$menu.php"); break;
						case "cetak_semua_transaksi":include("user/$menu.php"); break;
						case "data_pinjam":include("user/$menu.php"); break;
						case "data_kembali":include("user/$menu.php"); break;
						case "data_semua":include("user/$menu.php"); break;
						case "data_pengeluaran_ranap":include("user/$menu.php"); break;
						case "data_pengeluaran_ugd":include("user/$menu.php"); break;
						//------------------------------------------------------------------ 
                        case "list_user":include("user/$menu.php"); break;
                        case "add_user":include("user/$menu.php"); break;
                        case "edit_user":include("user/$menu.php"); break;
                        case "proses_edit_user":include("user/$menu.php"); break;
                        //------------------------------------------------------------------
						case "semua_obat":include("obat/$menu.php"); break;
                        default : include("home.php");
                    }
                }
                else{
                    include("home.php");
                }
                ?>