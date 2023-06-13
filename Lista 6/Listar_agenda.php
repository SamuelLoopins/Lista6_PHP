<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/css-listarUsuarios.css">

    <title>Document</title>
    <style>
        body {
  margin: 0;
  font-family: Helvetica, sans-serif;
  background-color: #f4f4f4;
}

a {
  color: #000;
}

/* header */

.header {
  background-color: #fff;
  box-shadow: 1px 1px 4px 0 rgba(0,0,0,.1);
  position: fixed;
  width: 100%;
  z-index: 3;
}

.header ul {
  margin: 0;
  padding: 0;
  list-style: none;
  overflow: hidden;
  background-color: #fff;
}

.header li a {
  display: block;
  padding: 20px 20px;
  border-right: 1px solid #f4f4f4;
  text-decoration: none;
}

.header li a:hover,
.header .menu-btn:hover {
  background-color: #f4f4f4;
}

.header .logo {
  display: block;
  float: left;
  font-size: 2em;
  padding: 10px 20px;
  text-decoration: none;
}

/* menu */

.header .menu {
  clear: both;
  max-height: 0;
  transition: max-height .2s ease-out;
}

/* menu icon */

.header .menu-icon {
  cursor: pointer;
  display: inline-block;
  float: right;
  padding: 28px 20px;
  position: relative;
  user-select: none;
}

.header .menu-icon .navicon {
  background: #333;
  display: block;
  height: 2px;
  position: relative;
  transition: background .2s ease-out;
  width: 18px;
}

.header .menu-icon .navicon:before,
.header .menu-icon .navicon:after {
  background: #333;
  content: '';
  display: block;
  height: 100%;
  position: absolute;
  transition: all .2s ease-out;
  width: 100%;
}

.header .menu-icon .navicon:before {
  top: 5px;
}

.header .menu-icon .navicon:after {
  top: -5px;
}

/* menu btn */

.header .menu-btn {
  display: none;
}

.header .menu-btn:checked ~ .menu {
  max-height: 240px;
}

.header .menu-btn:checked ~ .menu-icon .navicon {
  background: transparent;
}

.header .menu-btn:checked ~ .menu-icon .navicon:before {
  transform: rotate(-45deg);
}

.header .menu-btn:checked ~ .menu-icon .navicon:after {
  transform: rotate(45deg);
}

.header .menu-btn:checked ~ .menu-icon:not(.steps) .navicon:before,
.header .menu-btn:checked ~ .menu-icon:not(.steps) .navicon:after {
  top: 0;
}

/* 48em = 768px */

@media (min-width: 48em) {
  .header li {
    float: left;
  }
  .header li a {
    padding: 20px 30px;
  }
  .header .menu {
    clear: none;
    float: right;
    max-height: none;
  }
  .header .menu-icon {
    display: none;
  }
}

    </style>
</head>
<body>
    <header class="header">
  <a href="index.php" class="logo">Página inicial - Agenda IFSP</a>
  <input class="menu-btn" type="checkbox" id="menu-btn" />
  <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
  <ul class="menu">
    <li><a href="index.php">Home</a></li>
    <li><a href="Cadastrar_agenda.html">Cadastrar</a></li>
    <li><a href="Listar_agenda.php">Listar Agendas</a></li>
  </ul>
</header>
    <div class = "Listas">
    <?php
    include('conexao.php');
    $sql = "SELECT * FROM agenda";
    $result = mysqli_query($con, $sql);
    //retorna uma linha
    $row = mysqli_fetch_array($result);
    ?>
    <table align="center" border="1" width="500">
        <tr>
            <tH>Foto</tH>
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
            <th>Alterar</th>
            <th>Deletar</th>
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