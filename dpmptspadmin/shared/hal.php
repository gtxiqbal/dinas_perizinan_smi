<?php 
	$hal=isset($_GET['hal'])?$_GET['hal']:'';
	$hal=base64_decode($hal);
		switch ($hal)
			{

				//---------- HOME -----------//

				case 'home';
					include 'shared/content.php';
					break;

				//---------- PROFIL -----------//

				case 'profil_tambah';
					include 'profil/profil_tambah.php';
					break;

				case 'profil_tambah_edit';
					include 'profil/profil_tambah_edit.php';
					break;

				case 'profil_hapus';
					include 'profil/profil_hapus.php';
					break;		

				case 'profil_view';
					include 'profil/profil_view.php';
					break;	

				case 'profil_tambah_proses';
					include 'profil/profil_tambah_proses.php';
					break;

				case 'profil_tambah_edit_proses';
					include 'profil/profil_tambah_edit_proses.php';
					break;		

				case 'profil';
					include 'profil/profil_update.php';
					break;

				case 'profil_proses_update';
					include 'profil/profil_update_proses.php';
					break;

				case 'password';
					include 'profil/password_update.php';
					break;

				case 'password_proses_update';
					include 'profil/password_update_proses.php';
					break;

				//---------- KECAMATAN -----------//

				case 'kecamatan_input';
					include 'kecamatan/kecamatan_input.php';
					break;

				case 'kecamatan_view';
					include 'kecamatan/kecamatan_view.php';
					break;	

				case 'kecamatan_input_proses';
					include 'kecamatan/kecamatan_input_proses.php';
					break;
				
				case 'kecamatan_update';
					include 'kecamatan/kecamatan_update.php';
					break;

				case 'kecamatan_update_proses';
					include 'kecamatan/kecamatan_update_proses.php';
					break;

				case 'kecamatan_delete';
					include 'kecamatan/kecamatan_delete.php';
					break;

				case 'input_detail_kecamatan';
					include 'kecamatan/input_detail_kecamatan.php';
					break;

				case 'input_detail_kecamatan_proses';
					include 'kecamatan/input_detail_kecamatan_proses.php';
					break;

				case 'update_detail_kecamatan';
					include 'kecamatan/update_detail_kecamatan.php';
					break;

				case 'update_detail_kecamatan_proses';
					include 'kecamatan/update_detail_kecamatan_proses.php';
					break;

				case 'hapus_detail_kecamatan';
					include 'kecamatan/hapus_detail_kecamatan.php';
					break;						

				//---------- PERUSAHAAN -----------//

				case 'perusahaan_input';
					include 'perusahaan/perusahaan_input.php';
					break;

				case 'perusahaan_view';
					include 'perusahaan/perusahaan_view.php';
					break;	

				case 'perusahaan_input_proses';
					include 'perusahaan/perusahaan_input_proses.php';
					break;
				
				case 'perusahaan_update';
					include 'perusahaan/perusahaan_update.php';
					break;

				case 'perusahaan_update_proses';
					include 'perusahaan/perusahaan_update_proses.php';
					break;

				case 'perusahaan_delete';
					include 'perusahaan/perusahaan_delete.php';
					break;

				case 'gambar_perusahaan';
					include 'perusahaan/gambar_perusahaan.php';
					break;

				case 'gambar_perusahaan_proses';
					include 'perusahaan/gambar_perusahaan_proses.php';
					break;

				case 'investasi_perusahaan';
					include 'perusahaan/investasi_perusahaan.php';
					break;

				case 'investasi_perusahaan_input';
					include 'perusahaan/investasi_perusahaan_input.php';
					break;

				case 'investasi_perusahaan_update';
					include 'perusahaan/investasi_perusahaan_update.php';
					break;

				case 'investasi_perusahaan_update_proses';
					include 'perusahaan/investasi_perusahaan_update_proses.php';
					break;

				case 'investasi_perusahaan_hapus';
					include 'perusahaan/investasi_perusahaan_hapus.php';
					break;

				case 'detail_investasi_perusahaan';
					include 'perusahaan/detail_investasi_perusahaan.php';
					break;	

				case 'detail_investasi_perusahaan_input';
					include 'perusahaan/detail_investasi_perusahaan_input.php';
					break;

				case 'detail_investasi_perusahaan_update';
					include 'perusahaan/detail_investasi_perusahaan_update.php';
					break;	

				case 'detail_investasi_perusahaan_update_proses';
					include 'perusahaan/detail_investasi_perusahaan_update_proses.php';
					break;

				case 'detail_investasi_perusahaan_hapus';
					include 'perusahaan/detail_investasi_perusahaan_hapus.php';
					break;


				//---------- KAWASAN -----------//

				case 'kawasan_input';
					include 'kawasan/kawasan_input.php';
					break;

				case 'kawasan_view';
					include 'kawasan/kawasan_view.php';
					break;	

				case 'kawasan_input_proses';
					include 'kawasan/kawasan_input_proses.php';
					break;
				
				case 'kawasan_update';
					include 'kawasan/kawasan_update.php';
					break;

				case 'kawasan_update_proses';
					include 'kawasan/kawasan_update_proses.php';
					break;

				case 'kawasan_delete';
					include 'kawasan/kawasan_delete.php';
					break;


				//---------- LAPORAN -----------//

				case 'laporan_data_kecamatan';
					include 'laporan/laporan_data_kecamatan.php';
					break;

				case 'laporan_data_kawasan';
					include 'laporan/laporan_data_kawasan.php';
					break;	

				case 'laporan_data_perusahaan';
					include 'laporan/laporan_data_perusahaan.php';
					break;

				case 'laporan_investasi_kecamatan';
					include 'laporan/laporan_investasi_kecamatan.php';
					break;

				case 'laporan_investasi_perusahaan';
					include 'laporan/laporan_investasi_perusahaan.php';
					break;

				case 'peluang_investasi_sektor_pertanian';
					include 'laporan/peluang_investasi_sektor_pertanian.php';
					break;

				case 'keadaan_tanaman';
					include 'laporan/keadaan_tanaman.php';
					break;

				case 'penggunaan_lahan';
					include 'laporan/penggunaan_lahan.php';
					break;


				//---------- GRAFIK -----------//

				case 'grafik_pertanian';
					include 'grafik/grafik_pertanian.php';
					break;					



				//---------- SEKTOR PERTANIAN -----------//

				case 'pertanian_input';
					include 'pertanian/pertanian_input.php';
					break;

				case 'pertanian_view';
					include 'pertanian/pertanian_view.php';
					break;	

				case 'pertanian_input_proses';
					include 'pertanian/pertanian_input_proses.php';
					break;
				
				case 'pertanian_update';
					include 'pertanian/pertanian_update.php';
					break;

				case 'pertanian_update_proses';
					include 'pertanian/pertanian_update_proses.php';
					break;

				case 'pertanian_delete';
					include 'pertanian/pertanian_delete.php';
					break;

				case 'penggunaan_lahan_input';
					include 'pertanian/penggunaan_lahan_input.php';
					break;

				case 'penggunaan_lahan_view';
					include 'pertanian/penggunaan_lahan_view.php';
					break;	

				case 'penggunaan_lahan_input_proses';
					include 'pertanian/penggunaan_lahan_input_proses.php';
					break;
				
				case 'penggunaan_lahan_update';
					include 'pertanian/penggunaan_lahan_update.php';
					break;

				case 'penggunaan_lahan_update_proses';
					include 'pertanian/penggunaan_lahan_update_proses.php';
					break;

				case 'penggunaan_lahan_delete';
					include 'pertanian/penggunaan_lahan_delete.php';
					break;						


								
															
					
				// --------- DEFAULT -------------//
				default : include "shared/content.php";


			}
?>