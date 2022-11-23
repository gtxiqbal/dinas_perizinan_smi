<?php
	include '../../config/config.php';
	$id = base64_decode($_GET['user_id']);
    $idd = base64_decode($id);
    $iddd = base64_decode($idd);
    $idddd = base64_decode($iddd);
    $iddddd = base64_decode($idddd);
    $idddddd = base64_decode($iddddd);
    
	$query = mysql_query("DELETE FROM tbl_user WHERE  user_id='".$idddddd."'") or die(mysql_error());

	if ($query) {
	    echo '<script>alert ("Data BERHASIL dihapus"); </script>';
        echo '<meta http-equiv="refresh" content="0;url=home.php?hal=cHJvZmlsX3ZpZXc=" />';
	}else{
		echo '<script>alert ("Data GAGAL dihapus"); </script>';
        echo '<meta http-equiv="refresh" content="0;url=home.php?hal=cHJvZmlsX3ZpZXc=" />';
	}
?>