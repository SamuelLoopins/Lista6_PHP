<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/css-listarUsuarios.css">
<!-- Adicione os links para os arquivos CSS do Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Adicione os links para os arquivos JavaScript do Bootstrap -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Página inicial - Agenda IFSP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="Cadastro_agenda.html">Cadastrar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Listar_agenda.php">Listar</a>
      </li>
    </ul>
  </div>
</nav>

<!-- Adicione o script JavaScript do Bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <div class = "Listas">
    <?php
    include('conexao.php');
    $sql = "SELECT * FROM agenda";
    $result = mysqli_query($con, $sql);
    //retorna uma linha
    $row = mysqli_fetch_array($result);
    ?>
    <table align="center" border="1" width="500" class="table">
        <tr>
            <tH scope="col">Foto</tH>
            <th scope="col">Código</th>
            <th scope="col">Nome</th>
            <th scope="col">Apelido</th>
            <th scope="col">Endereço</th>
            <th scope="col">Bairro</th>
            <th scope="col">Cidade</th>
            <th scope="col">Estado</th>
            <th scope="col">Telefone</th>
            <th scope="col">Celular</th>
            <th scope="col">E-mail</th>
            <th scope="col">Data de Cadastro</th>
            <th scope="col">Alterar</th>
            <th scope="col">Deletar</th>
        </tr>
        <?php
            do{
                echo "<tr>";
                if($row['foto']=="")echo"<td scope='row'></td>";
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
</body>
</html>