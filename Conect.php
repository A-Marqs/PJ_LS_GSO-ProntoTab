<?php

session_start();

$localhost = "localhost";
$sqluser = "Admin";
$sqlpass = "Prontotab@2020";
$db = "ProntoTab";

global $pdo;

try{

	$pdo = new PDO("mysql:dbname=".$db."; host=".$localhost, $sqluser, $sqlpass) ;
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch (PDOException $e){
	echo "Error: ".$e->getMessage();
	exit;
}
?>