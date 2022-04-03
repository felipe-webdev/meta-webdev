<?php
/* CHECAR A EXISTÊNCIA DO PARÂMETRO ID ANTES DE CONTINUAR O PROCESSO */
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
  /* INCLUIR ARQUIVO DE CONFIGURAÇÃO */
  require_once "Conexao.php";
  
  /* PREPARAR COMANDO SELECT */
  $sql = "SELECT * FROM funcionarios WHERE id = ?";
  
  if($stmt = $mysqli->prepare($sql)){
    /* VINCULAR VARIÁVEIS AO COMANDO COMO PARÂMETROS */
    $stmt->bind_param("i", $param_id);
    
    /* DEFINIR PARÂMETROS */
    $param_id = trim($_GET["id"]);
    
    /* TENTAR EXECUTAR O COMANDO */
    if($stmt->execute()){
      $result = $stmt->get_result();
      
      if($result->num_rows == 1){
        /* RETORNAR LINHA RESULTADO COMO UM ARRAY ASSOCIATIVO. JÁ QUE O RESULTSET POSSUI APENAS UMA LINHA, NÃO PRECISAMOS USAR UM WHILE LOOP */
        $row = $result->fetch_array(MYSQLI_ASSOC);
        
        /* OBTER VALORES INDIVIDUAIS DE CADA CAMPO */
        $name = $row["nome"];
        $address = $row["endereco"];
        $salary = $row["salario"];
      } else{
        /* SE A URL NÃO TIVER UM ID VÁLIDO. REDIRECIONE PARA A PÁGINA DE ERRO */
        header("location: error.php");
        exit();
      }
      
    } else{
      echo "Oops! Algo deu errado. Tente novamente mais tarde.";
    }
  }
  
  /* FECHAR COMANDO */
  $stmt->close();
  
  /* FECHAR CONEXÃO */
  $mysqli->close();
} else{
  /* SE A URL NÃO TIVER UM ID VÁLIDO. REDIRECIONE PARA A PÁGINA DE ERRO */
  header("location: error.php");
  exit();
}
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
    <img class="img-fluid" src="../../public/img/crud1.png">
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
          <p><a href="index.php" class="btn btn-primary">Voltar</a></p>
        </div>
      </div>
    </div>
  </div>
</body>
</html>