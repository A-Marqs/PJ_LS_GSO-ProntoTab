<?php

    $user = $_POST['user_name']; // Pega o nome do usuário
    $pass = $_POST['password'];  // Pega a senha do usuário
    
    $testeUser = 'testes'; // Usuário de testes
    $testePass = '12345';  // Senha do usuário de testes 

    if ($user == $testeUser && $pass == $testePass)
    {
    	session_start();
    	$_SESSION['main'] = true;
        echo "
        <script language='javascript' type='text/javascript'>
        window.alert('Logado como: usuário de testes!'); 
        window.location.href='../prontotab.php'; 
        </script>";
    }
    else
    {
        echo "<script language='javascript' type='text/javascript'>
        window.alert('Usuário e/ou senha incorretos'); 
        window.location.href='../index.php'; 
        </script>";
    }
?>