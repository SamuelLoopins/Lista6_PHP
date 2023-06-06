<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="CSS/css-listarUsuarios.css">

    <title>Document</title>
</head>
<body>
    <div class = "Listas">
    <?php
    include('conexao.php');
    $sql = "SELECT * FROM agenda";
    $result = mysqli_query($con, $sql);
    //retorna uma linha
    $row = mysqli_fetch_array($result);
    ?>
    <h1 align = center>Consulta de usuários</h1>
    <table align="center" border="1" width="500">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Apelido</th>
            <th>Endereço</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Telefone</th>
            <th>Celular</th>
            <th>E-mail</th>
            <th>Data de Cadastro</th>
        </tr>
        <?php
            do{
                echo "<tr>";
                if($row['foto']=="")echo"<td></td>";
                else echo "<td><img src = '".$row['foto']. "' width='80' height='100'/></td>";
                echo "<td>".$row['id_agenda']."</td>";
                echo "<td>".$row['nome']."</td>";
                echo "<td>".$row['apelido']."</td>";
                echo "<td>".$row['endereco']."</td>";
                echo "<td>".$row['bairro']."</td>";
                echo "<td>".$row['cidade']."</td>";
                echo "<td>".$row['estado']."</td>";
                echo "<td>".$row['telefone']."</td>";
                echo "<td>".$row['celular']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['dt_cadastro']."</td>";
                echo "<div class = alterar><td><a href='Alterar_agenda.php?id_agenda=".$row['id_agenda']."'>Alterar</a></td></div>";
                echo "<td><a href='Exclui_agenda.php?id_agenda=".$row['id_agenda']."'>Deletar</a></td>";
                echo "</tr>";
            }while($row = mysqli_fetch_array($result))
        ?>
    </table>
    </div>
    <h2 align="center" ><a href="index.php">Voltar</a></h2>
</body>
</html>