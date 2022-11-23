<?php
	include '../../config/config.php';
	$id_perusahaan = $_GET['id_perusahaan'];
	$sektor_usaha = $_GET['sektor_usaha'];

	$id = base64_decode($_GET['id_investasi']);
    $idd = base64_decode($id);
    $iddd = base64_decode($idd);
    $idddd = base64_decode($iddd);
    $iddddd = base64_decode($idddd);
    $idddddd = base64_decode($iddddd);
    
	$query = mysql_query("DELETE FROM investasi_tahunan_perusahaan WHERE  id_investasi='".$idddddd."'") or die(mysql_error());

	if ($query) {
	    echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Sukses..., Data Invetasi Perusahaan berhasil dihapus')
                    window.location.href='home.php?hal=aW52ZXN0YXNpX3BlcnVzYWhhYW4=&id_perusahaan=$id_perusahaan&sektor_usaha=$sektor_usaha';
                </SCRIPT>");
	}else{
		echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Sukses..., Data Invetasi Perusahaan berhasil dihapus')
                    window.location.href='home.php?hal=aW52ZXN0YXNpX3BlcnVzYWhhYW4=&id_perusahaan=$id_perusahaan&sektor_usaha=$sektor_usaha';
                </SCRIPT>");
	}
?>