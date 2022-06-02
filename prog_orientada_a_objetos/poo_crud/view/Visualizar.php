<?php
  /* INCLUIR ARQUIVO DE CONFIGURAÇÃO */
  require_once "../core/Visualizar.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Visualizar Funcionário</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <style>
    .wrapper{
      width: 600px;
      margin: 0 auto;
    }
  </style>
</head>
<body>
  <div class="wrapper">
    <img class="img-fluid" src="../public/img/crud1.png">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <h2 class="mt-5 mb-3">Visualizar Funcionário</h2>
          <div class="form-group">
            <label>Nome</label>
            <p><b><?php echo $row["nome"]; ?></b></p>
          </div>
          <div class="form-group">
            <label>Endereço</label>
            <p><b><?php echo $row["endereco"]; ?></b></p>
          </div>
          <div class="form-group">
            <label>Salário</label>
            <p><b><?php echo $row["salario"]; ?></b></p>
          </div>
          <p><a href="../index.php" class="btn btn-primary">Voltar</a></p>
        </div>
      </div>
    </div>
  </div>
</body>
</html>