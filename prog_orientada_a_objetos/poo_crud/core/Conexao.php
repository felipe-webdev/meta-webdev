<?php
  /* CREDENCIAIS PARA CONEXÃO COM O MYSQL */
  define('SERVIDOR', 'localhost');
  define('USUARIO', 'felipe');
  define('SENHA', 'F3l1p3');
  define('BANCO', 'crud');
  
  /* TENTATIVA DE CONEXÃO COM O BANCO */
  $mysqli = new mysqli(SERVIDOR, USUARIO, SENHA, BANCO);
  
  /* CHECAGEM DE CONEXÃO */
  if($mysqli === false){
    die("ERRO: Não foi possível conectar. " . $mysqli->connect_error);
  }
?>