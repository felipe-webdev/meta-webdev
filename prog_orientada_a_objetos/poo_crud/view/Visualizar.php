<?php 
  require_once "../core/Sessao.php";
  require_once "../core/Visualizar.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Visualizar Funcionário</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <style>
    .wrapper{
      width: 600px;
      margin: 0 auto;
    }
  </style>
</head>
<body>
  <?php 
    $locais = [
      "Painel" => "Painel.php",
      "Perfil" => "#",
      "Atualizar_Cadastro" => "#",
      "Alterar_Senha" => "#",
      "Sair" => "../core/Sair.php"
    ];
    require_once "../layout/nav_topo.php";
  ?>
  <div class="wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <h2 class="mt-5 mb-3">Visualizar Funcionário</h2>
          <div class="form-group">
            <label>Nome</label>
            <p><b><?php echo $nome; ?></b></p>
          </div>
          <div class="form-group">
            <label>Endereço</label>
            <p><b><?php echo $endereco; ?></b></p>
          </div>
          <div class="form-group">
            <label>Cargo</label>
            <p><b><?php echo $cargo; ?></b></p>
          </div>
          <div class="form-group">
            <label>Salário</label>
            <p><b><?php echo $salario; ?></b></p>
          </div>
          <p><a href="Listar.php" class="btn btn-primary">Voltar</a></p>
        </div>
      </div>
    </div>
  </div>
</body>
</html>