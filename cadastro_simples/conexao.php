<?php
    // Argumentos de conexão
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cadastro_simples";

    // Cria a conexão
    $conexao = new mysqli($host, $user, $pass, $db);

    if($conexao -> connect_error){
        die("Conexão falhou" . $com -> connect_error);
    }else{
        // echo "Conexao realizada com sucesso"
    }

?>