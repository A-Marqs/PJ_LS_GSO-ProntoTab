<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login ProntoTab</title>

    <link href='styles/login_page.css' rel="stylesheet"> <!-- Estilo CSS-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet"> <!-- Fonte Principal -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet"> <!-- Fonte Secundária -->

</head>
<body>
    <div class="container">
        <div class="logo_box"> 
            <h1>ProntoTab</h1>
        </div>

        <!--Formulário de Login-->
        <div class="login_form">
            <form id="userdata" method="post" action="logar.php">
                <!--Usuário-->
                <div class="user">
                    <label>usuário:</label>
                    <input type="text" name="user" placeholder="Digite seu usuário" required/>
                </div>

                <!--Senha-->
                <div class="pass">
                    <label>senha:</label>
                    <input type="password" name="pass" placeholder="Digite sua senha" required/>
                </div>

                <!--Autenticação de Login-->
                <button type="submit"> Fazer Login </button>    
            </form>
        </div>
    </div>

</body>
</html>