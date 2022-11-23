<?php
session_start();
include "../../config/config.php";

$username = $_POST['username'];
$password = $_POST['password'];

//untuk mengecek apakah ada form yang kosong
	if ($username&&$password){
		$get_log = mysql_query("SELECT * FROM tbl_user WHERE username='$username'");
		$num_log = mysql_num_rows ($get_log);
		//mengecek apakah username ada atau tpresiden_idak dpresiden_idalam database
		if ($num_log!=0){
			while ($row = mysql_fetch_assoc($get_log)){
				$dbusername = $row['username'];
				$dbpassword = $row['password'];
				$user_id=$row['user_id'];
				$user_nama=$row['user_nama'];
				//$user_email=$row['user_email'];
				
			}
			//mengecek kebenaran password
			if ($username==$dbusername&&md5($password)==$dbpassword){
				
				$_SESSION['username']=$username;
				$_SESSION['user_id']=$user_id;
				$_SESSION['user_nama']=$user_nama;
				//$_SESSION['user_email']=$user_email;
				
				$update_log = mysql_query("UPDATE tbl_user SET level ='1' WHERE username = '$username'");
					echo "<script> document.location.href='../home.php'; </script>";
				exit();
				
			}else{
				header("location:../index.php?pro=sandisalah");
			}
		}else{
			header("location:../index.php?pro=idusersalah");
		}
	}else{
		header("location:../index.php?pro=idkatasandi");
	}
?>