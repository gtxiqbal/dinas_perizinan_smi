<?php
	require_once('../config/config.php');    
	$return_arr = array();
	$term=$_GET['term'];
	
	$data = mysql_query("SELECT * FROM master_detail_sektor WHERE detail_sektor LIKE '%" . $term . "%' AND jenis_sektor='PERTANIAN' ORDER BY detail_sektor ASC");
	
	$responce->page = $page;
	$responce->total = $total_pages;
	$responce->records = $count;
	$i=0;
	while($line = mysql_fetch_array($data, MYSQL_ASSOC)){
		$row_array["value"] = $line["detail_sektor"];
		$row_array["id_detail_sektor"] = $line["id_detail_sektor"];
		
		
		array_push($return_arr, $row_array);
	}
	echo json_encode($return_arr);
?>

