<?php
    include "conexao.php";

    //receba os dados de formulário

    $nome = $_POST['nome'];
    $email = $_POST['email'];

    //Inserir as informações no banco de dados
    $sql = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')";
    $conexao->query($sql);
    

    //Redireciona para a pagina inicial após clicar em submit
    header("Location: index.php");
    exit;
    
    ?>