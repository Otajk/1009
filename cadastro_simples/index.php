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
    <h2>Conexão com bnco de dados MySQL usando PHP</h2>
    <p>Este exemplo demonstra como conectar-se a um banco de dados MySQL USER</p>
    <form action="salvar.php" method="post">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" placeholder="Nome: " required><br><br>
        <label for="email">Email: </label>
        <input type="text" name="email" placeholder="email: " required><br><br>

        <button type="submit">Cadastrar</button>

    </form>


    <hr>
    <h3>Usuários cadastrados</h3>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
            </tr>
        </thead>
    
   
        <?php
            $sql = "SELECT * FROM usuarios ORDER BY id DESC";
            $resultado = $conexao-> query($sql);
            
            while($row = $resultado->fetch_assoc()){
                echo "<tr>
                <td id='id'>{$row['id']}</td>
                <td>{$row['nome']}</td>
                <td>{$row['email']}</td>
                <td><form method='POST' action='index.php'><button type='submit' class='butao'>Delete</button></td>
                
                <tr>";
                

            }
        
        ?>
    
</table>
</body>
</html>