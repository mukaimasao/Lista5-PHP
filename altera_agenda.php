<?php
    include('conexao.php');
    $id_agenda = $_GET['id_agenda'];
    $sql = "select * from agenda where id_agenda = $id_agenda";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Alteração de Agendas - IFSP</h1>
    <form action="altera_agenda_exe.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id_agenda" value="<?php echo $row['id_agenda']?>">
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
            <?php 
                echo "<select name='estado' id='estado' size='1'>";
                switch($row['estado']){
                    case "AC":
                        echo "<option  selected value='AC'>Acre</option>";
                        echo "<option value='AL'>Alagoas</option>";
                        echo "<option value='AP'>Amapá</option>";
                        echo "<option value='AM'>Amazonas</option>";
                        echo "<option value='BA'>Bahia</option>";
                        echo "<option value='CE'>Ceará</option>";
                        echo "<option value='DF'>Distrito Federal</option>";
                        echo "<option value='ES'>Espírito Santo</option>";
                        echo "<option value='GO'>Goiás</option>";
                        echo "<option value='MA'>Maranhão</option>";
                        echo "<option value='MT'>Mato Grosso</option>";
                        echo "<option value='MS'>Mato Grosso do Sul</option>";
                        echo "<option value='MG'>Minas Gerais</option>";
                        echo "<option value='PA'>Pará</option>";
                        echo "<option value='PB'>Paraíba</option>";
                        echo "<option value='PR'>Paraná</option>";
                        echo "<option value='PE'>Pernambuco</option>";
                        echo "<option value='PI'>Piauí</option>";
                        echo "<option value='RJ'>Rio de Janeito</option>";
                        echo "<option value='RN'>Rio Grande do Norte</option>";
                        echo "<option value='RS'>Rio Grande do Sul</option>";
                        echo "<option value='RO'>Rondônia</option>";
                        echo "<option value='RR'>Roraima</option>";
                        echo "<option value='SC'>Santa Catarina</option>";
                        echo "<option value='SP'>São Paulo</option>";
                        echo "<option value='SE'>Sergipe</option>";
                        echo "<option value='TO'>Tocantins</option>";
                    break;
                    case "AL":
                        echo "<option value='AC'>Acre</option>";
                        echo "<option selected value='AL'>Alagoas</option>";
                        echo "<option value='AP'>Amapá</option>";
                        echo "<option value='AM'>Amazonas</option>";
                        echo "<option value='BA'>Bahia</option>";
                        echo "<option value='CE'>Ceará</option>";
                        echo "<option value='DF'>Distrito Federal</option>";
                        echo "<option value='ES'>Espírito Santo</option>";
                        echo "<option value='GO'>Goiás</option>";
                        echo "<option value='MA'>Maranhão</option>";
                        echo "<option value='MT'>Mato Grosso</option>";
                        echo "<option value='MS'>Mato Grosso do Sul</option>";
                        echo "<option value='MG'>Minas Gerais</option>";
                        echo "<option value='PA'>Pará</option>";
                        echo "<option value='PB'>Paraíba</option>";
                        echo "<option value='PR'>Paraná</option>";
                        echo "<option value='PE'>Pernambuco</option>";
                        echo "<option value='PI'>Piauí</option>";
                        echo "<option value='RJ'>Rio de Janeito</option>";
                        echo "<option value='RN'>Rio Grande do Norte</option>";
                        echo "<option value='RS'>Rio Grande do Sul</option>";
                        echo "<option value='RO'>Rondônia</option>";
                        echo "<option value='RR'>Roraima</option>";
                        echo "<option value='SC'>Santa Catarina</option>";
                        echo "<option value='SP'>São Paulo</option>";
                        echo "<option value='SE'>Sergipe</option>";
                        echo "<option value='TO'>Tocantins</option>";
                    break;
                    case "AP":
                        echo "<option value='AC'>Acre</option>";
                        echo "<option  value='AL'>Alagoas</option>";
                        echo "<option selected value='AP'>Amapá</option>";
                        echo "<option value='AM'>Amazonas</option>";
                        echo "<option value='BA'>Bahia</option>";
                        echo "<option value='CE'>Ceará</option>";
                        echo "<option value='DF'>Distrito Federal</option>";
                        echo "<option value='ES'>Espírito Santo</option>";
                        echo "<option value='GO'>Goiás</option>";
                        echo "<option value='MA'>Maranhão</option>";
                        echo "<option value='MT'>Mato Grosso</option>";
                        echo "<option value='MS'>Mato Grosso do Sul</option>";
                        echo "<option value='MG'>Minas Gerais</option>";
                        echo "<option value='PA'>Pará</option>";
                        echo "<option value='PB'>Paraíba</option>";
                        echo "<option value='PR'>Paraná</option>";
                        echo "<option value='PE'>Pernambuco</option>";
                        echo "<option value='PI'>Piauí</option>";
                        echo "<option value='RJ'>Rio de Janeito</option>";
                        echo "<option value='RN'>Rio Grande do Norte</option>";
                        echo "<option value='RS'>Rio Grande do Sul</option>";
                        echo "<option value='RO'>Rondônia</option>";
                        echo "<option value='RR'>Roraima</option>";
                        echo "<option value='SC'>Santa Catarina</option>";
                        echo "<option value='SP'>São Paulo</option>";
                        echo "<option value='SE'>Sergipe</option>";
                        echo "<option value='TO'>Tocantins</option>";
                    break;
                    case "AM":
                        echo "<option value='AC'>Acre</option>";
                        echo "<option  value='AL'>Alagoas</option>";
                        echo "<option  value='AP'>Amapá</option>";
                        echo "<option  selected value='AM'>Amazonas</option>";
                        echo "<option value='BA'>Bahia</option>";
                        echo "<option value='CE'>Ceará</option>";
                        echo "<option value='DF'>Distrito Federal</option>";
                        echo "<option value='ES'>Espírito Santo</option>";
                        echo "<option value='GO'>Goiás</option>";
                        echo "<option value='MA'>Maranhão</option>";
                        echo "<option value='MT'>Mato Grosso</option>";
                        echo "<option value='MS'>Mato Grosso do Sul</option>";
                        echo "<option value='MG'>Minas Gerais</option>";
                        echo "<option value='PA'>Pará</option>";
                        echo "<option value='PB'>Paraíba</option>";
                        echo "<option value='PR'>Paraná</option>";
                        echo "<option value='PE'>Pernambuco</option>";
                        echo "<option value='PI'>Piauí</option>";
                        echo "<option value='RJ'>Rio de Janeito</option>";
                        echo "<option value='RN'>Rio Grande do Norte</option>";
                        echo "<option value='RS'>Rio Grande do Sul</option>";
                        echo "<option value='RO'>Rondônia</option>";
                        echo "<option value='RR'>Roraima</option>";
                        echo "<option value='SC'>Santa Catarina</option>";
                        echo "<option value='SP'>São Paulo</option>";
                        echo "<option value='SE'>Sergipe</option>";
                        echo "<option value='TO'>Tocantins</option>";
                    break;
                    case "BA":
                        echo "<option value='AC'>Acre</option>";
                        echo "<option  value='AL'>Alagoas</option>";
                        echo "<option  value='AP'>Amapá</option>";
                        echo "<option   value='AM'>Amazonas</option>";
                        echo "<option selected value='BA'>Bahia</option>";
                        echo "<option value='CE'>Ceará</option>";
                        echo "<option value='DF'>Distrito Federal</option>";
                        echo "<option value='ES'>Espírito Santo</option>";
                        echo "<option value='GO'>Goiás</option>";
                        echo "<option value='MA'>Maranhão</option>";
                        echo "<option value='MT'>Mato Grosso</option>";
                        echo "<option value='MS'>Mato Grosso do Sul</option>";
                        echo "<option value='MG'>Minas Gerais</option>";
                        echo "<option value='PA'>Pará</option>";
                        echo "<option value='PB'>Paraíba</option>";
                        echo "<option value='PR'>Paraná</option>";
                        echo "<option value='PE'>Pernambuco</option>";
                        echo "<option value='PI'>Piauí</option>";
                        echo "<option value='RJ'>Rio de Janeito</option>";
                        echo "<option value='RN'>Rio Grande do Norte</option>";
                        echo "<option value='RS'>Rio Grande do Sul</option>";
                        echo "<option value='RO'>Rondônia</option>";
                        echo "<option value='RR'>Roraima</option>";
                        echo "<option value='SC'>Santa Catarina</option>";
                        echo "<option value='SP'>São Paulo</option>";
                        echo "<option value='SE'>Sergipe</option>";
                        echo "<option value='TO'>Tocantins</option>";
                    break;
                    case "CE":
                        echo "<option value='AC'>Acre</option>";
                        echo "<option  value='AL'>Alagoas</option>";
                        echo "<option  value='AP'>Amapá</option>";
                        echo "<option   value='AM'>Amazonas</option>";
                        echo "<option  value='BA'>Bahia</option>";
                        echo "<option selected value='CE'>Ceará</option>";
                        echo "<option value='DF'>Distrito Federal</option>";
                        echo "<option value='ES'>Espírito Santo</option>";
                        echo "<option value='GO'>Goiás</option>";
                        echo "<option value='MA'>Maranhão</option>";
                        echo "<option value='MT'>Mato Grosso</option>";
                        echo "<option value='MS'>Mato Grosso do Sul</option>";
                        echo "<option value='MG'>Minas Gerais</option>";
                        echo "<option value='PA'>Pará</option>";
                        echo "<option value='PB'>Paraíba</option>";
                        echo "<option value='PR'>Paraná</option>";
                        echo "<option value='PE'>Pernambuco</option>";
                        echo "<option value='PI'>Piauí</option>";
                        echo "<option value='RJ'>Rio de Janeito</option>";
                        echo "<option value='RN'>Rio Grande do Norte</option>";
                        echo "<option value='RS'>Rio Grande do Sul</option>";
                        echo "<option value='RO'>Rondônia</option>";
                        echo "<option value='RR'>Roraima</option>";
                        echo "<option value='SC'>Santa Catarina</option>";
                        echo "<option value='SP'>São Paulo</option>";
                        echo "<option value='SE'>Sergipe</option>";
                        echo "<option value='TO'>Tocantins</option>";
                    break;
                    case "DF":
                        echo "<option value='AC'>Acre</option>";
                        echo "<option  value='AL'>Alagoas</option>";
                        echo "<option  value='AP'>Amapá</option>";
                        echo "<option   value='AM'>Amazonas</option>";
                        echo "<option  value='BA'>Bahia</option>";
                        echo "<option  value='CE'>Ceará</option>";
                        echo "<option selected value='DF'>Distrito Federal</option>";
                        echo "<option value='ES'>Espírito Santo</option>";
                        echo "<option value='GO'>Goiás</option>";
                        echo "<option value='MA'>Maranhão</option>";
                        echo "<option value='MT'>Mato Grosso</option>";
                        echo "<option value='MS'>Mato Grosso do Sul</option>";
                        echo "<option value='MG'>Minas Gerais</option>";
                        echo "<option value='PA'>Pará</option>";
                        echo "<option value='PB'>Paraíba</option>";
                        echo "<option value='PR'>Paraná</option>";
                        echo "<option value='PE'>Pernambuco</option>";
                        echo "<option value='PI'>Piauí</option>";
                        echo "<option value='RJ'>Rio de Janeito</option>";
                        echo "<option value='RN'>Rio Grande do Norte</option>";
                        echo "<option value='RS'>Rio Grande do Sul</option>";
                        echo "<option value='RO'>Rondônia</option>";
                        echo "<option value='RR'>Roraima</option>";
                        echo "<option value='SC'>Santa Catarina</option>";
                        echo "<option value='SP'>São Paulo</option>";
                        echo "<option value='SE'>Sergipe</option>";
                        echo "<option value='TO'>Tocantins</option>";
                    break;
                    case "ES":
                        echo "<option value='AC'>Acre</option>";
                        echo "<option  value='AL'>Alagoas</option>";
                        echo "<option  value='AP'>Amapá</option>";
                        echo "<option   value='AM'>Amazonas</option>";
                        echo "<option  value='BA'>Bahia</option>";
                        echo "<option  value='CE'>Ceará</option>";
                        echo "<option  value='DF'>Distrito Federal</option>";
                        echo "<option selected value='ES'>Espírito Santo</option>";
                        echo "<option value='GO'>Goiás</option>";
                        echo "<option value='MA'>Maranhão</option>";
                        echo "<option value='MT'>Mato Grosso</option>";
                        echo "<option value='MS'>Mato Grosso do Sul</option>";
                        echo "<option value='MG'>Minas Gerais</option>";
                        echo "<option value='PA'>Pará</option>";
                        echo "<option value='PB'>Paraíba</option>";
                        echo "<option value='PR'>Paraná</option>";
                        echo "<option value='PE'>Pernambuco</option>";
                        echo "<option value='PI'>Piauí</option>";
                        echo "<option value='RJ'>Rio de Janeito</option>";
                        echo "<option value='RN'>Rio Grande do Norte</option>";
                        echo "<option value='RS'>Rio Grande do Sul</option>";
                        echo "<option value='RO'>Rondônia</option>";
                        echo "<option value='RR'>Roraima</option>";
                        echo "<option value='SC'>Santa Catarina</option>";
                        echo "<option value='SP'>São Paulo</option>";
                        echo "<option value='SE'>Sergipe</option>";
                        echo "<option value='TO'>Tocantins</option>";
                    break;
                    case "GO":
                        echo "<option value='AC'>Acre</option>";
                        echo "<option  value='AL'>Alagoas</option>";
                        echo "<option  value='AP'>Amapá</option>";
                        echo "<option   value='AM'>Amazonas</option>";
                        echo "<option  value='BA'>Bahia</option>";
                        echo "<option  value='CE'>Ceará</option>";
                        echo "<option  value='DF'>Distrito Federal</option>";
                        echo "<option  value='ES'>Espírito Santo</option>";
                        echo "<option  selected value='GO'>Goiás</option>";
                        echo "<option value='MA'>Maranhão</option>";
                        echo "<option value='MT'>Mato Grosso</option>";
                        echo "<option value='MS'>Mato Grosso do Sul</option>";
                        echo "<option value='MG'>Minas Gerais</option>";
                        echo "<option value='PA'>Pará</option>";
                        echo "<option value='PB'>Paraíba</option>";
                        echo "<option value='PR'>Paraná</option>";
                        echo "<option value='PE'>Pernambuco</option>";
                        echo "<option value='PI'>Piauí</option>";
                        echo "<option value='RJ'>Rio de Janeito</option>";
                        echo "<option value='RN'>Rio Grande do Norte</option>";
                        echo "<option value='RS'>Rio Grande do Sul</option>";
                        echo "<option value='RO'>Rondônia</option>";
                        echo "<option value='RR'>Roraima</option>";
                        echo "<option value='SC'>Santa Catarina</option>";
                        echo "<option value='SP'>São Paulo</option>";
                        echo "<option value='SE'>Sergipe</option>";
                        echo "<option value='TO'>Tocantins</option>";
                    break;
                    case "MA":
                        echo "<option value='AC'>Acre</option>";
                        echo "<option  value='AL'>Alagoas</option>";
                        echo "<option  value='AP'>Amapá</option>";
                        echo "<option   value='AM'>Amazonas</option>";
                        echo "<option  value='BA'>Bahia</option>";
                        echo "<option  value='CE'>Ceará</option>";
                        echo "<option  value='DF'>Distrito Federal</option>";
                        echo "<option  value='ES'>Espírito Santo</option>";
                        echo "<option   value='GO'>Goiás</option>";
                        echo "<option selected value='MA'>Maranhão</option>";
                        echo "<option value='MT'>Mato Grosso</option>";
                        echo "<option value='MS'>Mato Grosso do Sul</option>";
                        echo "<option value='MG'>Minas Gerais</option>";
                        echo "<option value='PA'>Pará</option>";
                        echo "<option value='PB'>Paraíba</option>";
                        echo "<option value='PR'>Paraná</option>";
                        echo "<option value='PE'>Pernambuco</option>";
                        echo "<option value='PI'>Piauí</option>";
                        echo "<option value='RJ'>Rio de Janeito</option>";
                        echo "<option value='RN'>Rio Grande do Norte</option>";
                        echo "<option value='RS'>Rio Grande do Sul</option>";
                        echo "<option value='RO'>Rondônia</option>";
                        echo "<option value='RR'>Roraima</option>";
                        echo "<option value='SC'>Santa Catarina</option>";
                        echo "<option value='SP'>São Paulo</option>";
                        echo "<option value='SE'>Sergipe</option>";
                        echo "<option value='TO'>Tocantins</option>";
                    break;
                    case "MT":
                        echo "<option value='AC'>Acre</option>";
                        echo "<option  value='AL'>Alagoas</option>";
                        echo "<option  value='AP'>Amapá</option>";
                        echo "<option   value='AM'>Amazonas</option>";
                        echo "<option  value='BA'>Bahia</option>";
                        echo "<option  value='CE'>Ceará</option>";
                        echo "<option  value='DF'>Distrito Federal</option>";
                        echo "<option  value='ES'>Espírito Santo</option>";
                        echo "<option   value='GO'>Goiás</option>";
                        echo "<option  value='MA'>Maranhão</option>";
                        echo "<option  selected value='MT'>Mato Grosso</option>";
                        echo "<option value='MS'>Mato Grosso do Sul</option>";
                        echo "<option value='MG'>Minas Gerais</option>";
                        echo "<option value='PA'>Pará</option>";
                        echo "<option value='PB'>Paraíba</option>";
                        echo "<option value='PR'>Paraná</option>";
                        echo "<option value='PE'>Pernambuco</option>";
                        echo "<option value='PI'>Piauí</option>";
                        echo "<option value='RJ'>Rio de Janeito</option>";
                        echo "<option value='RN'>Rio Grande do Norte</option>";
                        echo "<option value='RS'>Rio Grande do Sul</option>";
                        echo "<option value='RO'>Rondônia</option>";
                        echo "<option value='RR'>Roraima</option>";
                        echo "<option value='SC'>Santa Catarina</option>";
                        echo "<option value='SP'>São Paulo</option>";
                        echo "<option value='SE'>Sergipe</option>";
                        echo "<option value='TO'>Tocantins</option>";
                    break;
                    case "MS":
                        echo "<option value='AC'>Acre</option>";
                        echo "<option  value='AL'>Alagoas</option>";
                        echo "<option  value='AP'>Amapá</option>";
                        echo "<option   value='AM'>Amazonas</option>";
                        echo "<option  value='BA'>Bahia</option>";
                        echo "<option  value='CE'>Ceará</option>";
                        echo "<option  value='DF'>Distrito Federal</option>";
                        echo "<option  value='ES'>Espírito Santo</option>";
                        echo "<option   value='GO'>Goiás</option>";
                        echo "<option  value='MA'>Maranhão</option>";
                        echo "<option   value='MT'>Mato Grosso</option>";
                        echo "<option selected value='MS'>Mato Grosso do Sul</option>";
                        echo "<option value='MG'>Minas Gerais</option>";
                        echo "<option value='PA'>Pará</option>";
                        echo "<option value='PB'>Paraíba</option>";
                        echo "<option value='PR'>Paraná</option>";
                        echo "<option value='PE'>Pernambuco</option>";
                        echo "<option value='PI'>Piauí</option>";
                        echo "<option value='RJ'>Rio de Janeito</option>";
                        echo "<option value='RN'>Rio Grande do Norte</option>";
                        echo "<option value='RS'>Rio Grande do Sul</option>";
                        echo "<option value='RO'>Rondônia</option>";
                        echo "<option value='RR'>Roraima</option>";
                        echo "<option value='SC'>Santa Catarina</option>";
                        echo "<option value='SP'>São Paulo</option>";
                        echo "<option value='SE'>Sergipe</option>";
                        echo "<option value='TO'>Tocantins</option>";
                    break;
                    case "MG":
                        echo "<option value='AC'>Acre</option>";
                        echo "<option  value='AL'>Alagoas</option>";
                        echo "<option  value='AP'>Amapá</option>";
                        echo "<option   value='AM'>Amazonas</option>";
                        echo "<option  value='BA'>Bahia</option>";
                        echo "<option  value='CE'>Ceará</option>";
                        echo "<option  value='DF'>Distrito Federal</option>";
                        echo "<option  value='ES'>Espírito Santo</option>";
                        echo "<option   value='GO'>Goiás</option>";
                        echo "<option  value='MA'>Maranhão</option>";
                        echo "<option   value='MT'>Mato Grosso</option>";
                        echo "<option  value='MS'>Mato Grosso do Sul</option>";
                        echo "<option selected value='MG'>Minas Gerais</option>";
                        echo "<option value='PA'>Pará</option>";
                        echo "<option value='PB'>Paraíba</option>";
                        echo "<option value='PR'>Paraná</option>";
                        echo "<option value='PE'>Pernambuco</option>";
                        echo "<option value='PI'>Piauí</option>";
                        echo "<option value='RJ'>Rio de Janeito</option>";
                        echo "<option value='RN'>Rio Grande do Norte</option>";
                        echo "<option value='RS'>Rio Grande do Sul</option>";
                        echo "<option value='RO'>Rondônia</option>";
                        echo "<option value='RR'>Roraima</option>";
                        echo "<option value='SC'>Santa Catarina</option>";
                        echo "<option value='SP'>São Paulo</option>";
                        echo "<option value='SE'>Sergipe</option>";
                        echo "<option value='TO'>Tocantins</option>";
                    break;
                    case "PA":
                        echo "<option value='AC'>Acre</option>";
                        echo "<option  value='AL'>Alagoas</option>";
                        echo "<option  value='AP'>Amapá</option>";
                        echo "<option   value='AM'>Amazonas</option>";
                        echo "<option  value='BA'>Bahia</option>";
                        echo "<option  value='CE'>Ceará</option>";
                        echo "<option  value='DF'>Distrito Federal</option>";
                        echo "<option  value='ES'>Espírito Santo</option>";
                        echo "<option   value='GO'>Goiás</option>";
                        echo "<option  value='MA'>Maranhão</option>";
                        echo "<option   value='MT'>Mato Grosso</option>";
                        echo "<option  value='MS'>Mato Grosso do Sul</option>";
                        echo "<option  value='MG'>Minas Gerais</option>";
                        echo "<option selected value='PA'>Pará</option>";
                        echo "<option value='PB'>Paraíba</option>";
                        echo "<option value='PR'>Paraná</option>";
                        echo "<option value='PE'>Pernambuco</option>";
                        echo "<option value='PI'>Piauí</option>";
                        echo "<option value='RJ'>Rio de Janeito</option>";
                        echo "<option value='RN'>Rio Grande do Norte</option>";
                        echo "<option value='RS'>Rio Grande do Sul</option>";
                        echo "<option value='RO'>Rondônia</option>";
                        echo "<option value='RR'>Roraima</option>";
                        echo "<option value='SC'>Santa Catarina</option>";
                        echo "<option value='SP'>São Paulo</option>";
                        echo "<option value='SE'>Sergipe</option>";
                        echo "<option value='TO'>Tocantins</option>";
                    break;
                    case "PB":
                        echo "<option value='AC'>Acre</option>";
                        echo "<option  value='AL'>Alagoas</option>";
                        echo "<option  value='AP'>Amapá</option>";
                        echo "<option   value='AM'>Amazonas</option>";
                        echo "<option  value='BA'>Bahia</option>";
                        echo "<option  value='CE'>Ceará</option>";
                        echo "<option  value='DF'>Distrito Federal</option>";
                        echo "<option  value='ES'>Espírito Santo</option>";
                        echo "<option   value='GO'>Goiás</option>";
                        echo "<option  value='MA'>Maranhão</option>";
                        echo "<option   value='MT'>Mato Grosso</option>";
                        echo "<option  value='MS'>Mato Grosso do Sul</option>";
                        echo "<option  value='MG'>Minas Gerais</option>";
                        echo "<option  value='PA'>Pará</option>";
                        echo "<option  selected value='PB'>Paraíba</option>";
                        echo "<option value='PR'>Paraná</option>";
                        echo "<option value='PE'>Pernambuco</option>";
                        echo "<option value='PI'>Piauí</option>";
                        echo "<option value='RJ'>Rio de Janeito</option>";
                        echo "<option value='RN'>Rio Grande do Norte</option>";
                        echo "<option value='RS'>Rio Grande do Sul</option>";
                        echo "<option value='RO'>Rondônia</option>";
                        echo "<option value='RR'>Roraima</option>";
                        echo "<option value='SC'>Santa Catarina</option>";
                        echo "<option value='SP'>São Paulo</option>";
                        echo "<option value='SE'>Sergipe</option>";
                        echo "<option value='TO'>Tocantins</option>";
                    break;
                    case "PR":
                        echo "<option value='AC'>Acre</option>";
                        echo "<option  value='AL'>Alagoas</option>";
                        echo "<option  value='AP'>Amapá</option>";
                        echo "<option   value='AM'>Amazonas</option>";
                        echo "<option  value='BA'>Bahia</option>";
                        echo "<option  value='CE'>Ceará</option>";
                        echo "<option  value='DF'>Distrito Federal</option>";
                        echo "<option  value='ES'>Espírito Santo</option>";
                        echo "<option   value='GO'>Goiás</option>";
                        echo "<option  value='MA'>Maranhão</option>";
                        echo "<option   value='MT'>Mato Grosso</option>";
                        echo "<option  value='MS'>Mato Grosso do Sul</option>";
                        echo "<option  value='MG'>Minas Gerais</option>";
                        echo "<option  value='PA'>Pará</option>";
                        echo "<option   value='PB'>Paraíba</option>";
                        echo "<option selected value='PR'>Paraná</option>";
                        echo "<option value='PE'>Pernambuco</option>";
                        echo "<option value='PI'>Piauí</option>";
                        echo "<option value='RJ'>Rio de Janeito</option>";
                        echo "<option value='RN'>Rio Grande do Norte</option>";
                        echo "<option value='RS'>Rio Grande do Sul</option>";
                        echo "<option value='RO'>Rondônia</option>";
                        echo "<option value='RR'>Roraima</option>";
                        echo "<option value='SC'>Santa Catarina</option>";
                        echo "<option value='SP'>São Paulo</option>";
                        echo "<option value='SE'>Sergipe</option>";
                        echo "<option value='TO'>Tocantins</option>";
                    break;
                    case "PE":
                        echo "<option value='AC'>Acre</option>";
                        echo "<option  value='AL'>Alagoas</option>";
                        echo "<option  value='AP'>Amapá</option>";
                        echo "<option   value='AM'>Amazonas</option>";
                        echo "<option  value='BA'>Bahia</option>";
                        echo "<option  value='CE'>Ceará</option>";
                        echo "<option  value='DF'>Distrito Federal</option>";
                        echo "<option  value='ES'>Espírito Santo</option>";
                        echo "<option   value='GO'>Goiás</option>";
                        echo "<option  value='MA'>Maranhão</option>";
                        echo "<option   value='MT'>Mato Grosso</option>";
                        echo "<option  value='MS'>Mato Grosso do Sul</option>";
                        echo "<option  value='MG'>Minas Gerais</option>";
                        echo "<option  value='PA'>Pará</option>";
                        echo "<option   value='PB'>Paraíba</option>";
                        echo "<option  value='PR'>Paraná</option>";
                        echo "<option  selected value='PE'>Pernambuco</option>";
                        echo "<option value='PI'>Piauí</option>";
                        echo "<option value='RJ'>Rio de Janeito</option>";
                        echo "<option value='RN'>Rio Grande do Norte</option>";
                        echo "<option value='RS'>Rio Grande do Sul</option>";
                        echo "<option value='RO'>Rondônia</option>";
                        echo "<option value='RR'>Roraima</option>";
                        echo "<option value='SC'>Santa Catarina</option>";
                        echo "<option value='SP'>São Paulo</option>";
                        echo "<option value='SE'>Sergipe</option>";
                        echo "<option value='TO'>Tocantins</option>";
                    break;
                    case "PI":
                        echo "<option value='AC'>Acre</option>";
                        echo "<option  value='AL'>Alagoas</option>";
                        echo "<option  value='AP'>Amapá</option>";
                        echo "<option   value='AM'>Amazonas</option>";
                        echo "<option  value='BA'>Bahia</option>";
                        echo "<option  value='CE'>Ceará</option>";
                        echo "<option  value='DF'>Distrito Federal</option>";
                        echo "<option  value='ES'>Espírito Santo</option>";
                        echo "<option   value='GO'>Goiás</option>";
                        echo "<option  value='MA'>Maranhão</option>";
                        echo "<option   value='MT'>Mato Grosso</option>";
                        echo "<option  value='MS'>Mato Grosso do Sul</option>";
                        echo "<option  value='MG'>Minas Gerais</option>";
                        echo "<option  value='PA'>Pará</option>";
                        echo "<option   value='PB'>Paraíba</option>";
                        echo "<option  value='PR'>Paraná</option>";
                        echo "<option   value='PE'>Pernambuco</option>";
                        echo "<option selected value='PI'>Piauí</option>";
                        echo "<option value='RJ'>Rio de Janeito</option>";
                        echo "<option value='RN'>Rio Grande do Norte</option>";
                        echo "<option value='RS'>Rio Grande do Sul</option>";
                        echo "<option value='RO'>Rondônia</option>";
                        echo "<option value='RR'>Roraima</option>";
                        echo "<option value='SC'>Santa Catarina</option>";
                        echo "<option value='SP'>São Paulo</option>";
                        echo "<option value='SE'>Sergipe</option>";
                        echo "<option value='TO'>Tocantins</option>";
                    break;
                    case "RJ":
                        echo "<option value='AC'>Acre</option>";
                        echo "<option  value='AL'>Alagoas</option>";
                        echo "<option  value='AP'>Amapá</option>";
                        echo "<option   value='AM'>Amazonas</option>";
                        echo "<option  value='BA'>Bahia</option>";
                        echo "<option  value='CE'>Ceará</option>";
                        echo "<option  value='DF'>Distrito Federal</option>";
                        echo "<option  value='ES'>Espírito Santo</option>";
                        echo "<option   value='GO'>Goiás</option>";
                        echo "<option  value='MA'>Maranhão</option>";
                        echo "<option   value='MT'>Mato Grosso</option>";
                        echo "<option  value='MS'>Mato Grosso do Sul</option>";
                        echo "<option  value='MG'>Minas Gerais</option>";
                        echo "<option  value='PA'>Pará</option>";
                        echo "<option   value='PB'>Paraíba</option>";
                        echo "<option  value='PR'>Paraná</option>";
                        echo "<option   value='PE'>Pernambuco</option>";
                        echo "<option  value='PI'>Piauí</option>";
                        echo "<option  selected value='RJ'>Rio de Janeito</option>";
                        echo "<option value='RN'>Rio Grande do Norte</option>";
                        echo "<option value='RS'>Rio Grande do Sul</option>";
                        echo "<option value='RO'>Rondônia</option>";
                        echo "<option value='RR'>Roraima</option>";
                        echo "<option value='SC'>Santa Catarina</option>";
                        echo "<option value='SP'>São Paulo</option>";
                        echo "<option value='SE'>Sergipe</option>";
                        echo "<option value='TO'>Tocantins</option>";
                    break;
                    case "RN":
                        echo "<option value='AC'>Acre</option>";
                        echo "<option  value='AL'>Alagoas</option>";
                        echo "<option  value='AP'>Amapá</option>";
                        echo "<option   value='AM'>Amazonas</option>";
                        echo "<option  value='BA'>Bahia</option>";
                        echo "<option  value='CE'>Ceará</option>";
                        echo "<option  value='DF'>Distrito Federal</option>";
                        echo "<option  value='ES'>Espírito Santo</option>";
                        echo "<option   value='GO'>Goiás</option>";
                        echo "<option  value='MA'>Maranhão</option>";
                        echo "<option   value='MT'>Mato Grosso</option>";
                        echo "<option  value='MS'>Mato Grosso do Sul</option>";
                        echo "<option  value='MG'>Minas Gerais</option>";
                        echo "<option  value='PA'>Pará</option>";
                        echo "<option   value='PB'>Paraíba</option>";
                        echo "<option  value='PR'>Paraná</option>";
                        echo "<option   value='PE'>Pernambuco</option>";
                        echo "<option  value='PI'>Piauí</option>";
                        echo "<option   value='RJ'>Rio de Janeito</option>";
                        echo "<option selected value='RN'>Rio Grande do Norte</option>";
                        echo "<option value='RS'>Rio Grande do Sul</option>";
                        echo "<option value='RO'>Rondônia</option>";
                        echo "<option value='RR'>Roraima</option>";
                        echo "<option value='SC'>Santa Catarina</option>";
                        echo "<option value='SP'>São Paulo</option>";
                        echo "<option value='SE'>Sergipe</option>";
                        echo "<option value='TO'>Tocantins</option>";
                    break;
                    case "RS":
                        echo "<option value='AC'>Acre</option>";
                        echo "<option  value='AL'>Alagoas</option>";
                        echo "<option  value='AP'>Amapá</option>";
                        echo "<option   value='AM'>Amazonas</option>";
                        echo "<option  value='BA'>Bahia</option>";
                        echo "<option  value='CE'>Ceará</option>";
                        echo "<option  value='DF'>Distrito Federal</option>";
                        echo "<option  value='ES'>Espírito Santo</option>";
                        echo "<option   value='GO'>Goiás</option>";
                        echo "<option  value='MA'>Maranhão</option>";
                        echo "<option   value='MT'>Mato Grosso</option>";
                        echo "<option  value='MS'>Mato Grosso do Sul</option>";
                        echo "<option  value='MG'>Minas Gerais</option>";
                        echo "<option  value='PA'>Pará</option>";
                        echo "<option   value='PB'>Paraíba</option>";
                        echo "<option  value='PR'>Paraná</option>";
                        echo "<option   value='PE'>Pernambuco</option>";
                        echo "<option  value='PI'>Piauí</option>";
                        echo "<option   value='RJ'>Rio de Janeito</option>";
                        echo "<option  value='RN'>Rio Grande do Norte</option>";
                        echo "<option selected value='RS'>Rio Grande do Sul</option>";
                        echo "<option value='RO'>Rondônia</option>";
                        echo "<option value='RR'>Roraima</option>";
                        echo "<option value='SC'>Santa Catarina</option>";
                        echo "<option value='SP'>São Paulo</option>";
                        echo "<option value='SE'>Sergipe</option>";
                        echo "<option value='TO'>Tocantins</option>";
                    break;
                    case "RO":
                        echo "<option value='AC'>Acre</option>";
                        echo "<option  value='AL'>Alagoas</option>";
                        echo "<option  value='AP'>Amapá</option>";
                        echo "<option   value='AM'>Amazonas</option>";
                        echo "<option  value='BA'>Bahia</option>";
                        echo "<option  value='CE'>Ceará</option>";
                        echo "<option  value='DF'>Distrito Federal</option>";
                        echo "<option  value='ES'>Espírito Santo</option>";
                        echo "<option   value='GO'>Goiás</option>";
                        echo "<option  value='MA'>Maranhão</option>";
                        echo "<option   value='MT'>Mato Grosso</option>";
                        echo "<option  value='MS'>Mato Grosso do Sul</option>";
                        echo "<option  value='MG'>Minas Gerais</option>";
                        echo "<option  value='PA'>Pará</option>";
                        echo "<option   value='PB'>Paraíba</option>";
                        echo "<option  value='PR'>Paraná</option>";
                        echo "<option   value='PE'>Pernambuco</option>";
                        echo "<option  value='PI'>Piauí</option>";
                        echo "<option   value='RJ'>Rio de Janeito</option>";
                        echo "<option  value='RN'>Rio Grande do Norte</option>";
                        echo "<option  value='RS'>Rio Grande do Sul</option>";
                        echo "<option selected value='RO'>Rondônia</option>";
                        echo "<option value='RR'>Roraima</option>";
                        echo "<option value='SC'>Santa Catarina</option>";
                        echo "<option value='SP'>São Paulo</option>";
                        echo "<option value='SE'>Sergipe</option>";
                        echo "<option value='TO'>Tocantins</option>";
                    break;
                    case "RR":
                        echo "<option value='AC'>Acre</option>";
                        echo "<option  value='AL'>Alagoas</option>";
                        echo "<option  value='AP'>Amapá</option>";
                        echo "<option   value='AM'>Amazonas</option>";
                        echo "<option  value='BA'>Bahia</option>";
                        echo "<option  value='CE'>Ceará</option>";
                        echo "<option  value='DF'>Distrito Federal</option>";
                        echo "<option  value='ES'>Espírito Santo</option>";
                        echo "<option   value='GO'>Goiás</option>";
                        echo "<option  value='MA'>Maranhão</option>";
                        echo "<option   value='MT'>Mato Grosso</option>";
                        echo "<option  value='MS'>Mato Grosso do Sul</option>";
                        echo "<option  value='MG'>Minas Gerais</option>";
                        echo "<option  value='PA'>Pará</option>";
                        echo "<option   value='PB'>Paraíba</option>";
                        echo "<option  value='PR'>Paraná</option>";
                        echo "<option   value='PE'>Pernambuco</option>";
                        echo "<option  value='PI'>Piauí</option>";
                        echo "<option   value='RJ'>Rio de Janeito</option>";
                        echo "<option  value='RN'>Rio Grande do Norte</option>";
                        echo "<option  value='RS'>Rio Grande do Sul</option>";
                        echo "<option  value='RO'>Rondônia</option>";
                        echo "<option selected value='RR'>Roraima</option>";
                        echo "<option value='SC'>Santa Catarina</option>";
                        echo "<option value='SP'>São Paulo</option>";
                        echo "<option value='SE'>Sergipe</option>";
                        echo "<option value='TO'>Tocantins</option>";
                    break;
                    case "SC":
                        echo "<option value='AC'>Acre</option>";
                        echo "<option  value='AL'>Alagoas</option>";
                        echo "<option  value='AP'>Amapá</option>";
                        echo "<option   value='AM'>Amazonas</option>";
                        echo "<option  value='BA'>Bahia</option>";
                        echo "<option  value='CE'>Ceará</option>";
                        echo "<option  value='DF'>Distrito Federal</option>";
                        echo "<option  value='ES'>Espírito Santo</option>";
                        echo "<option   value='GO'>Goiás</option>";
                        echo "<option  value='MA'>Maranhão</option>";
                        echo "<option   value='MT'>Mato Grosso</option>";
                        echo "<option  value='MS'>Mato Grosso do Sul</option>";
                        echo "<option  value='MG'>Minas Gerais</option>";
                        echo "<option  value='PA'>Pará</option>";
                        echo "<option   value='PB'>Paraíba</option>";
                        echo "<option  value='PR'>Paraná</option>";
                        echo "<option   value='PE'>Pernambuco</option>";
                        echo "<option  value='PI'>Piauí</option>";
                        echo "<option   value='RJ'>Rio de Janeito</option>";
                        echo "<option  value='RN'>Rio Grande do Norte</option>";
                        echo "<option  value='RS'>Rio Grande do Sul</option>";
                        echo "<option  value='RO'>Rondônia</option>";
                        echo "<option  value='RR'>Roraima</option>";
                        echo "<option selected value='SC'>Santa Catarina</option>";
                        echo "<option value='SP'>São Paulo</option>";
                        echo "<option value='SE'>Sergipe</option>";
                        echo "<option value='TO'>Tocantins</option>";
                    break;
                    case "SP":
                        echo "<option value='AC'>Acre</option>";
                        echo "<option  value='AL'>Alagoas</option>";
                        echo "<option  value='AP'>Amapá</option>";
                        echo "<option   value='AM'>Amazonas</option>";
                        echo "<option  value='BA'>Bahia</option>";
                        echo "<option  value='CE'>Ceará</option>";
                        echo "<option  value='DF'>Distrito Federal</option>";
                        echo "<option  value='ES'>Espírito Santo</option>";
                        echo "<option   value='GO'>Goiás</option>";
                        echo "<option  value='MA'>Maranhão</option>";
                        echo "<option   value='MT'>Mato Grosso</option>";
                        echo "<option  value='MS'>Mato Grosso do Sul</option>";
                        echo "<option  value='MG'>Minas Gerais</option>";
                        echo "<option  value='PA'>Pará</option>";
                        echo "<option   value='PB'>Paraíba</option>";
                        echo "<option  value='PR'>Paraná</option>";
                        echo "<option   value='PE'>Pernambuco</option>";
                        echo "<option  value='PI'>Piauí</option>";
                        echo "<option   value='RJ'>Rio de Janeito</option>";
                        echo "<option  value='RN'>Rio Grande do Norte</option>";
                        echo "<option  value='RS'>Rio Grande do Sul</option>";
                        echo "<option  value='RO'>Rondônia</option>";
                        echo "<option  value='RR'>Roraima</option>";
                        echo "<option  value='SC'>Santa Catarina</option>";
                        echo "<option  selected value='SP'>São Paulo</option>";
                        echo "<option value='SE'>Sergipe</option>";
                        echo "<option value='TO'>Tocantins</option>";
                    break;
                    case "SE":
                        echo "<option value='AC'>Acre</option>";
                        echo "<option  value='AL'>Alagoas</option>";
                        echo "<option  value='AP'>Amapá</option>";
                        echo "<option   value='AM'>Amazonas</option>";
                        echo "<option  value='BA'>Bahia</option>";
                        echo "<option  value='CE'>Ceará</option>";
                        echo "<option  value='DF'>Distrito Federal</option>";
                        echo "<option  value='ES'>Espírito Santo</option>";
                        echo "<option   value='GO'>Goiás</option>";
                        echo "<option  value='MA'>Maranhão</option>";
                        echo "<option   value='MT'>Mato Grosso</option>";
                        echo "<option  value='MS'>Mato Grosso do Sul</option>";
                        echo "<option  value='MG'>Minas Gerais</option>";
                        echo "<option  value='PA'>Pará</option>";
                        echo "<option   value='PB'>Paraíba</option>";
                        echo "<option  value='PR'>Paraná</option>";
                        echo "<option   value='PE'>Pernambuco</option>";
                        echo "<option  value='PI'>Piauí</option>";
                        echo "<option   value='RJ'>Rio de Janeito</option>";
                        echo "<option  value='RN'>Rio Grande do Norte</option>";
                        echo "<option  value='RS'>Rio Grande do Sul</option>";
                        echo "<option  value='RO'>Rondônia</option>";
                        echo "<option  value='RR'>Roraima</option>";
                        echo "<option  value='SC'>Santa Catarina</option>";
                        echo "<option   value='SP'>São Paulo</option>";
                        echo "<option selected value='SE'>Sergipe</option>";
                        echo "<option value='TO'>Tocantins</option>";
                    break;
                    case "TO":
                        echo "<option value='AC'>Acre</option>";
                        echo "<option  value='AL'>Alagoas</option>";
                        echo "<option  value='AP'>Amapá</option>";
                        echo "<option   value='AM'>Amazonas</option>";
                        echo "<option  value='BA'>Bahia</option>";
                        echo "<option  value='CE'>Ceará</option>";
                        echo "<option  value='DF'>Distrito Federal</option>";
                        echo "<option  value='ES'>Espírito Santo</option>";
                        echo "<option   value='GO'>Goiás</option>";
                        echo "<option  value='MA'>Maranhão</option>";
                        echo "<option   value='MT'>Mato Grosso</option>";
                        echo "<option  value='MS'>Mato Grosso do Sul</option>";
                        echo "<option  value='MG'>Minas Gerais</option>";
                        echo "<option  value='PA'>Pará</option>";
                        echo "<option   value='PB'>Paraíba</option>";
                        echo "<option  value='PR'>Paraná</option>";
                        echo "<option   value='PE'>Pernambuco</option>";
                        echo "<option  value='PI'>Piauí</option>";
                        echo "<option   value='RJ'>Rio de Janeito</option>";
                        echo "<option  value='RN'>Rio Grande do Norte</option>";
                        echo "<option  value='RS'>Rio Grande do Sul</option>";
                        echo "<option  value='RO'>Rondônia</option>";
                        echo "<option  value='RR'>Roraima</option>";
                        echo "<option  value='SC'>Santa Catarina</option>";
                        echo "<option   value='SP'>São Paulo</option>";
                        echo "<option  value='SE'>Sergipe</option>";
                        echo "<option selected value='TO'>Tocantins</option>";
                    break;
                }
            echo "</select>";
            ?>
            
        </div>
        <div>
            <label for="fone">Telefone</label>
            <input type="tel" name="fone" id="fone" 
            placeholder="Formato (99) 9999-9999"
            pattern="\([0-9]{2}\)([9]{1})?[0-9]{4}-[0-9]{4}" value="<?php echo $row['telefone']?>">
        </div>
        <div>
            <label for="celular">Celular</label>
            <input type="tel" name="celular" id="celular" 
            placeholder="Formato (99) 9999-9999"
            pattern="\([0-9]{2}\)([9]{1})?[0-9]{4}-[0-9]{4}" value="<?php echo $row['celular']?>">
        </div>
        <div>
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" value="<?php echo $row['email']?>">
        </div>
        <div>
            <img src="<?php echo $row['foto_agenda'] ?> " width='80' height='100'>
            <input type="file" name="foto" id="foto" accept="image/*" value="<?php $row['foto_agenda'] ?>">
        </div>
        <label for="data_cadastro">Data do Cadastro</label>
        <input type="text" name="data_cadastro" value="<?php echo $row['dt_cadastro']?>" readonly="true">

        <input type="submit" value="Salvar">

    </form>
</body>
</html>