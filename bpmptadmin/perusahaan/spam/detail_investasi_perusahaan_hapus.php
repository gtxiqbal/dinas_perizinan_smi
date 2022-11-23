<?php
	include '../../config/config.php';
	$id_perusahaan = $_GET['id_perusahaan'];
	$id_investasi = $_GET['id_investasi'];
	$sektor_usaha = $_GET['sektor_usaha'];

	$id = base64_decode($_GET['id_peluang']);
    $idd = base64_decode($id);
    $iddd = base64_decode($idd);
    $idddd = base64_decode($iddd);
    $iddddd = base64_decode($idddd);
    $idddddd = base64_decode($iddddd);
    
	$query = mysql_query("DELETE FROM tbl_peluang_investasi WHERE  id_peluang='".$idddddd."'") or die(mysql_error());

	if ($query) {
	    echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Sukses..., Data Invetasi Perusahaan berhasil dihapus')
                    window.location.href='home.php?hal=ZGV0YWlsX2ludmVzdGFzaV9wZXJ1c2FoYWFu&id_perusahaan=$id_perusahaan&sektor_usaha=$sektor_usaha&id_investasi=$id_investasi';
                </SCRIPT>");
	}else{
		echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Sukses..., Data Invetasi Perusahaan berhasil dihapus')
                    window.location.href='home.php?hal=ZGV0YWlsX2ludmVzdGFzaV9wZXJ1c2FoYWFu&id_perusahaan=$id_perusahaan&sektor_usaha=$sektor_usaha&id_investasi=$id_investasi';
                </SCRIPT>");
	}
?>