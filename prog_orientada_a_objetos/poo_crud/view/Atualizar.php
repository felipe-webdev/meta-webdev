<?php
/* INCLUIR ARQUIVO DE CONFIGURAÇÃO */
require_once "../core/Atualizar.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Atualizar Funcionário</title>
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
          <h2 class="mt-5">Atualizar Funcionário</h2>
          <p>Por favor edite os valores de entrada e aperte em Salvar para atualizar o funcionário.</p>
          <form action="../core/Atualizar.php" method="post">
          <?php //echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>
            <div class="form-group">
              <label>Nome</label>
              <input type="text" name="nome" class="form-control <?php echo (!empty($nome_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $nome; ?>">
              <span class="invalid-feedback"><?php echo $nome_err;?></span>
            </div>
            <div class="form-group">
              <label>Endereço</label>
              <textarea name="endereco" class="form-control <?php echo (!empty($endereco_err)) ? 'is-invalid' : ''; ?>"><?php echo $endereco; ?></textarea>
              <span class="invalid-feedback"><?php echo $endereco_err;?></span>
            </div>
            <div class="form-group">
              <label>Salário</label>
              <input type="text" name="salario" class="form-control <?php echo (!empty($salario_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $salario; ?>">
              <span class="invalid-feedback"><?php echo $salario_err;?></span>
            </div>
            <input type="hidden" name="id" value="<?php echo $id; ?>"/>
            <input type="submit" class="btn btn-primary" value="Salvar">
            <a href="../index.php" class="btn btn-secondary ml-2">Cancelar</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>