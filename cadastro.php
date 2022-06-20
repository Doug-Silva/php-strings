<?php
require 'Usuario.php';

$usuario = new namespace\Alura\Usuario($_POST['nome']);
?>

<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <!-- Metadados -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css">

        <!-- Ícone da página -->
        <link rel="shortcut icon" type="imagem/x-icon" href="./assets/img/favicon.ico"/>

        <!-- Título da página -->
        <title>Curso PHP Strings</title>
    </head>

    <body>
        <div class="mx-5 my-5">
            <h1>Cadastro feito com sucesso.</h1>
            <p>Seguem os dados de sua conta:</p>
            <ul class="list-group">
                <li class="list-group-item">Primeiro Nome: <?php echo $usuario->getNome(); ?></li>
                <li class="list-group-item">Sobrenome: <?php echo $usuario->getSobrenome(); ?></li>
                <li class="list-group-item">Usuário: </li>
                <li class="list-group-item">Senha: </li>
                <li class="list-group-item">Telefone: </li>
                <li class="list-group-item">Email: </li>
                <li class="list-group-item">Endereço: </li>
            </ul>
        </div>
    </body>
</html>
