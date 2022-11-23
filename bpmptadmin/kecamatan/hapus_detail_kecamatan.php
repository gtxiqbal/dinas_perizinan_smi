<?php
	include '../../config/config.php';
	$id_kecamatan = $_GET['id_kecamatan'];

	$id = base64_decode($_GET['id_detail_kecamatan']);
    $idd = base64_decode($id);
    $iddd = base64_decode($idd);
    $idddd = base64_decode($iddd);
    $iddddd = base64_decode($idddd);
    $idddddd = base64_decode($iddddd);
    
	$query = mysql_query("DELETE FROM detail_kecamatan WHERE  id_detail_kecamatan='".$idddddd."'") or die(mysql_error());

	if ($query) {
	    echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Sukses..., Data Kecamatan berhasil dihapus')
                    window.location.href='home.php?hal=aW5wdXRfZGV0YWlsX2tlY2FtYXRhbg===&id_kecamatan=$id_kecamatan';
                </SCRIPT>");
	}else{
		echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Sukses..., Data Kecamatan berhasil dihapus')
                    window.location.href='home.php?hal=aW5wdXRfZGV0YWlsX2tlY2FtYXRhbg===&id_kecamatan=$id_kecamatan';
                </SCRIPT>");
	}
?>