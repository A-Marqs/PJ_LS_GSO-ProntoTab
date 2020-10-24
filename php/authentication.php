<?php

    $usuario = $_POST['user_name'];

    $senha = $_POST['password'];


    $senhaAdm = '12345';
    $usuarioAdm = 'root';


    $$usuario = 'Adm';


    if ($senha == $senhaAdm && $usuarioAdm == $usuarioAdm)
    {
    	session_start();
    	echo "Login feito com sucesso.";
    	$_SESSION['main'] = true;
    	header ('location: main.php');
    }
    else
    {

        echo "<script language='javascript' type='text/javascript'>
        alert('Senha ou Usuário incorreto'); window.location.href='../index.php'; </script>";

    	//echo 'Senha ou Usuário errado.';
        //break;
    }
    
    	//header('location: index.php');
    





?>