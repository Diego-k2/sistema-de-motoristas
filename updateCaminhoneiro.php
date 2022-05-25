<?php

include_once "database.php";

$camiId = $_POST['id'];
$camiNome = $_POST['nome'];
$camiCpf = $_POST['cpf'];
$camiCnh = $_POST['cnh'];
$camiEmail = $_POST['emailCami'];
$camiTel = $_POST['telefone'];

// $sql = "UPDATE caminhoneiros SET nome = '$camiNome', cpf = '$camiCpf', cnh = '$camiCnh', email = '$camiEmail', telefone = '$camiTel' WHERE id = $camiId";
$sql = "UPDATE ads_diego_controle_motoristas SET nome = '$camiNome', cpf = '$camiCpf', cnh = '$camiCnh', email = '$camiEmail', telefone = '$camiTel' WHERE id = $camiId";

if(mysqli_query($conexao, $sql))
    {
        header("Location: lista_caminhoneiros/lista_caminhoneiros_admin.php");
    }
    else
    {
        echo "Falha ao cadastrar Caminhoneiro";
    }

?>