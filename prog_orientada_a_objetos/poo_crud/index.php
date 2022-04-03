<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Listar Funcionários</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <style>
    .wrapper{
      width: 600px;
      margin: 0 auto;
    }
    table tr td:last-child{
      width: 120px;
    }
  </style>
  <script>
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();   
    });
  </script>
</head>
<body>
  <div class="wrapper">
    <img class="img-fluid" src="public/img/crud1.png">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="mt-5 mb-3 clearfix">
            <h2 class="pull-left">Listar Funcionários</h2>
            <a href="core/class/Criar.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i>Adicionar Funcionário</a>
          </div>
          <?php
          // INCLUIR ARQUIVO DE CONEXÃO
          require_once "core/class/Conexao.php";
          
          // TENTATIVA DE SELECT
          $sql = "SELECT * FROM funcionarios";
          if($result = $mysqli->query($sql)){
            if($result->num_rows > 0){
              echo '<table class="table table-bordered table-striped">';
                echo "<thead>";
                  echo "<tr>";
                    echo "<th>#</th>";
                    echo "<th>Nome</th>";
                    echo "<th>Endereço</th>";
                    echo "<th>Salário</th>";
                    echo "<th>Ação</th>";
                  echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                while($row = $result->fetch_array()){
                  echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['nome'] . "</td>";
                    echo "<td>" . $row['endereco'] . "</td>";
                    echo "<td>" . $row['salario'] . "</td>";
                    echo "<td>";
                      echo '<a href="core/class/Visualizar.php?id='. $row['id'] .'" class="mr-3" title="Visualizar Registro" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                      echo '<a href="core/class/Atualizar.php?id='. $row['id'] .'" class="mr-3" title="Atualizar Registro" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                      echo '<a href="core/class/Deletar.php?id='. $row['id'] .'" title="Apagar Registro" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                    echo "</td>";
                  echo "</tr>";
                }
                echo "</tbody>";              
              echo "</table>";
              // LIBERAR RESULTADO
              $result->free();
            } else{
              echo '<div class="alert alert-danger"><em>Nenhum registro encontrado.</em></div>';
            }
          } else{
            echo "Oops! Algo deu errado. Tente novamente mais tarde.";
          }
          // FECHAR CONEXÃO
          $mysqli->close();
          ?>
        </div>
      </div>    
    </div>
  </div>
</body>
</html>