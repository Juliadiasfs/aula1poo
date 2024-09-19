<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include_once "control/pessoa.php" ?>
</head>
<body>
    <h1>Cadastro de Amigo</h1>

    <?php
    $amigo = new Pessoa;
    echo "Nome: ".$amigo->nome."<br>";
    echo "Idade: ".$amigo->idade=45 . "<br>";
    echo "Apelido: ".$amigo->apelido . "<br>";
    echo "Telefone: ".$amigo->telefone . "<br>";
    ?>
    <h1>Cadastro de Cliente</h1>

    <?php
    $cliente = new Pessoa;
     echo "Nome: ".$cliente->nome="Amanda" . "<br>";
     echo "<h1>Exemplo de função</h1>";
     $cliente->exibirdados();
    // echo "Idade: ".$cliente->idade=45 . "<br>";
    // echo "Apelido: ".$cliente->apelido=a . "<br>";
    // echo "Telefone: ".$cliente->telefone=555555 . "<br>";
    ?>
</body>
</html>