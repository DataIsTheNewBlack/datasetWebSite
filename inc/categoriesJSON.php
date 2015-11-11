<?php
	header('Content-Type: application/json');
    $root = realpath($_SERVER["DOCUMENT_ROOT"]);
    require_once $root.'/config.inc.php';
    require_once $root.'/inc/dbconnect.php';
	
	
	$sql = 'SELECT * FROM categories ORDER BY name';
	$stack = array();
                 
	foreach  ($connexion->query($sql) as $row) {

		$name = $row['name'];
		$thumbnail = $row['thumbnail'];
		$data = array('name' => $name, 'thumbnail' => $thumbnail);
		
		array_push($stack, $data);
	}
	
	$json = array('categories' => $stack);
	
	echo json_encode($json, JSON_UNESCAPED_SLASHES);

?>