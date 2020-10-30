<?php

$localhost = "localhost";
$sqluser = "Admin";
$sqlpass = "Prontotab@2020";
$db = "ProntoTab";

$conecta = mysqli_connect($localhost, $sqluser, $sqlpass, $db);

$sql = mysqli_query($conecta, "SELECT * FROM usuarios");


?>