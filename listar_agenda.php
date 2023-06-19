<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <title>Consulta de Agendas</title>
</head>
<body>
    <?php
        include('conexao.php');
        $sql = "SELECT * FROM agenda";
        /*mysqli_query consulta no banco de dados*/ 
        $result = mysqli_query($con, $sql);
        /*mysqli_fetch_array retorna apenas uma kinha dos registros */
        $row = mysqli_fetch_array($result);
    ?>
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
    <div class="container">
        <h1>Consulta de Agendas:</h1>
        <div class="table-responsive table-striped">
            <table class="table">
                <tr class="thead-dark">
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Foto</th>
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
                        echo "<td>".$row['id_agenda']."</td>";
                        echo "<td>".$row['nome']."</td>";
                        if($row['foto_agenda'] == ""){
                            echo "<td></td>";
                        }else{
                            echo "<td> <img src='".$row['foto_agenda'] ."' width='80' height='100'/></td>";
                        }
                        echo "<td>".$row['apelido']."</td>";
                        echo "<td>".$row['endereco']."</td>";
                        echo "<td>".$row['bairro']."</td>";
                        echo "<td>".$row['cidade']."</td>";
                        echo "<td>".$row['estado']."</td>";
                        echo "<td>".$row['telefone']."</td>";
                        echo "<td>".$row['celular']."</td>";
                        echo "<td>".$row['email']."</td>";
                        echo "<td>".$row['dt_cadastro']."</td>";
                        echo "<td> <a href='altera_agenda.php?id_agenda=".$row["id_agenda"]."'>Alterar</a> </td>";
                        echo "<td><a href='excluir_agenda.php?id_agenda=".$row["id_agenda"]."'>Deletar</a></td>";
                        echo"</tr>";
                    }while($row = mysqli_fetch_array($result))

                ?>
            </table>
        </div>
        <a href="index.php">Voltar</a>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>