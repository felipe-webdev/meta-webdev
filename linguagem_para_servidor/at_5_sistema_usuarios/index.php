<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Entrar</title>
</head>
<body>
  <div id="login-wrapper">
    <div id="form">
      <form action="entrar.php" method="POST">
        <h4>TELA DE LOGIN</h4>
        <label for="email">Email:</label>
        <input id="email" name="email" type="text" required/>
        <label for="senha">Senha:</label>
        <input id="senha" name="senha" type="password" required/>
        <input id="entrar"name="btn-entrar" type="submit" value="Entrar"/>
        <a id="cadastrar" href="cadastro.php">Cadastrar</a>
      </form>
      <?php 
        if (isset ($_GET["status"]) && $_GET["status"] == "falha") {
          echo('<div id="erro">Usuário ou Senha Incorreto(s)!</div>');
        }
      ?>
    </div>
  </div>
</body>
</html>
<style>
  body {
    font-family: sans-serif;
    display: grid;
    width: 100vw;
    height: 100vh;
  }
  #form {
    display: block;
  }
  #login-wrapper {
    margin: auto;
    width: 25vw;
    height: 40vh;
    outline-style: solid;
    outline-width: 1px;
    outline-color: #999999de;
    border-style: solid;
    border-width: 20px;
    border-radius: 4px;
    border-color: #dfdfdf;
    background-color: #dfdfdf;
  }
  #login-wrapper label, input, h4 {
    display: block;
    width: 100%;
  }
  #login-wrapper input {
    margin-bottom: 10px;
  }
  #login-wrapper #erro {
    margin-top: 10px;
    border-style: solid;
    border-width: 20px;
    border-radius: 4px;
    border-color: #ad0000;
    background-color: #ad0000;
    color: azure;
  }
  #login-wrapper #entrar {
    border-style: solid;
    border-width: 1px;
    border-radius: 4px;
    border-color: #0073a8;
    background-color: #0073a8;
    color: azure;
  }
  #login-wrapper #cadastrar {
    display: block;
    width: 100%;
    border-style: solid;
    border-width: 1px;
    border-radius: 4px;
    border-color: #06ad00;
    background-color: #06ad00;
    text-decoration: none;
    text-align: center;
    color: azure;
  }
</style>