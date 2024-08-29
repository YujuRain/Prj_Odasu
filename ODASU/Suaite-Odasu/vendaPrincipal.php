<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ODASU</title>
    <link rel="stylesheet" href="css/stVenda.css">

    <link rel="stylesheet" href="css/stInicial.css">
    <link href="https://fonts.googleapis.com/css2?family=MuseoModerno:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=ABeeZee&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<style>
#comprarA{
    text-decoration: none;
    margin-left: 30%;
}
    </style>

<body>

<?php
session_start(); // Inicia a sessão
$usuario = isset($_SESSION['usuario']) ? $_SESSION['usuario'] : ''; // Obtém o nome do usuário da sessão
?>


    <header class="cabeca">
        <div class> <a class="logo" href="inicialPrincipal.php">ODASU</a></div>

        <div id="diviBusca">
            <img class="iconPesquisar" src="img/iconPesquisar.png" alt="" />
            <input type="text" id="txtBusca" placeholder="O que está procurando?" />
        </div>

        <div class="user-info">
            <div>
                <div class="cart-icon"> <a href="entrar.php"><img id="wCadas" src="img/User.png" alt=""></a></div>
            </div>
        </div>
    </header>
    <nav>
        <nav>
            <div class="menu-hamburguer">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="menu">
                <li><a href="#">Equipamentos</a></li>
                <li><a href="#">Rosto</a></li>
                <li><a href="#">Maquiagem</a></li>
                <li><a href="#">Perfumaria</a></li>
                <li><a href="#">Cabelo</a></li>
                <li><a href="#">Unha</a></li>
            </ul>
        </nav>
    </nav>

    <div class="divProduto">

        <div class="divFoto">
            <div class="produto">
                <img class="lavatorio" src="img/lavatorioT.png" alt="">
            </div>

        </div>


        <div class="divDesc">
            <div class="descProduto">
                <h1 class="h1Produto">Lavatório De Cabelo Portátil Cuba Móvel Salão Beleza + Ducha</h1>
                <p class="pEstado">Estado do produto - Semi-novo</p>
                <p>Descrição/motivo da venda </p>

            </div>

            <div class="divComprarFavoritar">

                <div class="divPreco">
                    <h2 class="precoh2">R$243,37</h2>
                </div>

                <div class="divBtnCompFav">

                <a id="comprarA" href="entrar.php">
                    <div class="btnComprar">

                        <img class="iconbtnProd" src="img/contorno-chat.png" alt="">

                        <h2 class="h2Comprar">Comprar</h2>

                    </div>
                    </a>

                </div>

            </div>
        </div>

    </div>

    <footer>
        <div class="footer-container">
            <div class="footer-content">
                <p>Odasu é o lugar que intermedia a venda e compra focado em equipamentos e produtos de salões de
                    beleza.</p>
                <button class="contact-button">Fale Conosco</button>
            </div>
            <div class="footer-bottom">
                <p>O uso deste aplicativo está sujeito aos termos e condições do Termo de Uso e Política de privacidade.
                </p>
                <p>© Odasu. Todos os direitos reservados.</p>
            </div>
            <button class="back-to-top" onclick="scrollToTop()">
                <img src="img/up.png" alt="Voltar ao Topo">
            </button>
        </div>
    </footer>




</body>


</html>