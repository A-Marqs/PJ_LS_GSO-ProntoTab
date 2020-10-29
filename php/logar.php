<?php
//verifica
if isset($_POST['user_name']) && !empty($_POST['user_name']) &&
isset($_POST['password']) && !empty($_POST['password']){


require 'Conect.php';
require 'Usuario.class.php';

$u = new Usuario();

		$user = addslashes($_POST['user_name']);
		$pass = addslashes($_POST['password']);

        if($u->login($user , $pass) == true){
            if(isset($_SESSION['iduser'])){
                header("Location: ../prontotab.php");
            }else{
                header("Location: ../index.php");
            }
        }
        
	}else{

		header ("location:../index.php");
	}
	
?>

