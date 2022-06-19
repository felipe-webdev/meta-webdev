<?php 
  require "Conexao.php";

  $nome = $endereco = $salario = "";
  $nome_erro = $endereco_erro = $salario_erro = "";

  /* PROCESSAMENTO DE DADOS DO FORM */
  if (isset($_POST["id"]) && !empty($_POST["id"]) && isset($_POST["btn_atualizar"])) {
    $id = trim($_POST["id"]);

    /* CAMPO NOME ESTÁ VAZIO? */
    if (empty(trim($_POST["nome"]))) {
      $nome_erro = "Informe um nome.";
    } else {
      $nome = trim($_POST["nome"]);
    }

    /* CAMPO ENDEREÇO ESTÁ VAZIO? */
    if (empty(trim($_POST["endereco"]))) {
      $endereco_erro = "Informe um endereço.";   
    } else {
      $endereco = trim($_POST["endereco"]);
    }

    /* CAMPO SALÁRIO ESTÁ VAZIO? */
    if (empty(trim($_POST["salario"]))) {
      $salario_erro = "Informe um valor de salário.";

    /* CAMPO SALÁRIO É NUMÉRICO POSITIVO? */
    } else if (!ctype_digit(trim($_POST["salario"]))) {
      $salario_erro = "Informe um valor de salário positivo e inteiro.";
    } else {
      $salario = trim($_POST["salario"]);
    }

    /* SE NÃO EXISTE ERRO DE ENTRADA ... ATUALIZE O FUNCIONÁRIO */
    if (empty($nome_erro) && empty($endereco_erro) && empty($salario_erro)) {
      $sql = "UPDATE funcionarios SET nome=?, endereco=?, cargo_id=?, salario=? WHERE id=?";

      if ($comando = $mysqli->prepare($sql)) {
        /* VINCULAR PARÂMETROS */
        $comando->bind_param("ssiii", $parametro_nome, $parametro_endereco, $parametro_cargo, $parametro_salario, $parametro_id);
        $parametro_nome = $nome;
        $parametro_endereco = $endereco;
        $parametro_cargo = $_POST["cargo"];
        $parametro_salario = $salario;
        $parametro_id = $id;

        if ($comando->execute()) {
          /* SUCESSO ... REDIRECIONAR PARA A LISTAGEM */
          header("location: ../view/Listar.php");
          exit();
        } else {
          echo "Oops! Algo deu errado. Tente novamente mais tarde.";
        }
      }
      /* ENCERRAR O COMANDO STATEMENT */
      $comando->close();
    }
    /* ENCERRAR A CONEXÃO */
    $mysqli->close();
  } else if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
    $id = trim($_GET["id"]);

    $sql = "SELECT * FROM funcionarios WHERE id = ?";

    if ($comando = $mysqli->prepare($sql)) {
      /* VINCULAR PARÂMETROS */
      $comando->bind_param("i", $parametro_id);
      $parametro_id = $id;

      if ($comando->execute()) {
        $resultado = $comando->get_result();

        /* RETORNOU UM REGISTRO? */
        if ($resultado->num_rows == 1) {
          /* RETORNAR LINHA DO RESULTADO COMO UM ARRAY ASSOCIATIVO. JÁ QUE O RESULTADO POSSUI APENAS UMA LINHA, NÃO É NECESSÁRIO USAR UM WHILE LOOP */
          $linha = $resultado->fetch_array(MYSQLI_ASSOC);
          /* OBTER VALORES INDIVIDUAIS DE CADA CAMPO */
          $nome = $linha["nome"];
          $endereco = $linha["endereco"];
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