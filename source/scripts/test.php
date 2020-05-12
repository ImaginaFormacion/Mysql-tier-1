<?php 

$hst = 'mysql';
$db = 'practicas';
$us = 'root';
$ps = 'password';


$conex_imp = new mysqli($hst, $us , $ps , $db);
var_dump($conex_imp);
if ($conex_imp->connect_errno) {
		die();
}


$stockQuery = "SELECT * FROM wp7b_jnw_stock";
$stockCollectionResult = $conex_imp->query($stockQuery);

if($stockCollectionResult->num_rows > 0){
    while( $stockRow = $stockCollectionResult->fetch_object() ){
        var_dump($stockRow);
    }
}

?>