<?php

    $user = $_POST['user_name'];
    $pass = $_POST['password'];
    
    $rootPass = '12345';
    $rootUser = 'root';

    if ($user == $rootUser && $pass == $rootPass)
    {
    	session_start();
    	$_SESSION['main'] = true;
        echo "
        <script language='javascript' type='text/javascript'>
        window.alert('Seja bem-vind@'); 
        window.location.href='../prontotab.php'; 
        </script>";
    }
    else
    {
        echo "<script language='javascript' type='text/javascript'>
        window.alert('Usuário e/ou senha incorretos'); 
        window.location.href='index.php'; 
        </script>";
    }
?>