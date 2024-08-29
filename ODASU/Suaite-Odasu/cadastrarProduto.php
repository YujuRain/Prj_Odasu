<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <link rel="stylesheet" href="css/stCadastro.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=ABeeZee&display=swap">
    <link rel="icon" href="./favicon.png" type="image/png">
    <script src="https://kit.fontawesome.com/416980903f.js" crossorigin="anonymous"></script>
</head>

<body>

    <?php
session_start(); // Inicia a sessão
$usuario = isset($_SESSION['usuario']) ? $_SESSION['usuario'] : ''; // Obtém o nome do usuário da sessão
$id = isset($_SESSION['id']) ? $_SESSION['id'] : ''; // Obtém o ID do usuário da sessão
?>

    <div class="container">
        <form action="../bd/envio.php" method="post" autocomplete="off" enctype="multipart/form-data">
            <!-- enctype="multipart/form-data" permite o upload de arquivos -->

            <div class="header">
                <div> <i class="fa-solid fa-user" style="color: #3D5B3D;"></i></div>
                <h2>CADASTRO DE PRODUTOS</h2>
            </div>

            <hr>

            <div class="form-row">

                <h1><?= htmlspecialchars($usuario) ?></h1>



                <div class="form-group">
                    <label for="txtImagemProduto">Imagem</label>
                    <input type="file" id="txtImagemProduto" name="txtImagemProduto" accept="image/*" required>
                    <!-- O atributo accept="image/*" especifica que o campo só aceita arquivos de imagem (como .jpg, .png, etc.). -->
                </div>

                <div class="form-group">
                    <label for="txtNomeProduto">Nome do Produto</label>
                    <input type="text" id="txtNomeProduto" name="txtNomeProduto" required>
                </div>

            </div>

            <div class="form-row">

                <div class="form-group">
                    <label for="txtDescricaoProduto">Descrição do Produto</label>
                    <input type="text" id="txtDescricaoProduto" name="txtDescricaoProduto" required>
                </div>

                <div class="form-group">
                    <label for="txtValorProduto">Valor do Produto</label>
                    <input type="number" id="txtValorProduto" name="txtValorProduto" required>
                </div>

            </div>

            <hr>

            <h3>Categoria</h3>
            <div class="form-group">

                <input class="w3-radio" type="radio" value="1" name="txtCategoriaProduto" checked>
                <label>Equipamentos</label>

                <input class="w3-radio" type="radio" value="2" name="txtCategoriaProduto">
                <label>Rosto</label>

                <input class="w3-radio" type="radio" value="3" name="txtCategoriaProduto">
                <label>Cabelo</label>

            </div>

            <div class="center">
                <button type="submit" id="btnCadastrarProduto" name="btnCadastrarProduto">Cadastrar Produto</button>
            </div>

            <div class="form-group">
                <input type="hidden" id="txtIdUsuarioProduto" name="txtIdUsuarioProduto"
                    value="<?= htmlspecialchars($id) ?>" readonly required>
            </div>

        </form>


        <!-- ####################################################################################### -->
        <div>
            <h1>Mostrar Produtos</h1>
            <?php
            // Inclua o arquivo com a classe que contém a função mostrarProduto()
            require_once '../bd/controlepdo.php'; // Ajuste o caminho conforme necessário

            // Crie uma instância da classe
            $produto = new Conexao(); // Substitua 'SuaClasse' pelo nome da sua classe
            
            // Chame a função mostrarProduto
            $produtos = $produto->mostrarProduto();

            // Verifique se há produtos para mostrar
            if ($produtos) {
                echo "<ul>";
                foreach ($produtos as $item) {
                    echo "<li>";
                    echo "<img src='" . $item['img_Produto'] . "' alt='" . htmlspecialchars($item['nome_produto']) . "' width='100'>"; // Mostra a imagem do produto
                    echo "<strong>Nome:</strong> " . htmlspecialchars($item['nome_produto']) . "<br>";
                    echo "<strong>Descrição:</strong> " . htmlspecialchars($item['descricao_produto']) . "<br>";
                    echo "<strong>Valor:</strong> R$ " . number_format($item['preco_produto'], 2, ',', '.') . "<br>";
                    echo "<strong>Categoria:</strong> " . htmlspecialchars($item['categoria_id']); // Ajuste conforme necessário
                    echo "</li>";
                }
                echo "</ul>";
            } else {
                echo "<p>Nenhum produto encontrado.</p>";
            }
            ?>
        </div>
    </div>
</body>

</html>