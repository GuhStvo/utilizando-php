<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>h1{color: #292E1E;}strong {font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;color: #AFBBF2;}</style>
</head>

<body>
    <?php
    print '<h1>Isso é um <strong>PHP</strong></h1>';
    echo '<h1>Isso é um <strong>PHP</strong> com echo</h1>';
    // Comentário de uma linha
    # Comentário de uma linha também
    /* Comentário de multiplas linhas */

    // Criação de variável
    $VALOR = 100;
    $VALOR = 200;
    $VALOR = 100;

    $nome = "João";
    $_idade = 40;
    // $01teste = 100; // Não é permitido
    $nome_da_variavel = "gustavo";
    // $nome da variavel = "maria"; // Não é permitido

    echo $nome; // Apresentação da variável

    ?>
</body>

</html>