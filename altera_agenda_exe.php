<?php

include("conexao.php");
$id_agenda = $_POST['id_agenda'];
$nome = $_POST['nome'];
$apelido = $_POST['apelido'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$fone = $_POST['fone'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$dt_cadastro = $_POST['data_cadastro'];
$sql1 = "select * from agenda where id_agenda = '$id_agenda'";
$result = mysqli_query($con, $sql1);
$row = mysqli_fetch_array($result);
$nome_foto = $row['foto_agenda'];
    if(file_exists($_FILES['foto']['tmp_name'])){
        $pasta_destino = 'fotos/';
        $extensao = strtolower(substr($_FILES['foto']['name'],-4));
        $nome_foto = $pasta_destino.date("Ymd-His") . $extensao;
        move_uploaded_file($_FILES['foto']['tmp_name'], $nome_foto);
    }
    
    
    echo "<h1>Alteração de dados</h1>";

    $sql = "update agenda set nome = '$nome', apelido = '$apelido', endereco = '$endereco', bairro = '$bairro' , cidade = '$cidade', estado = '$estado', telefone = '$fone', celular = '$celular', email = '$email', foto_agenda = '$nome_foto', dt_cadastro = '$dt_cadastro' where id_agenda = '$id_agenda'";
    echo $sql ."<br>";
    $result = mysqli_query($con, $sql);
    if($result){
        echo "Dados alterados com sucesso! <br>";
    }else{
        echo "Erro ao alterar dados:  ".mysqli_error($con)."!";
    }
?>
<a href="index.php">Voltar</a>