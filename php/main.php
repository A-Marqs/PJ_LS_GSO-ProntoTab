<?php

  session_start();
  if (isset($_SESSION['main'])) {
  	echo "Login efetuado com sucesso!";
  	echo "<br></br>";
    //<a> href='sair.php'>Sair</a>
  }
  else
  {
  	header('location: ./index.html');
  }

?>