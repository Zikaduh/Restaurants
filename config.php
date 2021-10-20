<?php


    //conexão com o banco de dados

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