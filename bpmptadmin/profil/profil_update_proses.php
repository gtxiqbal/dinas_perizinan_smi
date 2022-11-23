<?php
	include '../config/config.php';

	$user_id = $_POST['user_id'];
	$user_nama = $_POST['nama'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$jabatan = $_POST['jabatan'];
	$alamat = $_POST['alamat'];
	$email = $_POST['email'];

	if (empty($user_nama)) {
		echo '<script>alert ("Maaf...!!!, Harap Masukan Nama Anda!"); </script>';
		echo '<meta http-equiv="refresh" content="0;url=home.php?hal=cHJvZmls" />';
	}else{
									$query = mysql_query("UPDATE tbl_user SET user_nama='$user_nama', user_tanggal='$tgl_lahir', user_tempat='$tempat_lahir', user_alamat='$alamat', user_email='$email', user_jabatan='$jabatan' WHERE user_id='$user_id'") or die(mysql_error());

									if($query){
										echo '<script>alert ("Sukses... Profil Administrator Berhasil di UPDATE!"); </script>';
										echo '<meta http-equiv="refresh" content="0;url=home.php?hal=aG9tZQ=" />';
									}else{
										echo '<script>alert ("Maaf, Profil Administrator GAGAL di UPDATE!"); </script>';
										echo '<meta http-equiv="refresh" content="0;url=home.php?hal=cHJvZmls" />';
									}
								}

?>