<?php


    //conexão com o banco de dados
    //$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    try
    {
        $pdo = new PDO("mysql:host=localhost;dbname=restaurante", "root", "");
    }
    catch(PDOException $err)
    {
        echo "não foi possivel conectar:".$err->getMessage();
        exit();
    }
?>