<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>ODASU</title>
    <!-- <link rel="stylesheet" type="text/css" href="./css/stInicial.css"/> -->
    <link href="https://fonts.googleapis.com/css2?family=MuseoModerno:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=ABeeZee&display=swap"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


        <!-- ADICIONADO -->
    <style>

        .usuarioSpan{
                color: white;
                font-size: 20px;
                font-weight: bold;
        }
        .usuarioSpan:hover{
                color: pink;
                cursor: pointer;
        }


        body {
    font-family: 'ABeeZee', Arial, sans-serif;
    margin: 0;
    padding: 0;
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

#produtos {
    width: 100%;
    padding: 10px;
    box-shadow: 5px 10px 8px #acacac;
    transition: transform 0.3s ease;
}

#produtos:hover {
    transform: scale(1.05);
}

nav {
    background-color: #ffffff;
    color: rgb(0, 0, 0);
    padding: 10px;
    font-family: 'ABeeZee', Arial, sans-serif;
    
}

.center{
    display: flex;
    justify-content: center;
    padding: 15px 0px;

}

.cadastro{
    padding: 10px 50px;
    margin-left: 10px;
    font-size: 16px;
    background-color: #ffcc00;
    border-radius: 15px;
    cursor: pointer;
}


.categories {
    display: flex;
    justify-content: space-around;
    padding: 20px 0;
    background-color: #ffffff;
    padding-bottom: 50px;
}

.category {
    width: 100px;
    height: 100px;
    background-color: #cccccc;
    border-radius: 50%;
    display: flex;
    
}

.tim {
    border-radius: 150px;
    width: 100px;
    height: 100px;
    background-position: center;
    background-color: #C0C0C0;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

    }

.banner{
    display: flex;
    justify-content: center;
    background-color: #e6e6e6;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.055), 0 6px 20px 0 rgba(0, 0, 0, 0.071);
}

/* Personalizando as setas de navegação */
.carousel-control-prev-icon,
.carousel-control-next-icon {
    background-color: #797979; /* Cor de fundo das setas */
    border-radius: 50%; /* Deixa as setas arredondadas */
    width: 50x;
    height: 32px;
}





h2 {
    padding: 20px;
    text-align: center;
}

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    width: 100%;
    box-sizing: border-box;
}

footer {
    background-color: #e0e0e0;
    padding: 20px 0;
    position: relative;
}



.products {
    display: flex;
    justify-content: center;

}

.product {
    background-color: #ffffff;
    width: 300px;
    height: 400px;
    margin: 20px;
}

.f{
    font-family: 'ABeeZee', Arial, sans-serif;
    padding: 10px;

}

.preco{
    font-size: 20px;
    padding-left: 10px;
}

.fot{
    display: flex;
}

.footer-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.footer-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-bottom: 10px;
    border-bottom: 1px solid #999;
}

.footer-content p {
    margin: 0;
    font-size: 14px;
}

.contact-button {
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px 20px;
    cursor: pointer;
}

.footer-bottom {
    text-align: center;
    margin-top: 10px;
}

.footer-bottom p {
    margin: 5px 0;
    font-size: 12px;
    color: #666;
}

.back-to-top {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #3a563a;
    border-radius: 15px;
    cursor: pointer;
    z-index: 1000;
}

.back-to-top img {
    width: 30px;
    height: 30px;
}

.menu {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    justify-content: center;
}

.menu li {
    margin-left: 20px;
}

.menu li a {
    color: rgb(0, 0, 0);
    text-decoration: none;
    padding: 10px 20px;
    display: block;
}

.menu-hamburguer {
    display: none;
    cursor: pointer;
    flex-direction: column;
    justify-content: space-between;
    height: 24px;
    padding-bottom: 10px;
}

.menu-hamburguer span {
    background-color: rgb(19, 19, 19);
    height: 3px;
    width: 28px;
    display: block;
}

/* Estilos para dispositivos móveis */
@media (max-width: 768px) {
    .menu-hamburguer {
        display: flex;
    }

    .menu {
        display: none;
        flex-direction: column;
        width: 100%;
    }

    .menu li {
        margin: 0;
    }

    .menu li a {
        padding: 15px 20px;
        border-top: 1px solid #444;
    }

    .menu.show {
        display: flex;
    }
}

@media only screen and (max-width: 700px) {
    .categories{
        flex-wrap:wrap ;

        /* flex-direction: column; */
        padding: 50px;

    }
    .category{
        margin: 5px;

    }
}


@media only screen and (min-width: 200px) {
    .products{
        flex-wrap:wrap ;

    }
}


@media only screen and (max-width: 1000px) {
    .cabeca{
        flex-direction: column;
    }
}

@media only screen and (max-width: 1100px) {
    .center{
        flex-direction: column;
    }
    .fonte{
        padding: 10px;
    }
}


@media only screen and (max-width: 1920px) {
    .banner{
        flex-direction: column;
    }
}

@media only screen and (max-width: 1920px) {
    .fot{
        flex-direction: column;
    }
}



            

    </style>
</head>

<body>

   <!-- ADICIONADO -->
   <?php
    if(isset($_GET['usuario'])){
        $usuario = $_GET['usuario'];
    }
   ?>

    <header class="cabeca">
        <div class> <a class="logo" href="#">ODASU</a></div>

        <div id="diviBusca">
            <img class="img-fluid iconPesquisar" src="img/iconPesquisar.png" alt="" />
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
    <section class="categories">
        <div class="category"><img class="tim" src="img/belo.png" alt=""></div>
        <div class="category"><img class="tim" src="img/moca.jpg" alt=""></div>
        <div class="category"><img class="tim" src="img/ao.png" alt=""></div>
        <div class="category"><img class="tim" src="img/mentas.png" alt=""></div>
        <div class="category"><img class="tim" src="img/perfumaria.png" alt=""></div>
        <div class="category"><img class="tim" src="img/unha.webp" alt=""></div>
    </section>

    <div class="banner">
        <div class="banner">
            <div id="demo" class="carousel slide" data-bs-ride="carousel">

                <!-- Indicators/dots -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                </div>

                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/banner1.png" alt="Los Angeles" class="img-fluid d-block" style="width:100%">

                    </div>
                    <div class="carousel-item">
                        <img src="img/banner3.png" alt="Chicago" class="img-fluid d-block" style="width:100%">

                    </div>
                    <div class="carousel-item">
                        <img src="img/banner2.png" alt="New York" class="img-fluid d-block" style="width:100%">
                    </div>
                </div>

                <!-- Left and right controls/icons -->
                <button class="carousel-control-prev" type="button" class="btn btn-dark" data-bs-target="#demo"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
    </div>

    <h2>Destaques</h2>

    <section class="destaques">
        <div class="products">
            <div class="product"><a href="vendaPrincipal.php"><img id="produtos" src="img/lavatorio.webp"></a>
                <div class="f">Lavatório De Barbeiro Portátil Cuba Móvel Ducha Salão Beleza</div>
                <div class="preco">R$ 295,69</div>
            </div>

            <div class="product"><a href="vendaPrincipal.php"><img id="produtos" src="img/lavatorioT.png"></a>
                <div class="f">Carrinho Auxiliar Organizador Multiuso Para Salão De Beleza</div>
                <div class="preco">R$ 165,00</div>
            </div>
            <div class="product"><a href="vendaPrincipal.php"><img id="produtos" src="img/secador.webp"></a>
                <div class="f">Secador de cabelo TaiffElegance Tourmaline Íon preto 127V</div>
                <div class="preco">R$ 151,86</div>
            </div>
            <div class="product"><a href="vendaPrincipal.php"><img id="produtos" src="img/toalha.png"></a>
                <div class="f">Kit 10 Toalhas Rosto Clássica P/ Salão De Beleza</div>
                <div class="preco">R$ 40,00</div>
            </div>
            <div class="product"><a href="vendaPrincipal.php"><img id="produtos" src="img/cadeira.png"></a>
                <div class="f">Cadeira De Cabelereiro Salão De Beleza Reclinável Hidráulica</div>
                <div class="preco">R$ 1200,00</div>

            </div>
            <div class="product"><a href="vendaPrincipal.php"><img id="produtos" src="img/pincel.png"></a>
                <div class="f">1 Pente Krest + 1 Pincel Para Mechas Médio Nuance</div>
                <div class="preco">R$ 20,00</div>

            </div>
            <div class="product"><a href="vendaPrincipal.php"><img id="produtos" src="img/Presilha.png"></a>
                <div class="f">Plaquete Nuance Dentada + Pente Krest + Presilha + Pincel</div>
                <div class="preco">R$ 35,00</div>
            </div>
            <div class="product"><a href="vendaPrincipal.php"><img id="produtos" src="img/cetim.png"></a>
                <div class="f">Touca Toca Cetim Luxo Duplo Tecido Antifrizz Dormir Cabelo</div>
                <div class="preco">R$ 45,00</div>
            </div>
            <div class="product"><a href="vendaPrincipal.php"><img id="produtos" src="img/durag.png"></a>
                <div class="f">Bandana Dureg Preta</div>
                <div class="preco">R$ 35,98</div>
            </div>
            <div class="product"><a href="vendaPrincipal.php"><img id="produtos" src="img/esponja.png"></a>
                <div class="f">01 Bucha De Cabelo Nudred G10 Esponja Dread Turbo Dupla</div>
                <div class="preco">R$ 25,55</div>
            </div>
            <div class="product"><a href="vendaPrincipal.php"><img id="produtos" src="img/presilhaa.png"></a>
                <div class="f">30 Presilhas Jacaré Crocodilo Cabeleireiro E Cx Organizadora</div>
                <div class="preco">R$ 15,00</div>
            </div>
            <div class="product"><a href="vendaPrincipal.php"><img id="produtos" src="img/progressiva.png"></a>
                <div class="f">Kit Progressiva Zap Profissional Me Leva 2x1000mL</div>
                <div class="preco">R$ 189,89</div>
            </div>
            <div class="product"><a href="vendaPrincipal.php"><img id="produtos" src="img/creme.png"></a>
                <div class="f">Forever Liss Banho De Verniz Brilho Máscara Hidratante 1kg</div>
                <div class="preco">R$ 55,00</div>
            </div>
            <div class="product"><a href="vendaPrincipal.php"><img id="produtos" src="img/aussie.png"></a>
                <div class="f">Creme Tratamento Bye Bye Frizz 3 Minute Miracle 236ml Aussie</div>
                <div class="preco">R$ 49,99</div>

            </div>
            <div class="product"><a href="vendaPrincipal.php"><img id="produtos" src="img/capa.png"></a>
                <div class="f">Capa De Corte Cabeleireiro / Barbearia Nylon</div>
                <div class="preco">R$ 25,99</div>
            </div>

        </div>
    </section>



    <br>
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

    <script>
        function scrollToTop() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
        document.querySelector('.menu-hamburguer').addEventListener('click', function () {
            document.querySelector('.menu').classList.toggle('show');
        });


         // Obtém o valor da variável PHP e o define em uma variável JavaScript
         var usuario = '<?php echo htmlspecialchars($usuario, ENT_QUOTES, 'UTF-8'); ?>';
        
         
        // Identifica o elemento <div> com a classe 'cart-icon'
        var divElement = document.querySelector('.cart-icon');

        // Cria um novo elemento <span> com a classe 'usuarioSpan'
        var spanElement = document.createElement('span');
        spanElement.className = 'usuarioSpan';

        // Adiciona o valor da variável PHP ao conteúdo do <span>
        spanElement.textContent = usuario;

        // Substitui o <div> pelo <span>
        divElement.parentNode.replaceChild(spanElement, divElement);
    </script>

</body>

</html>