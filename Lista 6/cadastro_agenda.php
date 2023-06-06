<?php

    include("conexao.php");

    $nome_foto = "";
    if(file_exists($_FILES['foto']['tmp_name'])){
    $pasta_destino = 'image/';
    $extensao = strtolower(substr($_FILES['foto']['name'],-4));
    $nome_foto = $pasta_destino . date("Ymd-His") . $extensao;
    move_uploaded_file($_FILES['foto']['tmp_name'],$nome_foto);
    }

    $nome = $_POST['nome'];
    $apelido = $_POST['apelido'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    $dt_cadastro = $_POST['dt_cadastro'];
    
    $compare = "SELECT * FROM agenda WHERE email = '$email'";
    $result = mysqli_query($con, $compare);
    $row = mysqli_num_rows($result);

    if($row>0){
        echo "<h1>Usuário já cadastrado</h1>";
        echo "<a href='index.php'><h1>Voltar</h1></a>";
        exit();
    }
    else{

    echo "<h1>Dados do Usuário</h1><br>";
    echo "<h3>Nome: $nome</h3><br>";
    echo "<h3>Apelido: $apelido</h3><br>";
    echo "<h3>Endereço: $endereco</h3><br>";
    echo "<h3>Bairro: $bairro</h3><br>";
    echo "<h3>Cidade: $cidade</h3><br>";
    echo "<h3>Estado: $estado</h3><br>";
    echo "<h3>Telefone: $telefone</h3><br>";
    echo "<h3>Celular: $celular</h3><br>";
    echo "<h3>E-mail: $email</h3><br>";
    echo "<h3>Data do cadastro: $dt_cadastro</h3><br>";
    
    $sql = "insert into agenda (nome, apelido, endereco, bairro, cidade, estado, telefone, celular, email, dt_cadastro, foto)";
    $sql .= "values ('$nome','$apelido', '$endereco','$bairro', '$cidade', '$estado', '$telefone', '$celular', '$email', '$dt_cadastro', '$nome_foto')";

    echo $sql."<br>";
    $result = mysqli_query($con, $sql);
    if($result)
        echo"Dados cadastrados com sucesso!";
    else
        echo "Erro ao tentar cadastrar!" . mysqli_error($con);

    }
?>

<h5><a href = "index.php">Voltar</a></h3>