


<?php
require_once('config.php');

    //vai verificar se os atributos foram adicionado no banco de dados
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //inserir

    $nome = "joãoooo";
    $email = "joãoooo@hotmail.com";
    $senha = "2132312435";
    if(1 == 1)
    {
        //prepara a query
        $sql = $pdo->prepare("insert into account (nome, email, senha) values (:nome, :email, :senha)");

        $sql->bindParam(":nome", $nome);
        $sql->bindParam(":email", $email);
        $sql->bindParam(":senha", $senha);

        $sql->execute();
        echo "foi inserido";
    }



?>