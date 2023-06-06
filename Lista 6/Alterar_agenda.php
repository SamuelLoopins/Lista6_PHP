<?php

    include('conexao.php');
    $id_agenda = $_GET['id_agenda'];
    $sql = "SELECT * FROM agenda WHERE id_agenda = $id_agenda";
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

    <h1>Altera agenda - IFSP</h1>
    <form action="Altera_agenda_exe.php" method="post" enctype="multipart/form-data">

        <input name="id_agenda" type="hidden" value="<?php echo $row['id_agenda']?>">
        <div>
            <img src =<?php echo $row['foto'] ?> width='80' height='100'/>
        </div>
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" value="<?php echo $row['nome']?>">
        </div>
        <div>
            <label for="apelido">Apelido</label>
            <input type="text" name="apelido" id="apelido" value="<?php echo $row['apelido']?>">
        </div>
        <div>
            <label for="endereco">Endereço</label>
            <input type="text" name="endereco" id="endereco" value="<?php echo $row['endereco']?>">
        </div>
        <div>
            <label for="bairro">Bairro</label>
            <input type="text" name="bairro" id="bairro" value="<?php echo $row['bairro']?>">
        </div>
        <div>
            <label for="cidade">Cidade</label>
            <input type="text" name="cidade" id="cidade" value="<?php echo $row['cidade']?>">
        </div>
        <div>
            <label for="estado">Estado</label>
            <input type="text" name="estado" id="estado" value="<?php echo $row['estado']?>">
        </div>
        <div>
            <label for="telefone">Telefone</label>
            <input placeholder="(18)99999-8888" type="tel" name="telefone" id="telefone" pattern="\([0-9]{2}\)[0-9]{5}-[0-9]{4}" value="<?php echo $row['telefone']?>">
        </div>
        <div>
            <label for="celular">Celular</label>
            <input type="tel" placeholder="(18)3691-1234" name="celular" id="celular" pattern="\([0-9]{2}\)[0-9]{4}-[0-9]{4}" value="<?php echo $row['celular']?>">
        </div>
        <div>
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" value="<?php echo $row['email']?>">
        </div>
        <div>
            <input type="file" name="foto" id="foto" accept="image/* ">
        </div>
        <input type="submit" value="Salvar">
    </form>

    <a href="index.php">Voltar</a>
    
</body>
</html>