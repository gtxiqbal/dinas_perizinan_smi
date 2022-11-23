<?php 
	$hal=isset($_GET['hal'])?$_GET['hal']:'';
	$hal=base64_decode($hal);
		switch ($hal)
			{

				//---------- DASHBOARD -----------//

				case 'dashboard';
					include 'dashboard/dashboard.php';
					break;

				//---------- PETA KECAMATAN -----------//

				case 'peta_kecamatan';
					include 'peta/peta_kecamatan.php';
					break;

				//---------- PETA SEKTOR USAHA -----------//

				case 'peta_industri';
					include 'peta/peta_industri.php';
					break;

				//---------- PETA KAWASAN -----------//

				case 'peta_kawasan';
					include 'peta/peta_kawasan.php';
					break;
				case 'peta_jenis_peluang';
					include 'peta/peta_jenis_peluang.php';
					break;	

				//---------- PETA SEKTOR PERTANIAN -----------//

				case 'peta_sektor_pertanian';
					include 'peta/peta_sektor_pertanian.php';
					break;

                case 'peta_sektor_pertanian2';
					include 'peta/peta_sektor_pertanian2.php';
					break;


				//---------- DETAIL -----------//

				case 'detail_perusahaan';
					include 'detail/detail_perusahaan.php';
					break;

				case 'detail_kecamatan';
					include 'detail/detail_kecamatan.php';
					break;

				case 'detail_sektor_pertanian';
					include 'detail/detail_sektor_pertanian.php';
					break;

				case 'detail_komoditi';
					include 'detail/detail_komoditi.php';
					break;

				//---------- GRAFIK -----------//

				case 'grafik_pertanian';
					include 'grafik/grafik_pertanian.php';
					break;	

	

					
				// --------- DEFAULT -------------//
				default : include "dashboard/dashboard.php";


			}
?>