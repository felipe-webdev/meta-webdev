<?php
/* EXECUTAR OPERAÇÃO APÓS CONFIRMAÇÃO */
if(isset($_POST["id"]) && !empty($_POST["id"])){
  /* INCLUIR ARQUIVO DE CONFIGURAÇÃO */
  require_once "Conexao.php";
  
  /* PREPARAR COMANDO DELETE */
  $sql = "DELETE FROM funcionarios WHERE id = ?";
  
  if($stmt = $mysqli->prepare($sql)){
    /* VINCULAR VARIÁVEIS AO COMANDO COMO PARÂMETROS */
    $stmt->bind_param("i", $param_id);
    
    /* DEFINIR PARÂMETROS */
    $param_id = trim($_POST["id"]);
    
    /* EXECUTAR COMANDO DELETE */
    if($stmt->execute()){
      /* REGISTRO DELETADO COM SUCESSO. RETORNAR PARA A PÁGINA INICIAL */
      header("location: index.php");
      exit();
    } else{
      echo "Oops! Algo deu errado. Por favor tente novamente mais tarde.";
    }
  }
  
  /* FECHAR COMANDO */
  $stmt->close();
  
  /* FECHAR CONEXÃO */
  $mysqli->close();
} else{
  /* CHECAR EXISTÊNCIA DO PARÂMETRO ID */
  if(empty(trim($_GET["id"]))){
    /* URL NÃO CONTÉM O PARÂMETRO ID. REDIRECIONAR PARA A PÁGINA DE ERRO */
    header("location: error.php");
    exit();
  }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Deletar Funcionário</title>
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
    <img class="img-fluid" src="../../public/img/crud1.png">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <h2 class="mt-5 mb-3">Deletar Funcionário</h2>
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="alert alert-danger">
              <input type="hidden" name="id" value="<?php echo trim($_GET["id"]); ?>"/>
              <p>Tem certeza de que deseja deletar este funcionário?</p>
              <p>
                <input type="submit" value="Sim" class="btn btn-danger">
                <a href="index.php" class="btn btn-secondary ml-2">Não</a>
              </p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>