<?php

    include "database.php";

    $username = $_POST["nome"];
    $usermail = $_POST["email"];
    $userpass = $_POST["senha"];
    $usertelefone = $_POST["telefone"];


    $sql = "INSERT INTO ads_diego_usuarios (nome, email, senha, telefone) VALUES ('$username', '$usermail', '$userpass', '$usertelefone')";


    if(mysqli_query($conexao, $sql))
    {
        header("Location: index.php");
    }
    else
    {
        echo "Falha ao cadastrar user";
    }
