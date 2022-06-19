<?php 
  session_start();

  /* SE JÁ ESTIVER LOGADO REDIRECIONAR PARA O PAINEL */
  if (isset($_SESSION["autenticado"]) && $_SESSION["autenticado"] === true) {
    header("location: view/Painel.php");
    exit;
  }

  $email = $senha = $email_erro = $senha_erro = $login_erro = "";

  /* PROCESSAMENTO DE DADOS DO FORM */
  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["btn_entrar"])) {
    require_once "Conexao.php";

    /* CAMPO EMAIL ESTÁ VAZIO? */
    if (empty(trim($_POST["email"]))) {
      $email_erro = "Digite seu email.";
    } else {
      $email = trim($_POST["email"]);
    }

    /* CAMPO SENHA ESTÁ VAZIO? */
    if (empty(trim($_POST["senha"]))) {
      $senha_erro = "Digite sua senha.";
    } else {
      $senha = trim($_POST["senha"]);
    }

    /* SE NÃO EXISTE ERRO DE ENTRADA ... VALIDE AS CREDENCIAIS */
    if (empty($email_erro) && empty($senha_erro)) {
      $sql = "SELECT id, nome, email, senha FROM usuarios WHERE email = ?";

      if ($comando = $mysqli->prepare($sql)) {
        /* VINCULAR PARÂMETROS */
        $comando->bind_param("s", $parametro_email);
        $parametro_email = $email;

        if ($comando->execute()) {
          $comando->store_result();

          /* RETORNOU UM USUARIO? */
          if ($comando->num_rows == 1) {
            /* VINCULAR RESULTADO */
            $comando->bind_result($id, $nome, $email, $senha_cifrada);

            if ($comando->fetch()) {

              /* SENHA ESTÁ CORRETA? */
              if (password_verify($senha, $senha_cifrada)) {
                /* INICIAR SESSÃO E GUARDAR DADOS DO USUÁRIO */
                session_start();
                $_SESSION["autenticado"] = true;
                $_SESSION["id"] = $id;
                $_SESSION["usuario"] = $nome;
                $_SESSION["email"] = $email;
                /* REDIRECIONAR PARA O PAINEL */
                header("location: view/Painel.php");
              } else {
                /* SENHA INCORRETA, MOSTRAR MENSAGEM DE ERRO */
                $login_erro = "Email ou Senha incorreto(s).";
              }
            }
          } else {
            /* USUÁRIO NÃO EXISTE, MOSTRAR MENSAGEM DE ERRO */
            $login_erro = "Email ou Senha incorreto(s).";
          }
        } else {
          echo "Oops! Algo deu errado. Por favor tente novamente mais tarde.";
        }
        /* ENCERRAR O COMANDO STATEMENT */
        $comando->close();
      }
    }
    /* ENCERRAR A CONEXÃO */
    $mysqli->close();
  }
?>