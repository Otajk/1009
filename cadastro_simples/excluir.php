<?php
include 'conexao.php';

if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['id'])){
    
    
    $id = intval($_POST['id']);
    $sql = "DELETE FROM usuarios WHERE id = $id";
    $conexao-> query($sql);

    $conexao-> query("SET @count = 0");

    $conexao-> query("UPDATE usuarios SET id = @count := @count + 1");

    $conexao-> query("ALTER TABLE usuarios AUTO_INCREMENT = 1");

    
  
    header("Location: index.php");
    exit;
     
    
   

}
?>