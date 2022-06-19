<?php require_once "../core/Cadastrar.php"; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Cadastrar Usuário</title>
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
    table tr td:last-child{
      width: 120px;
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
    if (isset($_SESSION["autenticado"]) && $_SESSION["autenticado"] === true) {
      require_once "../layout/nav_topo.php";
    }
  ?>
  <div class="wrapper">
    <div class="mt-5 mb-3 clearfix" id="form">
      <h2>Cadastrar Usuário</h2>
      <p>Preencha este formulário para cadastrar o usuário.</p>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <div class="form-group">
          <label for="nome">Nome</label>
          <input 
            class="form-control <?php if (!empty($nome_erro)) {echo('is-invalid');} ?>"
            name="nome"
            type="text"
            value="<?php echo($nome); ?>"
          >
          <span class="invalid-feedback"><?php echo($nome_erro); ?></span>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input 
            class="form-control <?php if (!empty($email_erro)) {echo('is-invalid');} ?>"
            name="email"
            type="email"
            value="<?php echo($email); ?>"
          >
          <span class="invalid-feedback"><?php echo($email_erro); ?></span>
        </div>
        <div class="form-group">
          <label for="senha">Senha</label>
          <input 
            class="form-control <?php if (!empty($senha_erro)) {echo('is-invalid');} ?>"
            name="senha"
            type="password"
            value="<?php echo($senha); ?>"
          >
          <span class="invalid-feedback"><?php echo($senha_erro); ?></span>
        </div>
        <div class="form-group mb-3">
          <label for="senha">Confirma senha</label>
          <input 
            class="form-control <?php if (!empty($confirma_senha_erro)) {echo('is-invalid');} ?>"
            name="confirma_senha"
            type="password"
            value="<?php echo($confirma_senha); ?>"
          >
          <span class="invalid-feedback"><?php echo($confirma_senha_erro); ?></span>
        </div>
        <div class="form-group">
          <input class="btn btn-primary" name="btn_cadastrar" type="submit" value="Cadastrar">
        </div>
      </form>
    </div>
  </div>
</body>
</html>