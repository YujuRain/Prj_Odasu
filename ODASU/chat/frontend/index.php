<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./css/style.css"> -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,1,0" />

    <title>Chat Odasu</title>

    <style>

        @import url("https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Inter", sans-serif;
        }

        :root {
            font-size: 16px;
        }

        body {
            /* background: url("../imagens/wallpaper.jpg"); */
            color: #D9D9D9;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #3a563a;
            color: white;
            width: 100%;
        }

        .logo {
            font-size: 36px;
            font-weight: bold;
            font-family: "MuseoModerno", sans-serif;
            text-decoration: none;
            color: white;
        }

        #diviBusca{
            background-color:#ffffff;
            padding: 5px;
            border-radius:10px;
            width: 300px;
            height:42px;
            display: flex;
        }
        
        #txtBusca{
            float:left;
            background-color:transparent;
            font-size:14px;
            border:none;
            height:32px;
            width: 250px;
            padding-left: 40px;
            display: flex;
        }
        
        
        #divBusca img{
            float:left;
        }


        .iconPesquisar{
            width: 10%;
        }

        .Pesquisar {
        
            margin-left: -200px;
            position: relative;
            z-index: 99;
            top: 300px;
        }

        .user-info {
            display: flex;
            align-items: center;
        }

        .user-info .user-icon, .user-info .cart-icon {
            margin-left: 20px;
            display: flex;

        }

        .chat {
            width: 70%;
            padding-top: 10px;
        }

        #wCadas {
            width: 50%;
            display: flex;
            padding-top: 10px;
        }

        .fonte{
            color: #979797;
            padding: 0px 50px;
            display: flex;

            
        }

        .container {
            width: 100%;
            height: 100dvh;
            display: flex;
            align-items: center;
            justify-content: center;

        }

        .c2{
            background-image: url(./imagens/lerolero.png);
            background-repeat: no-repeat;
            background-position: center;
        }

        .chat {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .chat__messages {
            flex-grow: 3;
            padding: 30px 30px 90px;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
        }

        .chat__form {
            background-color: #d4d3d3;
            margin-top: auto;
            padding: 15px 20px;
            display: flex;
            align-items: center;
            gap: 10px;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            /* box-sizing: border-box; Garante que padding e bordas sejam incluídos na largura total */
            border-top: 1px solid #ccc; /* Opcional: adiciona uma borda superior para separar do conteúdo */
            /* z-index: 1000; Assegura que o formulário fique acima de outros elementos */
        
        
        }

        .chat__input {
            border: none;
            padding: 15px;
            border-radius: 8px;
            flex-grow: 1;
            background-color: white;
            outline: none;
            color: #000000;
            font-size: 1rem;
        }

        .chat__button {
            border: none;
            background: none;
            color: #f2f2f2;
            cursor: pointer;
        }

        .chat__button > span {
            font-size: 1.8rem;
        }

        .chat__messages > div {
            padding: 10px;
            width: 100%;
            max-width: 250px;
            font-size: 0.9rem;
            font-weight: 500;
            margin-bottom: 15px;
            line-height: 22px;
        }

        .message--self, .message--other {
            padding: 10px;
            width: auto; /* Mude de '100%' para 'auto' para ajustar ao conteúdo */
            max-width: 250px; /* Define um limite máximo de largura */
            font-size: 0.9rem;
            font-weight: 500;
            margin-bottom: 15px;
            line-height: 22px;
            word-wrap: break-word; /* Quebra palavras longas */
            overflow-wrap: break-word; /* Suporte adicional para quebra de palavras */
            display: inline-block; /* Garante que o balão se ajuste ao texto */
            /* Remova a altura fixa se a altura do balão não precisa ser fixada */
        }

        .message--self {
            background-color: #dfdbdb;
            color: #121212;
            border-radius: 10px 10px 0 10px;
            align-self: flex-end;
        }

        .message--other {
            background-color: #333;
            color: #f2f2f2;
            border-radius: 0 10px 10px 10px;
            align-self: flex-start;
        }

        .message--sender {
            display: block;
            margin-bottom: 15px;
            font-weight: 700;
            color: cadetblue;
        }

        .material-symbols-outlined:hover{ color: #3a563a;}

    </style>

    
</head>
<body>
    
<!-- ADICIONADO -->
<?php
    if(isset($_GET['usuario'])){
        $usuario = $_GET['usuario'];
    }
   ?>

     <div class="c2">

        <section class="container c1">

            <section class="login">
                <h2>Login</h2>
                <form class="login__form">
                    <input type="text" class="login__input" placeholder="Seu Nome" value="<?=$usuario?>" required />
                    <button type="submit" class="login__button" id="loginButton">Entrar</button>
                </form>
            </section>

            <section class="chat">
                <section class="chat__messages">

                    <!-- <div class="message--self">Hello, World</div>

                    <div class="message--other">
                        <span class="message--sender">Henrique</span>
                        Olá, Gustavo!
                    </div> -->

                </section>

                <form class="chat__form">
                    <input type="text" class="chat__input" placeholder="Digite uma mensagem" required />
                    <button type="submit" class="chat__button">
                        <span class="material-symbols-outlined">send</span>
                    </button>
                </form>
            </section>

        </section>
    </div>

    <script src="./js/script.js"></script>

    <script>
        // Verifica se o valor do input foi definido
        document.addEventListener("DOMContentLoaded", function() {
            var usuario = "<?=$usuario?>";
            if (usuario) {
                // Simula o clique no botão de login
                document.getElementById("loginButton").click();
            }
        });
    </script>
</body>
</html>