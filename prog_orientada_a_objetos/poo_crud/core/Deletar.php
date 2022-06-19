<?php 
  if (isset($_POST["id"]) && !empty($_POST["id"]) && isset($_POST["btn_deletar"])) {
    require_once "Conexao.php";

    $sql = "DELETE FROM funcionarios WHERE id = ?";

    if ($comando = $mysqli->prepare($sql)) {
      /* VINCULAR PARÂMETROS */
      $comando->bind_param("i", $parametro_id);
      $parametro_id = trim($_POST["id"]);

      if ($comando->execute()) {
        /* SUCESSO ... REDIRECIONAR PARA A LISTAGEM */
        header("location: ../view/Listar.php");
        exit();
      } else {
        echo "Oops! Algo deu errado. Tente novamente mais tarde.";
      }
    }
    /* ENCERRAR COMANDO STATEMENT */
    $comando->close();
    /* ENCERRAR CONEXÃO */
    $mysqli->close();
  } else if (empty(trim($_GET["id"]))) {
    /* URL NÃO CONTÉM O PARÂMETRO ID. REDIRECIONAR PARA A PÁGINA DE ERRO */
    header("location: ../view/Erro.php");
    exit();
  }
?>