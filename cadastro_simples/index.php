<?php
    include 'conexao.php';
    include 'excluir.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div id="container">
    <div id='title'>
    <h2>Conexão com banco de dados MySQL usando PHP</h2>
    <p>Este exemplo demonstra como conectar-se a um banco de dados MySQL USER</p>
    </div>
    <form action="salvar.php" method="post" id='formulario'>
        <div>
        <label for="nome">Nome: </label>
        <input type="text" name="nome" placeholder="Insira seu nome aqui.. " required><br><br>
        </div><div>
        <label for="email">Email: </label>
        <input type="email" name="email" placeholder="Insira seu email aqui.. " required><br><br>
        </div>
        <button type="submit">Cadastrar</button>

    </form>
    </div>
    <div id="registros">
    
    <h3>Usuários cadastrados</h3>
    <table cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th></th>
            </tr>
        </thead>
    <tbody>
   
        <?php
            $sql = "SELECT * FROM usuarios ORDER BY id ASC";
            $resultado = $conexao-> query($sql);
            
        if(!empty($resultado)){
            while($row = $resultado->fetch_assoc()){
                echo "<tr class='results'>
                <td>{$row['id']}</td>
                <td>{$row['nome']}</td>
                <td>{$row['email']}</td>
                <td>
                <form method='POST' action='excluir.php' id='form'>
                <input type='hidden' value='{$row['id']}' id='id' name='id'>
                <button type='submit' class='butao'>Delete</button>
                </form>
                </td>
                
                <tr>";
                

            }}else if(empty($resultado->fetch_assoc())){
                echo "<tr class='results'><td colspan='4'>Sem informações aqui</td></tr>";
            }
            
        ?>

</tbody>
</table>
</div>
</body>
</html>