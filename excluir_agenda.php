<?php
    include('conexao.php');
    $id_agenda = $_GET['id_agenda'];
    echo "<h1>Deletar dados</h1>";

    $sql = "delete from agenda where id_agenda = '$id_agenda'";
    echo $sql ."<br>";
    $result = mysqli_query($con, $sql);
    if($result){
        echo "Dados deletados com sucesso! <br>";
    }else{
        echo "Erro ao deletar dados:  ".mysqli_error($con)."!";
    }
?>
<a href="index.php">Voltar</a>