<?php
session_start();
session_unset(); // Remove todas as variáveis da sessão
session_destroy(); // Destrói a sessão
header('Location: entrar.php'); // Redireciona para a página de login
exit();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<body>
    <h1>saindo...</h1>
</body>
</html>