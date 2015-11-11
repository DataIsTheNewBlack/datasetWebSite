<?php
	header('Content-Type: application/json');
    $root = realpath($_SERVER["DOCUMENT_ROOT"]);
    require_once $root.'/config.inc.php';
    require_once $root.'/inc/dbconnect.php';
	
	
	$sql = 'SELECT * FROM images ORDER BY name';
	$stack = array();
                 
	foreach  ($connexion->query($sql) as $row) {
		$id = $row['id'];
		$category = $row['category'];
		$name = $row['name'];	
		$height = $row['height'];
		$width = $row['width'];	
		$data = array('id' => $id, 'category' => $category, 'name' => $name, 'size' => [(int)$height, (int)$width]);
		
		array_push($stack, $data);
	}
	
	$json = array('images' => $stack);
	
	echo json_encode($json, JSON_UNESCAPED_SLASHES);

?>