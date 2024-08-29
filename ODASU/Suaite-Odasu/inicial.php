<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ODASU</title>
    <link href="https://fonts.googleapis.com/css2?family=MuseoModerno:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=ABeeZee&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/stInicial.css">
</head>

<body>

    <?php
session_start(); // Inicia a sessão
$usuario = isset($_SESSION['usuario']) ? $_SESSION['usuario'] : ''; // Obtém o nome do usuário da sessão
$id = isset($_SESSION['id']) ? $_SESSION['id'] : ''; // Obtém o ID do usuário da sessão

?>
    <header class="cabeca">
        <div class> <a class="logo" href="#">ODASU</a></div>

        <div id="diviBusca">
            <img class="iconPesquisar" src="img/iconPesquisar.png" alt="" />
            <input type="text" id="txtBusca" placeholder="O que está procurando?" />
        </div>

        <div class="user-info">
            <div>
                <div class="cart-icon"> <a href="entrar.php"><img id="wCadas" src="img/User.png" alt=""></a></div>
            </div>
            <div class="cart-icon"><a href="cadastrarProduto.php">Anunciar</a></div>
            <!-- so vai sair quando tiver o usuario logado -->
            <div class="cart-icon"><a href="../chat/frontend/index.php?usuario=<?php echo urlencode($usuario); ?>"><img
                        class="chat" src="img/iconChat.png" alt=""></a></div>
            <div class="cart-icon"><a href="logout.php">Sair</a></div>
            <!-- so vai sair quando tiver o usuario logado -->
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
                        <img src="img/banner1.png" alt="Los Angeles" class="d-block" style="width:100%">

                    </div>
                    <div class="carousel-item">
                        <img src="img/banner3.png" alt="Chicago" class="d-block" style="width:100%">

                    </div>
                    <div class="carousel-item">
                        <img src="img/banner2.png" alt="New York" class="d-block" style="width:100%">
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
            <div class="product"><a href="venda.php"><img id="produtos" src="img/lavatorio.webp"></a>
                <div class="f">Lavatório De Barbeiro Portátil Cuba Móvel Ducha Salão Beleza</div>
                <div class="preco">R$ 295,69</div>
            </div>

            <div class="product"><a href="venda.php"><img id="produtos" src="img/lavatorioT.png"></a>
                <div class="f">Carrinho Auxiliar Organizador Multiuso Para Salão De Beleza</div>
                <div class="preco">R$ 165,00</div>
            </div>
            <div class="product"><a href="venda.php"><img id="produtos" src="img/secador.webp"></a>
                <div class="f">Secador de cabelo TaiffElegance Tourmaline Íon preto 127V</div>
                <div class="preco">R$ 151,86</div>
            </div>
            <div class="product"><a href="venda.php"><img id="produtos" src="img/toalha.png"></a>
                <div class="f">Kit 10 Toalhas Rosto Clássica P/ Salão De Beleza</div>
                <div class="preco">R$ 40,00</div>
            </div>
            <div class="product"><a href="venda.php"><img id="produtos" src="img/cadeira.png"></a>
                <div class="f">Cadeira De Cabelereiro Salão De Beleza Reclinável Hidráulica</div>
                <div class="preco">R$ 1200,00</div>

            </div>
            <div class="product"><a href="venda.php"><img id="produtos" src="img/pincel.png"></a>
                <div class="f">1 Pente Krest + 1 Pincel Para Mechas Médio Nuance</div>
                <div class="preco">R$ 20,00</div>

            </div>
            <div class="product"><a href="venda.php"><img id="produtos" src="img/Presilha.png"></a>
                <div class="f">Plaquete Nuance Dentada + Pente Krest + Presilha + Pincel</div>
                <div class="preco">R$ 35,00</div>
            </div>
            <div class="product"><a href="venda.php"><img id="produtos" src="img/cetim.png"></a>
                <div class="f">Touca Toca Cetim Luxo Duplo Tecido Antifrizz Dormir Cabelo</div>
                <div class="preco">R$ 45,00</div>
            </div>
            <div class="product"><a href="venda.php"><img id="produtos" src="img/durag.png"></a>
                <div class="f">Bandana Dureg Preta</div>
                <div class="preco">R$ 35,98</div>
            </div>
            <div class="product"><a href="venda.php"><img id="produtos" src="img/esponja.png"></a>
                <div class="f">01 Bucha De Cabelo Nudred G10 Esponja Dread Turbo Dupla</div>
                <div class="preco">R$ 25,55</div>
            </div>
            <div class="product"><a href="venda.php"><img id="produtos" src="img/presilhaa.png"></a>
                <div class="f">30 Presilhas Jacaré Crocodilo Cabeleireiro E Cx Organizadora</div>
                <div class="preco">R$ 15,00</div>
            </div>
            <div class="product"><a href="venda.php"><img id="produtos" src="img/progressiva.png"></a>
                <div class="f">Kit Progressiva Zap Profissional Me Leva 2x1000mL</div>
                <div class="preco">R$ 189,89</div>
            </div>
            <div class="product"><a href="venda.php"><img id="produtos" src="img/creme.png"></a>
                <div class="f">Forever Liss Banho De Verniz Brilho Máscara Hidratante 1kg</div>
                <div class="preco">R$ 55,00</div>
            </div>
            <div class="product"><a href="venda.php"><img id="produtos" src="img/aussie.png"></a>
                <div class="f">Creme Tratamento Bye Bye Frizz 3 Minute Miracle 236ml Aussie</div>
                <div class="preco">R$ 49,99</div>

            </div>
            <div class="product"><a href="venda.php"><img id="produtos" src="img/capa.png"></a>
                <div class="f">Capa De Corte Cabeleireiro / Barbearia Nylon</div>
                <div class="preco">R$ 25,99</div>
            </div>



            <?php
            // Inclua o arquivo com a classe que contém a função mostrarProduto()
            require_once '../bd/controlepdo.php'; // Ajuste o caminho conforme necessário

            // Crie uma instância da classe
            $produto = new Conexao(); // Substitua 'SuaClasse' pelo nome da sua classe
            
            // Chame a função mostrarProduto
            $produtos = $produto->mostrarProduto();

            // Verifique se há produtos para mostrar
            if ($produtos) {
                
                foreach ($produtos as $item) {
                    
                    echo "<div class='product'>";
                    echo "<a href='venda.php'><img id='produtos' src='" . $item['img_Produto'] . "' alt='" . htmlspecialchars($item['nome_produto']) .  " width='500px' '> </a>"; // Mostra a imagem do produto
                    echo "<div class='f'> " . htmlspecialchars($item['nome_produto']) . " </div>";
                    //echo " " . htmlspecialchars($item['descricao_produto']) . "<br>";
                    echo "<div class='preco'> R$ " . number_format($item['preco_produto'], 2, ',', '.') . " </div>";
                    echo "</div>";
                    //echo "<strong>Categoria:</strong> " . htmlspecialchars($item['categoria_id']); // Ajuste conforme necessário

                }
                
            } else {
                //echo "<p>Nenhum produto encontrado.</p>";
            }
            ?>


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
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
    document.querySelector('.menu-hamburguer').addEventListener('click', function() {
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