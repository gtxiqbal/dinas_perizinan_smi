<?php
	require_once('../config/config.php');    
	$return_arr = array();
	$term=$_GET['term'];
	
	$data = mysql_query("SELECT * FROM master_satuan WHERE nama_satuan LIKE '%" . $term . "%'  ORDER BY nama_satuan ASC");
	
	$responce->page = $page;
	$responce->total = $total_pages;
	$responce->records = $count;
	$i=0;
	while($line = mysql_fetch_array($data, MYSQL_ASSOC)){
		$row_array["value"] = $line["nama_satuan"];
		$row_array["id_satuan"] = $line["id_satuan"];
		
		
		array_push($return_arr, $row_array);
	}
	echo json_encode($return_arr);
?>

