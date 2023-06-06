<?php
    include("conexao.php");
    $nome = $_POST['nome'];
    $apelido = $_POST['apelido'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $fone = $_POST['fone'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    $dt_cadastro = date("Y-m-d");
    
    

    $comparar = "select * from agenda where email = '$email'";
    $resulta = mysqli_query($con,$comparar);
    $row = mysqli_num_rows($resulta);
    if($row > 0){
        echo"<h1>Agenda já cadastrada!</h1>";
        echo "<a href='cadastro_agenda.html'>Voltar</a>";
        exit();
    }else{
        $sql = "insert into agenda(nome, apelido, endereco, bairro, cidade, estado, telefone, celular, email, dt_cadastro)";
        $sql .= "values ('".$nome."', '".$apelido."','".$endereco."','".$bairro."', '".$cidade."', '".$estado."', '".$fone."', '".$celular."', '".$email."', '".$dt_cadastro."');";
        echo $sql. "<br>";
        $result = mysqli_query($con,$sql);
        if($result){
            echo "Dados cadastrados com sucesso!";
            echo "<a href='index.php'>Voltar</a>";
        }
        else {
            echo "Erro ao tentar cadastrar!";
        }
            
    }
?>