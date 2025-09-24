<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $id = mysqli_insert_id($conexao);
    $delete = "DELETE FROM usuarios WHERE id=$id";
    $conexao-> query($delete);

}
?>