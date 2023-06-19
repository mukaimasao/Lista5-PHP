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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <title>Document</title>
</head>
<body>
<header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container">
            <a class="navbar-brand" href="#">Meu Site</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
              <li class="nav-item">
                  <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="cadastro_agenda.html">Cadastrar</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="listar_agenda.php">Listar</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
    <h1 class="container">Alteração de Agendas - IFSP</h1>
    <form action="altera_agenda_exe.php" method="POST" enctype="multipart/form-data" class="container my-5">
        <input type="hidden" name="id_agenda" value="<?php echo $row['id_agenda']?>">
        <div class="row mt-3">
        <div class="col">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" value="<?php echo $row['nome']?>" class="form-control">
        </div>
        <div class="col">
            <label for="apelido">Apelido</label>
            <input type="text" name="apelido" id="apelido" value="<?php echo $row['apelido']?>" class="form-control">
        </div>
        </div>
        <div class="row mt-3">
        <div class="col">
            <label for="endereco">Endereço</label>
            <input type="text" name="endereco" id="endereco" value="<?php echo $row['endereco']?>" class="form-control">
        </div>
        <div class="col-4">
            <label for="bairro">Bairro</label>
            <input type="text" name="bairro" id="bairro" value="<?php echo $row['bairro']?>" class="form-control ">
        </div>
        </div>
        <div class="row mt-3">
        <div class="col">
            <label for="cidade">Cidade</label>
            <input type="text" name="cidade" id="cidade" value="<?php echo $row['cidade']?>" class="form-control">
        </div>
        <div class="col-2">
            <label for="estado">Estado</label>
            <?php 
                echo "<select name='estado' id='estado' size='1' class='form-select'>";
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
        </div>
        <div class="row mt-3">
        <div class="col">
            <label for="fone">Telefone</label>
            <input type="tel" name="fone" id="fone" 
            placeholder="Formato (99) 9999-9999"
            pattern="\([0-9]{2}\)([9]{1})?[0-9]{4}-[0-9]{4}" value="<?php echo $row['telefone']?>" class="form-control">
        </div>
        <div class="col">
            <label for="celular">Celular</label>
            <input type="tel" name="celular" id="celular" 
            placeholder="Formato (99) 9999-9999"
            pattern="\([0-9]{2}\)([9]{1})?[0-9]{4}-[0-9]{4}" value="<?php echo $row['celular']?>" class="form-control">
        </div>
        </div>
        
        <div class="row mt-3">
        <div class="col">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" value="<?php echo $row['email']?>" class="form-control">
        </div>
        </div>
        <div class="row mt-3">
        <div>
            <img src="<?php echo $row['foto_agenda'] ?> " width='80' height='100'>
            <input type="file" name="foto" id="foto" accept="image/*" value="<?php $row['foto_agenda'] ?>" class="form-control">
        </div>
        </div>
        <div class="row mt-3">
        <label for="data_cadastro">Data do Cadastro</label>
        <input type="text" name="data_cadastro" value="<?php echo $row['dt_cadastro']?>" readonly="true" class="form-control"><br>
        </div>
        

        <input type="submit" value="Salvar" class="btn btn-dark mt-3">

    </form>
    <footer class="footer bg-dark text-white text-center">
      <div class="container py-3">
        <span>© 2023 Meu Website. Todos os direitos reservados.</span>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>