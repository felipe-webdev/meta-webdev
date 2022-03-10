<?php
/* INCLUIR ARQUIVO DE CONFIGURAÇÃO */
require_once "config.php";

/* DEFININDO VARIÁVEIS E ATRIBUINDO UMA STRING VAZIA */
$nome = $endereco = $salario = "";
$nome_err = $endereco_err = $salario_err = "";

/* PROCESSAMENTO DOS DADOS DO FORMULÁRIO */
if($_SERVER["REQUEST_METHOD"] == "POST"){
  /* VALIDAR NOME */
  $input_nome = trim($_POST["nome"]);
  if(empty($input_nome)){
    $nome_err = "Por favor informe um nome.";
  } elseif(!filter_var($input_nome, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
    $nome_err = "Por favor informe um nome válido.";
  } else{
    $nome = $input_nome;
  }
  
  /* VALIDAR ENDEREÇO */
  $input_endereco = trim($_POST["endereco"]);
  if(empty($input_endereco)){
    $endereco_err = "Por favor informe um endereço.";
  } else{
    $endereco = $input_endereco;
  }
  
  /* VALIDAR SALÁRIO */
  $input_salario = trim($_POST["salario"]);
  if(empty($input_salario)){
    $salario_err = "Por favor informe um valor de salário.";   
  } elseif(!ctype_digit($input_salario)){
    $salario_err = "Por favor informe um valor de salário positivo e inteiro.";
  } else{
    $salario = $input_salario;
  }
  
  /* CHECAR ERROS DE ENTRADA ANTES DE INSERIR NO BANCO DE DADOS */
  if(empty($nome_err) && empty($endereco_err) && empty($salario_err)){
    /* PREPARAR UM COMANDO DE INSERÇÃO */
    $sql = "INSERT INTO funcionarios (nome, endereco, salario) VALUES (?, ?, ?)";

    if($stmt = $mysqli->prepare($sql)){
      /* VINCULAR VARIÁVEIS AO COMANDO COMO PARÂMETROS */
      $stmt->bind_param("sss", $param_nome, $param_endereco, $param_salario);
      
      // DEFINIR PARÂMETROS
      $param_nome = $nome;
      $param_endereco = $endereco;
      $param_salario = $salario;
      
      /* TENTATIVA DE EXECUÇÃO DO COMANDO */
      if($stmt->execute()){
        /* REGISTRO CRIADO COM SUCESSO. REDIRECIONAR PARA PÁGINA INICIAL */
        header("location: index.php");
        exit();
      } else{
        echo "Oops! Algo deu errado. Tente novamente mais tarde.";
      }
    }
    
    /* FECHAR COMANDO */
    $stmt->close();
  }
  
  /* FECHAR CONEXÃO */
  $mysqli->close();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Adicionar Funcionário</title>
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
    <img class="img-fluid" src="public/img/crud1.png">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <h2 class="mt-5">Adicionar Funcionário</h2>
          <p>Por favor preencha este formulário para adicionar um funcionário ao banco de dados.</p>
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
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
            <input type="submit" class="btn btn-primary" value="Salvar">
            <a href="index.php" class="btn btn-secondary ml-2">Cancelar</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>