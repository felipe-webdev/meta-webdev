<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AT4 Tela de Cadastro</title>
</head>
<body>
  <h2>AT4 Tela de Cadastro</h2>
  <?php
    echo (
      "<h3>Preencha o formulário de cadastro</h3>"
    );
  ?>
  <form action="" method="POST">
    <input type="text"
      id="nome_completo"
      name="nome_completo"
      required>
    <label for="#nome_completo">Nome Completo<br></label>
    <input type="text"
      id="contato"
      name="contato">
    <label for="#contato">Contato<br></label>
    <input type="text"
      id="email"
      name="email"
      required>
    <label for="#email">E-Mail<br></label>
    <input type="text"
      id="confirma_email"
      name="confirma_email"
      required>
    <label for="#confirma_email">Confirma E-Mail<br></label>
    <input type="password"
      id="senha"
      name="senha"
      required>
    <label for="#senha">Senha<br></label>
    <input type="password"
      id="confirma_senha"
      name="confirma_senha"
      required>
    <label for="#confirma_senha">Confirma Senha<br></label>
    <input type="date"
      id="nascimento"
      name="nascimento"
      required>
    <label for="#nascimento">Data de Nascimento<br></label>
    <input type="submit" name="cadastrar" value="Cadastrar">
  </form>
  <?php
    if (isset($_POST["cadastrar"])) {
      $nome_completo = $_POST["nome_completo"];
      $contato = $_POST["contato"];
      $email = $_POST["email"];
      $confirma_email = $_POST["confirma_email"];
      $senha = $_POST["senha"];
      $confirma_senha = $_POST["confirma_senha"];
      $nascimento = $_POST["nascimento"];

      $cadastro = [];
      $cadastro[0] = $nome_completo;
      array_push($cadastro, $contato);//indice 1
      $cadastro[2] = $email;
      array_push($cadastro, $nascimento);//indice 3

      echo (
        "<h3>Cadastro Efetuado:</h3>"
        .'<table style="border: 1px solid; border-collapse: collapse;">'
      );
      for ($i = 0; $i < sizeof($cadastro); $i++) {
        switch ($i) {
          case 0:
            echo (
            '<tr style="border: 1px solid; padding: 4px"><th style="border: 1px solid; padding: 4px; text-align: right">Nome Completo:</th><td style="border: 1px solid; padding: 4px; text-align: left">'.($cadastro[$i])."</td></tr>"
            );
            break;
          case 1:
            echo (
            '<tr style="border: 1px solid; padding: 4px"><th style="border: 1px solid; padding: 4px; text-align: right">Contato:</th><td style="border: 1px solid; padding: 4px; text-align: left">'.($cadastro[$i])."</td></tr>"
            );
            break;
          case 2:
            echo (
            '<tr style="border: 1px solid; padding: 4px"><th style="border: 1px solid; padding: 4px; text-align: right">E-Mail:</th><td style="border: 1px solid; padding: 4px; text-align: left">'.($cadastro[$i])."</td></tr>"
            );
            break;
          case 3:
            echo (
            '<tr style="border: 1px solid; padding: 4px"><th style="border: 1px solid; padding: 4px; text-align: right">Data de Nascimento:</th><td style="border: 1px solid; padding: 4px; text-align: left">'.($cadastro[$i])."</td></tr>"
            );
            break;
        }
      }
      echo (
        "</table>"
        ."<P><strong>Por segurança a sua senha foi omitida da exibição!</strong></p>"
      );
    }
  ?>

</body>
</html>