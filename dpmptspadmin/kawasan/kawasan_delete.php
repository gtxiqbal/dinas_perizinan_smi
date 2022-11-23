<?php
	include '../../config/config.php';
	$id = base64_decode($_GET['id_kawasan']);
    $idd = base64_decode($id);
    $iddd = base64_decode($idd);
    $idddd = base64_decode($iddd);
    $iddddd = base64_decode($idddd);
    $idddddd = base64_decode($iddddd);
    
	$query = mysql_query("DELETE FROM tbl_kawasan WHERE  id_kawasan='".$idddddd."'") or die(mysql_error());

	if ($query) {
	    echo '<script>alert ("Data BERHASIL dihapus"); </script>';
        echo '<meta http-equiv="refresh" content="0;url=home.php?hal=a2F3YXNhbl92aWV3=" />';
	}else{
		echo '<script>alert ("Data GAGAL dihapus"); </script>';
        echo '<meta http-equiv="refresh" content="0;url=home.php?hal=a2F3YXNhbl92aWV3=" />';
	}
?>