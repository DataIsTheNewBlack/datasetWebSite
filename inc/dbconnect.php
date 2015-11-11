<?php
    
    /**
     *
     * @file /inc/dbconnect.php
     * @author Jonathan DEKHTIAR
     * @copyright Jonathan DEKHTIAR
     * @license  http://rss.jonathandekhtiar.eu/LICENCE.md  GPL v3.0
     * @version 1.0
     * @link http://www.jonathandekhtiar.eu
     *
     */

    $root = realpath($_SERVER["DOCUMENT_ROOT"]);
    require_once $root.'/config.inc.php';
    
    try {
        $connexion = new PDO('mysql:host='.$_CONFIG['sql_host'].';dbname='.$_CONFIG['sql_db'], $_CONFIG['sql_user'], $_CONFIG['sql_pass'],  array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));   
        
    }catch ( Exception $e ) 
    {
        echo "Connection à MySQL impossible : <br>", $e->getMessage();
        echo '<meta http-equiv="Refresh" content="5; Url='.$_CONFIG['home'].'">';
        die();
    }
?>