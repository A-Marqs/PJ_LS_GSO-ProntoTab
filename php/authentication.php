<?php

    $user = $_POST['user_name']; // Pega o nome do usuário
    $pass = $_POST['password'];  // Pega a senha do usuário
    $userdata = $_POST['userdata'];

    //Conectar com Banco de Dados:
    $connect = mysql_connect('localhost:3306', 'root', 'Prontotab@2020');
    $db = mysql_connect('users');

    if (isset($userdata)){
        $verifica = mysql_query("SELECT * FROM usuarios WHERE login =
        '$user' AND senha = '$pass'") or die("erro ao selecionar");

        if (mysql_num_rows($verifica)<=0){
            echo"<script language='javascript' type='text/javascript'>
            alert('Login e/ou senha incorretos');window.location
            .href='login.html';</script>";
            die();
        } else{
            setcookie("login",$user);
            echo "
            <script language='javascript' type='text/javascript'>
            window.alert('Logado como: usuário de testes!'); 
            window.location.href='../prontotab.php'; 
            </script>";
        }

    }
    
    //$testeUser = 'testes'; // Usuário de testes
    //$testePass = '12345';  // Senha do usuário de testes 

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