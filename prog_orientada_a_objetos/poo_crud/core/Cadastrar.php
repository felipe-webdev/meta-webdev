<?php 
  session_start();

  $nome = $email = $senha = $confirma_senha = "";
  $nome_erro = $email_erro = $senha_erro = $confirma_senha_erro = "";

  /* PROCESSAMENTO DE DADOS DO FORM */
  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["btn_cadastrar"])) {
    require_once "Conexao.php";

    /* CAMPO NOME ESTÁ VAZIO? */
    if (empty(trim($_POST["nome"]))) {
      $nome_erro = "Digite um nome.";
    } else {
      $nome = trim($_POST["nome"]);
    }

    /* CAMPO EMAIL ESTÁ VAZIO? */
    if (empty(trim($_POST["email"]))) {
      $email_erro = "Digite um email.";
    } else {
      $sql = "SELECT id FROM usuarios WHERE email = ?";

      if ($comando = $mysqli->prepare($sql)) {
        /* VINCULAR PARÂMETROS */
        $comando->bind_param("s", $parametro_email);
        $parametro_email = trim($_POST["email"]);

        if ($comando->execute()) {
          $comando->store_result();

          /* RETORNOU UM USUÁRIO? */
          if ($comando->num_rows == 1) {
            $email_erro = "Este email já está cadastrado.";
          } else {
            $email = trim($_POST["email"]);
          }

        } else {
          echo "Oops! Algo deu errado. Por favor tente novamente mais tarde.";
        }
        /* ENCERRAR O COMANDO STATEMENT */
        $comando->close();
      }
    }

    /* CAMPO SENHA ESTÁ VAZIO? */
    if (empty(trim($_POST["senha"]))) {
      $senha_erro = "Digite uma senha.";
    /* SENHA É MENOR DO QUE 4 DIGITOS? */
    } else if (strlen(trim($_POST["senha"])) < 4) {
      $senha_erro = "A senha deve conter no mínimo 4 caracteres.";
    } else {
      $senha = trim($_POST["senha"]);
    }

    /* CAMPO CONFIRMAÇÃO DE SENHA ESTÁ VAZIO? */
    if (empty(trim($_POST["confirma_senha"]))) {
      $confirma_senha_erro = "Digite a confirmação de senha.";   
    } else {
      $confirma_senha = trim($_POST["confirma_senha"]);

      /* SENHA E CONFIRMAÇÃO DE SENHA SÃO IGUAIS? */
      if (empty($senha_erro) && ($senha != $confirma_senha)) {
        $confirma_senha_erro = "Senha e confirmação de senha não conferem.";
      }
    }

    /* SE NÃO EXISTE ERRO DE ENTRADA ... CADASTRE O USUÁRIO */
    if (empty($nome_erro) && empty($email_erro) && empty($senha_erro) && empty($confirma_senha_erro)) {
      $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)";

      if ($comando = $mysqli->prepare($sql)) {
        /* VINCULAR PARÂMETROS */
        $comando->bind_param("sss", $parametro_nome, $parametro_email, $parametro_senha);
        $parametro_nome = $nome;
        $parametro_email = $email;
        $parametro_senha = password_hash($senha, PASSWORD_DEFAULT); /* CIFRAR A SENHA CRIANDO UM HASH */

        if ($comando->execute()) {

          /* SE JÁ ESTIVER LOGADO REDIRECIONAR PARA O PAINEL ... SE NÃO, REDIRECIONAR PARA A ENTRADA */
          if (isset($_SESSION["autenticado"]) && $_SESSION["autenticado"] === true) {
            header("location: ../view/Painel.php");
          } else {
            header("location: ../index.php");
          }

        } else {
          echo "Oops! Algo deu errado. Por favor tente novamente mais tarde.";
        }
        /* ENCERRAR O COMANDO STATEMENT */
        $comando->close();
      }
    }
    /* ENCERAR A CONEXÃO */
    $mysqli->close();
  }
?>