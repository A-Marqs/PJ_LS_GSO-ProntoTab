<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login ProntoTab</title>

    <link href="./styles/main.css" rel="stylesheet"> <!--Estilo CSS-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet"> <!-- Fonte Principal -->
    <link href="/scripts/login_action.js">

    <script>
        function teste() { 
            console.log("teste");
        }
    </script>

</head>
<body>
    <h1>ProntoTab</h1>

    <div id="login_form">
        <!--Usuário-->
        <div>
            <label for="user_name"> Usuário: </label>
            <input type="text" id="user_name" />

        </div>

        <!--Senha-->
        <div>
            <label for="password"> Senha: </label>
            <input type="text" id="password" />
        </div>

        <!--Autenticação de Login-->
<<<<<<< Updated upstream:index.php
        <form id="form" method="post" action="./php/authentication.php">
            <button type="submit"> Fazer Login </button>    
        </form>
=======
        <button id="entrar" onclick="teste()"> Entrar</button>
>>>>>>> Stashed changes:index.html
    </div>

</body>
</html>