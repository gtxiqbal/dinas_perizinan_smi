<?php
	require_once('../config/config.php');    
	$return_arr = array();
	$term=$_GET['term'];
	
	$data = mysql_query("SELECT * FROM keterangan_admin WHERE keterangan LIKE '%" . $term . "%'  ORDER BY keterangan ASC");
	
	$responce->page = $page;
	$responce->total = $total_pages;
	$responce->records = $count;
	$i=0;
	while($line = mysql_fetch_array($data, MYSQL_ASSOC)){
		$row_array["value"] = $line["keterangan"];
		$row_array["id"] = $line["id"];
		
		
		array_push($return_arr, $row_array);
	}
	echo json_encode($return_arr);
?>

