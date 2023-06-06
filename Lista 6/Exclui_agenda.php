<?php

    include('conexao.php');
    $id_agenda = $_GET['id_agenda'];
    $sql = "SELECT * FROM agenda WHERE id_agenda=$id_agenda";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Deletar Agenda - IFSP</h1>
    <form action="Exclui_agenda_exe.php?id_agenda=<?php echo $row['id_agenda']?>" method="post">
    <input name="id_agenda" type="hidden" value="<?php echo $row['id_agenda']?>" disabled="">
        <div>
            <img src =<?php echo $row['foto'] ?> width='80' height='100'/>
        </div>
        <div>
            <label for="id_agenda">ID Agenda</label>
            <input type="text" name="id_agenda" id="id_agenda" value="<?php echo $row['id_agenda']?>" disabled="">
        </div>
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" value="<?php echo $row['nome']?>" disabled="">
        </div>
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" value="<?php echo $row['nome']?>" disabled="">
        </div>
        <div>
            <label for="apelido">Apelido</label>
            <input type="text" name="apelido" id="apelido" value="<?php echo $row['apelido']?>" disabled="">
        </div>
        <div>
            <label for="endereco">Endereço</label>
            <input type="text" name="endereco" id="endereco" value="<?php echo $row['endereco']?>" disabled="">
        </div>
        <div>
            <label for="bairro">Bairro</label>
            <input type="text" name="bairro" id="bairro" value="<?php echo $row['bairro']?>" disabled="">
        </div>
        <div>
            <label for="cidade">Cidade</label>
            <input type="text" name="cidade" id="cidade" value="<?php echo $row['cidade']?>" disabled="">
        </div>
        <div>
            <label for="estado">Estado</label>
            <input type="text" name="estado" id="estado" value="<?php echo $row['estado']?>" disabled="">
        </div>
        <div>
            <label for="telefone">Telefone</label>
            <input placeholder="(18)99999-8888" type="tel" name="telefone" id="telefone" pattern="\([0-9]{2}\)[0-9]{5}-[0-9]{4}" value="<?php echo $row['telefone']?>" disabled="">
        </div>
        <div>
            <label for="celular">Celular</label>
            <input type="tel" placeholder="(18)3691-1234" name="celular" id="celular" pattern="\([0-9]{2}\)[0-9]{4}-[0-9]{4}" value="<?php echo $row['celular']?>" disabled="">
        </div>
        <div>
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" value="<?php echo $row['email']?>" disabled="">
        </div>
        <div>
            <label for="dt_cadastro">Data cadastro</label>
            <input type="date" name="dt_cadastro" id="dt_cadastro" value="<?php echo $row['dt_cadastro']?>" disabled="">
        </div>
        <input type="submit" value="Deletar">
    </form>

    <a href="index.php">Voltar</a>
    
</body>
</html>