<?php
//verifica
if(isset($_POST['user']) && !empty($_POST['user']) && isset($_POST['pass']) && !empty($_POST['pass'])){


require 'Conect.php';
require 'Usuario.class.php';

$u = new Usuario();

		$user = addslashes($_POST['user']);
		$pass = addslashes($_POST['pass']);

        if($u->login($user , $pass) == true){
            if(isset($_SESSION['iduser'])){
                header("Location: prontotab.php");
            }else{
                header("Location: index.php");
            }
        }
        
	}else{

		header ("location: index.php");
	}
	
?>