<?php

    //declarando uma constante para acesso ao banco de dados LOCAL
    // define("SERVER_LOCAL","localhost");
    // define("SERVER_USER","root");
    // define("SERVER_PASSWORD","");
    // define("DATABASE_NAME","caminhoes"); //mesmo user 

    define("SERVER_LOCAL","si_ads_2period.mysql.dbaas.com.br");
    define("SERVER_USER","si_ads_2period");
    define("SERVER_PASSWORD","SiAdsCMC2022!");
    define("DATABASE_NAME","si_ads_2period"); //mesmo user 

    $conexao = mysqli_connect(SERVER_LOCAL,SERVER_USER,SERVER_PASSWORD,DATABASE_NAME);


?>