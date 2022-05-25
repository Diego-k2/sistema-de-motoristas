<?php 
        include_once "database.php";

        $id =$_GET["id"];

        //  $sql = "DELETE FROM caminhoneiros WHERE id = '$id'";
        $sql = "DELETE FROM ads_diego_controle_motoristas WHERE id = '$id'";

         if(mysqli_query($conexao, $sql)){
                 header("Location: lista_caminhoneiros/lista_caminhoneiros_admin.php");
         } else {
                 echo "falha na exclusão";
         }


?>