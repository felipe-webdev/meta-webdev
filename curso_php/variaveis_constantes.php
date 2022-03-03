<html>
	<head>
		<meta charset="utf-8" />
		<title>Curso PHP</title>
	</head>

	<body>
		<?php 
			define('BD_URL', 'endereco_bd_dev');
			define('BD_USUARIO', 'usuario_dev');
			define('BD_SENHA', 'senha_dev');
			//Não preciso utilizar o $ para chamar as variáveis constantes e não será possível definir novamente os seus valores mais adiante pois só podem ser definidas uma vez, se precisar basta alterar o valor definido inicialmente
			echo BD_URL . '<br/>';
			echo BD_USUARIO . '<br/>';
			echo BD_SENHA . '<br/>';
		?>
	</body>
</html>