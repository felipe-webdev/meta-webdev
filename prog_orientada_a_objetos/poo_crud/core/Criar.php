<?php
/* INCLUIR ARQUIVO DE CONFIGURAÇÃO */
require_once "Conexao.php";

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
        header("location: ../index.php");
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