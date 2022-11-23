<?php
	require_once('../config/config.php');    
	$return_arr = array();
	$term=$_GET['term'];
	
	$data = mysql_query("SELECT * FROM master_jenis_sektor WHERE jenis_sektor LIKE '%" . $term . "%'  ORDER BY jenis_sektor ASC");
	
	$responce->page = $page;
	$responce->total = $total_pages;
	$responce->records = $count;
	$i=0;
	while($line = mysql_fetch_array($data, MYSQL_ASSOC)){
		$row_array["value"] = $line["jenis_sektor"];
		$row_array["id_jenis"] = $line["id_jenis"];
		
		
		array_push($return_arr, $row_array);
	}
	echo json_encode($return_arr);
?>

