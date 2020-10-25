<?php
  session_start();
  if (isset($_SESSION['main'])) {
  	echo "Login efetuado com sucesso!";
    }
  else
  {
  	header('location: prontotab.php');
  }

?>