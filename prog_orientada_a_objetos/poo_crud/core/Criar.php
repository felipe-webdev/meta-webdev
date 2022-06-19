<?php 
  $nome = $endereco = $salario = "";
  $nome_erro = $endereco_erro = $salario_erro = "";

  /* PROCESSAMENTO DE DADOS DO FORM */
  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["btn_criar"])) {
    require_once "Conexao.php";

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

    /* SE NÃO EXISTE ERRO DE ENTRADA ... CADASTRE O FUNCIONÁRIO */
    if (empty($nome_erro) && empty($endereco_erro) && empty($salario_erro)) {
      $sql = "INSERT INTO funcionarios (nome, endereco, cargo_id, salario) VALUES (?, ?, ?, ?)";

      if ($comando = $mysqli->prepare($sql)) {
        /* VINCULAR PARÂMETROS */
        $comando->bind_param("ssis", $parametro_nome, $parametro_endereco, $parametro_cargo, $parametro_salario);
        $parametro_nome = $nome;
        $parametro_endereco = $endereco;
        $parametro_cargo = $_POST["cargo"];
        $parametro_salario = $salario;

        if ($comando->execute()) {
          /* SUCESSO ... REDIRECIONAR PARA O PAINEL */
          header("location: ../view/Painel.php");
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
  }
?>