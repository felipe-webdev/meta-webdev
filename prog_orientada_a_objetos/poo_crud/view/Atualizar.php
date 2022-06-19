<?php 
  require_once "../core/Sessao.php";
  require_once "../core/Atualizar.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Atualizar Funcionário</title>
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
          <h2 class="mt-5">Atualizar Funcionário</h2>
          <p>Por favor edite os valores de entrada e aperte em Salvar para atualizar o funcionário.</p>
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <?php //echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>
            <div class="form-group">
              <label>Nome</label>
              <input type="text" name="nome" class="form-control <?php echo (!empty($nome_erro)) ? 'is-invalid' : ''; ?>" value="<?php echo $nome; ?>">
              <span class="invalid-feedback"><?php echo $nome_erro;?></span>
            </div>
            <div class="form-group">
              <label>Endereço</label>
              <textarea name="endereco" class="form-control <?php echo (!empty($endereco_erro)) ? 'is-invalid' : ''; ?>"><?php echo $endereco; ?></textarea>
              <span class="invalid-feedback"><?php echo $endereco_erro;?></span>
            </div>
            <div class="form-group">
              <label>Cargo</label>
              <?php require_once "../core/Cargos.php"; ?>
            </div>
            <div class="form-group mb-3">
              <label>Salário</label>
              <input type="text" name="salario" class="form-control <?php echo (!empty($salario_erro)) ? 'is-invalid' : ''; ?>" value="<?php echo $salario; ?>">
              <span class="invalid-feedback"><?php echo $salario_erro;?></span>
            </div>
            <input type="hidden" name="id" value="<?php echo $id; ?>"/>
            <input type="submit" name="btn_atualizar" class="btn btn-primary" value="Salvar">
            <a href="Listar.php" class="btn btn-secondary ml-2">Cancelar</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>