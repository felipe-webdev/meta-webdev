<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listar</title>
</head>
<body>
  <h5>Deletar Usuário</h5>
  <form action="./deletar.php" method="GET">
    <input 
      type="text"
      name="email"
      placeholder="Digite o email do usuário"
      autofocus
      required
    />
    <input type="submit" name="btn-deletar" value="Deletar"/>
  </form>
</body>
</html>