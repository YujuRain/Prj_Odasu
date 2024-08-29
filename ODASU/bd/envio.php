<?php
//Importar o arquivo com a classe de conexão
include "controlepdo.php";

//Instância da classe de conexão
$conexao = new Conexao();


//isset - verificar qual botão do formulário foi configurado
if (isset($_POST["btnCadastrarUsuario"])) {
    echo "Botão Enviar Formulário foi pressionado.";
    
    $conexao->CadastrarUsuario();
} 
else if (isset($_POST["btnCadastrarProduto"]))
{
    $conexao->CadastrarProduto();
    
}
else if (isset($_POST["btnMostrarProduto"]))
{
    $conexao->mostrarProduto();
    
}
else if (isset($_POST["btnEnviarFormAdmin"]))
{
    $conexao->LoginAdmin();
    
}
else if (isset($_POST["btnEnviarFormUsuario"]))
{

    $conexao->LoginUsuario();
    
}
else if (isset($_POST["btnEnviarFormEsqueceuSenha"]))
{

    $conexao->esqueceuSenha();
    
}
else if (isset($_POST["btnenviarformmostrar"]))
{

    $conexao->esqueceuSenha();
    
}

else if (isset($_POST["btnEnviarMensagem"])) {
    // Enviar mensagem no chat
    $remetenteId = $_POST["remetenteId"];
    $destinatarioId = $_POST["destinatarioId"];
    $mensagem = $_POST["mensagem"];

    if ($conexao->EnviarMensagem($remetenteId, $destinatarioId, $mensagem)) {
        echo "Mensagem enviada com sucesso.";
    } else {
        echo "Falha ao enviar mensagem.";
    }
}
else if (isset($_POST["btnRecuperarMensagens"])) {
    // Recuperar mensagens do chat
    $remetenteId = $_POST["remetenteId"];
    $destinatarioId = $_POST["destinatarioId"];

    $mensagens = $conexao->RecuperarMensagens($remetenteId, $destinatarioId);
    foreach ($mensagens as $mensagem) {
        echo "De: " . $mensagem['id_remetente_conversa'] . " - Mensagem: " . $mensagem['mensagem_conversa'] . " - Data: " . $mensagem['data_hora_conversa'] . "<br>";
    }
} 
else {
    echo "ERRO - Nenhuma ação executada.";
}
/*
else if (isset($_POST["btnListar"])) {
    $conexao->SelecionarRegistros();
} else if (isset($_POST["btnExcluir"])) {
    $conexao->DeletarRegistros();
    $conexao->SelecionarRegistros();
} 
*/

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
    body {
        background-color: whitesmoke;
    }
    </style>

</head>

<body class="container">
    <div>
        <center><a href="../Suaite-Odasu/inicial.php"><button class="btn btn-danger mt-2">Voltar</button></a></center>
    </div>
</body>

</html>