<?php

    include('conexao.php');

    $id_agenda = $_GET['id_agenda'];

    echo "<h1>Usuário deletado</h1>";
    $sql = "DELETE FROM agenda where id_agenda = $id_agenda";

    echo $sql."<br>";
    $result = mysqli_query($con, $sql);
    if($result)
        echo"Dados deletados com sucesso!";
    else
        echo "Erro ao tentar deletar os dados: " . mysqli_error($con)."!";

?>

<a href="index.php">Voltar</a>