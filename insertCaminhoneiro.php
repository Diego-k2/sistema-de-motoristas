<?php 

include_once "database.php";

$camiNome = $_POST['nome'];
$camiCpf = $_POST['cpf'];
$camiCnh = $_POST['cnh'];
$camiEmail = $_POST['emailCami'];
$camiTel = $_POST['telefone'];

// $sql = "INSERT INTO caminhoneiros (nome, cpf, cnh, email, telefone) VALUES ('$camiNome', '$camiCpf', '$camiCnh', '$camiEmail', '$camiTel')";
$sql = "INSERT INTO ads_diego_controle_motoristas (nome, cpf, cnh, email, telefone) VALUES ('$camiNome', '$camiCpf', '$camiCnh', '$camiEmail', '$camiTel')";

if(mysqli_query($conexao, $sql))
    {
        header("Location: lista_caminhoneiros/lista_caminhoneiros_admin.php");
    }
    else
    {
        echo "Falha ao cadastrar Caminhoneiro";
    }

?>