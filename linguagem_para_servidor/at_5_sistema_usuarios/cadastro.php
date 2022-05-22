<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastrar</title>
</head>
<body>
  <div id="cadastro-wrapper">
    <div id="form">
      <form action="cadastrar.php" method="POST">
        <h4>TELA DE CADASTRO</h4>
        <label for="nome">Nome:</label>
        <input id="nome" name="nome" type="text" required>
        <label for="email">Email:</label>
        <input id="email" name="email" type="text" required>
        <label for="senha">Senha:</label>
        <input id="senha" name="senha" type="password" required>
        <label for="celular">Celular:</label>
        <input id="celular" name="celular" type="number" required>
        <input id="cadastrar" name="btn-cadastrar" type="submit" value="Cadastrar">
      </form>
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
  #cadastro-wrapper {
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
  #cadastro-wrapper label, input, h4 {
    display: block;
    width: 100%;
  }
  #cadastro-wrapper input {
    margin-bottom: 10px;
  }
  /* #cadastro-wrapper #erro {
    margin-top: 10px;
    border-style: solid;
    border-width: 20px;
    border-radius: 4px;
    border-color: #ad0000;
    background-color: #ad0000;
    color: azure;
  } */
  #cadastro-wrapper #cadastrar {
    border-style: solid;
    border-width: 1px;
    border-radius: 4px;
    border-color: #0073a8;
    background-color: #0073a8;
    color: azure;
  }
  /* #cadastro-wrapper #cadastrar {
    display: block;
    width: 100%;
    border-style: solid;
    border-width: 1px;
    border-radius: 4px;
    border-color: #06ad00;
    background-color: #06ad00;
  } */
  /* #cadastro-wrapper #cadastrar a {
    text-decoration: none;
    color: azure;
  } */
  /* CHROME, SAFARI, EDGE, OPERA */
  input::-webkit-outer-spin-button,
  input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
  }

  /* FIREFOX */
  input[type=number] {
    -moz-appearance: textfield;
  }
</style>