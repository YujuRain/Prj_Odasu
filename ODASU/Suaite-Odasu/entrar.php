<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>
    <link rel="stylesheet" href="css/stEntrar.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=ABeeZee&display=swap">

</head>

<body>

    <?php
    if (isset($_GET['mensagem'])) {
        $mensagem = $_GET['mensagem'];
    } else {
        $mensagem = ''; // Defina um valor padrão para evitar o erro de variável indefinida
    }
    ?>

    <div class="login-container">
        <h2>Entre</h2>
        <form action="../bd/envio.php" method="post" autocomplete="on" id="loginForm">
            <input type="email" placeholder="E-mail" id="txtLoginEmailUsuario" name="txtLoginEmailUsuario" required>
            <input type="password" placeholder="Senha" id="txtLoginSenhaUsuario" name="txtLoginSenhaUsuario" required>
            <div class="options">
                <label>
                    <input type="checkbox"> Lembrar
                </label>
                <a href="senhaEsquecida.html">Esqueci minha senha</a>
            </div>
            <div id="errorMessage"><?= $mensagem ?></div>

            <button type="submit" class="login-button" id="btnEnviarFormUsuario" name="btnEnviarFormUsuario">Entrar</button>
        </form>


        <div class="separator">
            <hr>
            <span>Ou</span>
            <hr>
        </div>
        <a href="cadastro.html"><button class="register">Cadastre-se</button></a>
    </div>

</body>

</html>