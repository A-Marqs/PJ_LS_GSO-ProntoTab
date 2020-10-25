<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login ProntoTab</title>

    <link href='../styles/login_page.css' rel="stylesheets">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet"> <!-- Fonte Principal -->

</head>
<body>
    <div class="container">
        <div id="logo_box"> 
            <h1>ProntoTab</h1>
        </div>

        <!--Formulário de Login-->
        <div id="login_form">
            <form id="userdata" method="post" action="./php/authentication.php">
                <!--Usuário-->
                <div>
                    <label for="user_name">Usuário:</label>
                    <input type="text" id="user_name" name="user_name"/>
                </div>

                <!--Senha-->
                <div>
                    <label for="password">Senha:</label>
                    <input type="text" id="password" name="password"/>
                </div>

                <!--Autenticação de Login-->
                <button type="submit"> Fazer Login </button>    
            </form>
        </div>
    </div>

</body>
</html>