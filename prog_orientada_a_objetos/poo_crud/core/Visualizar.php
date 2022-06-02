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
        header("location: ../view/Erro.php");
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
  header("location: ../view/Erro.php");
  exit();
}
?>