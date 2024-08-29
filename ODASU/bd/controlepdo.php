<?php
class Conexao
{
    //Constantes de definem os parâmetros do Banco de Dados
    const HOST = "localhost";
    const USER = "root";
    const PASSWORD = "";
    const DB_NAME = "odasu";
    var $pdo = null;

    //o construtor é executado ao intanciar a classe


    //CONEXAO BANCO
    public function __construct()
    {
        $this->Conectar();
    }
    public function Conectar()
    {
        try {
            //Instância da classe PDO - Construtor realiza a conexão.
            $this->pdo = new PDO(
                'mysql:host=' . self::HOST . ';dbname=' . self::DB_NAME,
                self::USER,
                self::PASSWORD
                
            );
            //Parar o processo de conexão caso haja erro - lançar uma exceção.
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            // . para concatenar
            // -> para buscar os atributos dentro da variavel
            echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
        }
    }

    public function CadastrarUsuario()
    {
       
        //ISSET verifica se o atributo foi configurado.
        if (isset($_POST["txtNomeUsuario"])) {

            //Declaração das variáveis

            //tb_Usuario
            $nomeUsuario = $_POST["txtNomeUsuario"];
            $sobrenomeUsuario = $_POST["txtSobrenomeUsuario"];
            $nascimentoUsuario = $_POST["txtNascUsuario"];
            $emailUsuario = $_POST["txtEmailUsuario"];
            $foneCelularUsuario = $_POST["txtCelUsuario"];
            $senhaUsuario = $_POST["txtSenhaUsuario"];
            


            //String de Inserção no Banco de dados
            $query = "CALL SP_CadastroUsuario (:nomeUsuario, :sobrenomeUsuario, :emailUsuario, :celUsuario, :senhaUsuario, :nascimentoUsuario)";
            
            //Atribui o Insert ao PDO
            $insert = $this->pdo->prepare($query);
            
            //Define os parâmetros que serão substituídos
            $insert->bindParam(':nomeUsuario', $nomeUsuario);
            $insert->bindParam(':sobrenomeUsuario', $sobrenomeUsuario);
            $insert->bindParam(':emailUsuario', $emailUsuario);
            $insert->bindParam(':celUsuario', $foneCelularUsuario);
            $insert->bindParam(':senhaUsuario', $senhaUsuario);
            $insert->bindParam(':nascimentoUsuario', $nascimentoUsuario);

           

            //Verifica se house inserção de registros no Banco de Dados
            if ($insert->execute()) {
                //Se um registro foi inserido.
                echo "<h1><marquee>Registro inserido com Sucesso</marquee></h1>";
            } else {
                //Se nenhum registro foi inserido.
                echo "<p><marquee>Falha ao inserir registro.</marquee></p>";
            }
        }
    }

    public function CadastrarProduto()
    {
        if (isset($_POST["txtNomeProduto"]) && isset($_POST["txtCategoriaProduto"])) {
            $nomeProduto = $_POST["txtNomeProduto"];
            $descricaoProduto = $_POST["txtDescricaoProduto"];
            $valorProduto = $_POST["txtValorProduto"];
            $categoriaProduto = $_POST["txtCategoriaProduto"];
            $idUsuarioProduto = $_POST["txtIdUsuarioProduto"];
    
            if (isset($_FILES["txtImagemProduto"]) && $_FILES["txtImagemProduto"]["error"] == 0) {
                $imagemProduto = $_FILES["txtImagemProduto"];
                $nomeImagem = $imagemProduto["name"];
                $tipoImagem = $imagemProduto["type"];
                $tamanhoImagem = $imagemProduto["size"];
                $caminhoTemporario = $imagemProduto["tmp_name"];
    
                $extensoesPermitidas = ["jpg", "jpeg", "png", "gif"];
                $extensao = pathinfo($nomeImagem, PATHINFO_EXTENSION);
    
                if (in_array($extensao, $extensoesPermitidas)) {
                    $caminhoDestino = "../Suaite-Odasu/imagemBD/" . $nomeImagem;
                    move_uploaded_file($caminhoTemporario, $caminhoDestino);
    
                    $query = "INSERT INTO tb_Produto(nome_produto, img_Produto, descricao_produto, preco_produto, id_usuario, categoria_id)
                              VALUES (:nomeProduto, :imgProduto, :descricaoProduto, :valorProduto, :IdUsuarioProduto, :categoriaProduto)";
    
                    $insert = $this->pdo->prepare($query);
    
                    $insert->bindParam(':nomeProduto', $nomeProduto);
                    $insert->bindParam(':imgProduto', $caminhoDestino);
                    $insert->bindParam(':descricaoProduto', $descricaoProduto);
                    $insert->bindParam(':valorProduto', $valorProduto);
                    $insert->bindParam(':categoriaProduto', $categoriaProduto);
                    $insert->bindParam(':IdUsuarioProduto', $idUsuarioProduto);
    
                    if ($insert->execute()) {
                        echo "<h1><marquee>Registro inserido com Sucesso</marquee></h1>";
                    } else {
                        echo "<p><marquee>Falha ao inserir registro.</marquee></p>";
                    }
                } else {
                    echo "<p>Formato de arquivo não permitido. Apenas JPG, JPEG, PNG e GIF são aceitos.</p>";
                }
            } else {
                echo "<p>Erro ao enviar a imagem.</p>";
            }
        } else {
            echo "<p>Todos os campos são obrigatórios.</p>";
        }
    }


    public function mostrarProduto()
    {
        $query = "SELECT * FROM tb_produto";
    
        $select = $this->pdo->prepare($query);
        $select->execute();
    
        return $select->fetchAll(PDO::FETCH_ASSOC); // Retorna todos os produtos em um array associativo
    }


    public function LoginUsuario()
    {
    $mensagem = '';

    $loginEmailUsuario = $_POST["txtLoginEmailUsuario"];
    $loginSenhaUsuario = $_POST["txtLoginSenhaUsuario"];
    
    $query = "CALL SP_Login(:txtLoginEmailUsuario, :txtLoginSenhaUsuario)";

    $select = $this->pdo->prepare($query);
    $select->bindParam(':txtLoginEmailUsuario', $loginEmailUsuario);
    $select->bindParam(':txtLoginSenhaUsuario', $loginSenhaUsuario);
    
    $select->execute();
    $resultado = $select->fetchAll(PDO::FETCH_ASSOC);

    if ($resultado[0]['Resposta'] == "Senha incorreta") 
    {
        $mensagem = "Credenciais inválidas. Por favor, verifique o e-mail e a senha.";
        header('Location: ../Suaite-Odasu/entrar.php?mensagem=' . urlencode($mensagem));
        exit();
    } 
    else if ($resultado[0]['Resposta'] == "Usuário não encontrado") 
    {
        $mensagem = "Usuário não encontrado. Por favor, tente novamente.";
        header('Location: ../Suaite-Odasu/entrar.php?mensagem=' . urlencode($mensagem));
        exit();
    } 
    else 
    {
        session_start(); // Inicia a sessão
        $_SESSION['usuario'] = $resultado[0]['Resposta']; // Armazena o nome do usuário na sessão
        $_SESSION['id'] = $resultado[0]['Resposta2']; // Armazena o id do usuário na sessão
        header('Location: ../Suaite-Odasu/inicial.php'); // Redireciona para a página inicial
        exit();
    }
}




    public function LoginAdmin()
    {
        //ISSET verifica se o atributo foi configurado.
        if (isset($_POST["txtLoginEmailAdmin"])) {

            //Declaração das variáveis

            //tb_Produto
            $loginEmailAdmin = $_POST["txtLoginEmailAdmin"];
            $loginSenhaUAdmin = $_POST["txtLoginSenhaAdmin"];

        

            //String de Inserção no Banco de dados
            $query = "SELECT email_Usuario, senha_Usuario FROM tb_Usuario
            WHERE email_Usuario = :txtLoginEmailAdmin AND senha_Usuario = :txtLoginSenhaAdmin";
            
            //Atribui o Insert ao PDO
            $select = $this->pdo->prepare($query);
            
            //Define os parâmetros que serão substituídos
            $select->bindParam(':txtLoginEmailAdmin', $loginEmailAdmin);
            $select->bindParam(':txtLoginSenhaAdmin', $loginSenhaUAdmin);

              //Verifica se house inserção de registros no Banco de Dados
            if ($select->execute()) {
                if($loginEmailAdmin == "admin@admin.com" and $loginSenhaUAdmin == "admin")
                {
                    echo "<p><marquee>Bem vindo admin</marquee></p>";
                    return;
                }
                else
                {
                    echo "<p><marquee>Senha ou email invalido</marquee></p>";
                }
            }
            else
            {
                echo "<p><marquee>Falha no banco</marquee></p>";
            }

        }
    }


     // Método para enviar uma mensagem no chat
     public function EnviarMensagem($remetenteId, $destinatarioId, $mensagem)
     {
         $query = "INSERT INTO conversas (id_remetente_conversa, id_destinatario_conversa, mensagem_conversa, data_hora_conversa) 
                   VALUES (:remetenteId, :destinatarioId, :mensagem, NOW())";
         
         $stmt = $this->pdo->prepare($query);
         $stmt->bindParam(':remetenteId', $remetenteId);
         $stmt->bindParam(':destinatarioId', $destinatarioId);
         $stmt->bindParam(':mensagem', $mensagem);
         
         return $stmt->execute();
     }
 
     // Método para recuperar mensagens do chat
     public function RecuperarMensagens($remetenteId, $destinatarioId)
     {
         $query = "SELECT id_remetente_conversa, mensagem_conversa, data_hora_conversa 
                   FROM conversas 
                   WHERE (id_remetente_conversa = :remetenteId AND id_destinatario_conversa = :destinatarioId) 
                      OR (id_remetente_conversa = :destinatarioId AND id_destinatario_conversa = :remetenteId) 
                   ORDER BY data_hora_conversa ASC";
         
         $stmt = $this->pdo->prepare($query);
         $stmt->bindParam(':remetenteId', $remetenteId);
         $stmt->bindParam(':destinatarioId', $destinatarioId);
         $stmt->execute();
         
         return $stmt->fetchAll(PDO::FETCH_ASSOC);
     }



     public function esqueceuSenha()
     {  
        $usuarioEmailMostrar = $_POST["txtUsuarioEmailMostrar"];
       
        $query = "SELECT senha_usuario 
        FROM tb_usuario 
        WHERE email_usuario = :txtUsuarioEmailMostrar";

        $select = $this->pdo->prepare($query);
        $select->bindParam(':txtUsuarioEmailMostrar', $usuarioEmailMostrar);

        if($select->execute()){
            $result = $select->fetch(PDO::FETCH_ASSOC);
             if ($result) {
                 echo "<center><h2>Sua senha é :" . $result['senha_usuario']."</h2></center>";
             } else {
                 echo "<center><h2>Usuário não encontrado.</h2></center>";
             }
         } else {
             echo "<center><h2>Falha ao identificar seu Usuário</h2></center>";
         }

          
     }



 }