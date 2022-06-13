<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <!-- Metadados -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css">

        <!-- Icone da página -->
        <link rel="shortcut icon" type="imagem/x-icon" href="./assets/img/favicon.ico"/>

        <!-- Título da página -->
        <title>Curso PHP Strings</title>
    </head>

    <body>

    <?php

    $nomeSobrenome = explode(" ", $_POST['nome'], 2);

    ?>
        <div class="mx-5 my-5">
            <h1>Cadastro feito com sucesso.</h1>
            <p>Seguem os dados de sua conta:</p>
            <ul class="list-group">
                <li class="list-group-item">Primeiro nome: <?php echo $nomeSobrenome[0]; ?></li>
                <li class="list-group-item">Sobrenome: <?php echo $nomeSobrenome[1]; ?></li>
                <li class="list-group-item">Usuário: </li>
                <li class="list-group-item">Senha: </li>
                <li class="list-group-item">Telefone: </li>
                <li class="list-group-item">Email: </li>
                <li class="list-group-item">Endereço: </li>
            </ul>
        </div>
    </body>
</html>
