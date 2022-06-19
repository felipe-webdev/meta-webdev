<?php require_once "../core/Sessao.php"; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Painel de Controle</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
  <?php 
    $locais = [
      "Painel" => "#",
      "Perfil" => "#",
      "Atualizar_Cadastro" => "#",
      "Alterar_Senha" => "#",
      "Sair" => "../core/Sair.php"
    ];
    require_once "../layout/nav_topo.php";
  ?>
  <div class="container-md">
    <h2 class="mt-5 mb-3 clearfix">Painel de Controle</h2>
    <div class="row mb-3">
      <div class="col">
        <div class="card text-center">
          <!-- <img src="..." class="card-img-top" alt="..."> -->
          <div class="card-body">
            <h5 class="card-title">Funcionários</h5>
            <p class="card-text">
              <?php require_once "../core/Funcionarios_Cadastrados.php"; ?>
            </p>
            <a href="Listar.php" class="btn btn-primary">Listar Funcionários</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card text-center">
          <!-- <img src="..." class="card-img-top" alt="..."> -->
          <div class="card-body">
            <h5 class="card-title">Cadastro</h5>
            <p class="card-text">
              Cadastrar um novo Funcionário
            </p>
            <a href="Criar.php" class="btn btn-primary">Cadastrar Funcionário</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row mb-3">
      <div class="col">
        <div class="card text-center">
          <!-- <img src="..." class="card-img-top" alt="..."> -->
          <div class="card-body">
            <h5 class="card-title">Usuários</h5>
            <p class="card-text">
              <?php require_once "../core/Usuarios_Cadastrados.php"; ?>
            </p>
            <a href="#" class="btn btn-primary">Listar Usuários</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card text-center">
          <!-- <img src="..." class="card-img-top" alt="..."> -->
          <div class="card-body">
            <h5 class="card-title">Cadastro</h5>
            <p class="card-text">
              Cadastrar um novo Usuário
            </p>
            <a href="Cadastrar.php" class="btn btn-primary">Cadastrar Usuário</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>