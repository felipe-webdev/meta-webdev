<?php 
  if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
    require_once "Conexao.php";

    $sql = "SELECT funcionarios.id, funcionarios.nome, funcionarios.endereco, funcionarios.salario, cargos.descricao 
            FROM funcionarios
            INNER JOIN cargos ON funcionarios.cargo_id = cargos.id
            WHERE funcionarios.id = ?";

    if ($comando = $mysqli->prepare($sql)) {
      /* VINCULAR PARÂMETROS */
      $comando->bind_param("i", $parametro_id);
      $parametro_id = trim($_GET["id"]);

      if ($comando->execute()) {
        $resultado = $comando->get_result();

        /* RETORNOU UM REGISTRO? */
        if ($resultado->num_rows == 1) {
          /* RETORNAR LINHA DO RESULTADO COMO UM ARRAY ASSOCIATIVO. JÁ QUE O RESULTADO POSSUI APENAS UMA LINHA, NÃO É NECESSÁRIO USAR UM WHILE LOOP */
          $linha = $resultado->fetch_array(MYSQLI_ASSOC);
          /* OBTER VALORES INDIVIDUAIS DE CADA CAMPO */
          $nome = $linha["nome"];
          $endereco = $linha["endereco"];
          $cargo = $linha["descricao"];
          $salario = $linha["salario"];
        } else {
          /* URL NÃO CONTÉM O PARÂMETRO ID. REDIRECIONAR PARA A PÁGINA DE ERRO */
          header("location: ../view/Erro.php");
          exit();
        }

      } else {
        echo "Oops! Algo deu errado. Tente novamente mais tarde.";
      }
    }
    /* ENCERRAR O COMANDO STATEMENT */
    $comando->close();
    /* ENCERRAR A CONEXÃO */
    $mysqli->close();
  } else {
    /* URL NÃO CONTÉM O PARÂMETRO ID. REDIRECIONAR PARA A PÁGINA DE ERRO */
    header("location: ../view/Erro.php");
    exit();
  }
?>