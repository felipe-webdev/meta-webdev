<?php
/* CREDENCIAIS PARA CONEXÃO COM O MYSQL */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'felipe');
define('DB_PASSWORD', 'F3l1p3');
define('DB_NAME', 'crud');

/* TENTATIVA DE CONEXÃO COM O BANCO */
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

/* CHECAGEM DE CONEXÃO */
if($mysqli === false){
  die("ERRO: Não foi possível conectar. " . $mysqli->connect_error);
}
?>