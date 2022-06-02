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
      header("location: ../index.php");
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
    header("location: ../view/Erro.php");
    exit();
  }
}
?>