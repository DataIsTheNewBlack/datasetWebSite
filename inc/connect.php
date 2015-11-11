<?php
    
    /**
     *
     * @file /inc/connect.php
     * @author Jonathan DEKHTIAR
     * @copyright Jonathan DEKHTIAR
     * @license  http://rss.jonathandekhtiar.eu/LICENCE.md  GPL v3.0
     * @version 1.0
     * @link http://www.jonathandekhtiar.eu
     *
     */

    $root = realpath($_SERVER["DOCUMENT_ROOT"]);
    require_once $root.'/config.inc.php';
	
 	session_start();
 	
 	if( isset($_POST["password"]) && $_POST["password"] == $_CONFIG['adminPassword'])
    	$_SESSION['logged'] = "TRUE";
    
    header('Location: '.$_CONFIG['admin']);
	
?>