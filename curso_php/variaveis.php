<html>
	<head>
		<meta charset="utf-8" />
		<title>Curso PHP</title>
	</head>

	<body>
		<!-- comentário do HTML-->
		<?php

			//string
		$nome = "Felipe de Freitas Fernandes";
			//int
		$idade = 26;
			//float
		$peso = 61.5;
			//boolean
		$fumante_son = true; //true = 1 e false = 'vazio'
			// idade mudada para string ... lógica ...
		$idade = '25';
		?>

		<h1>Ficha cadastral</h1>
		<br/>
		<p>Nome: <?= $nome ?></p>
		<p>Idade: <?= $idade ?></p>
		<p>Peso: <?= $peso ?></p>
		<p>Fumante: <?= $fumante_son ?></p>
	</body>
</html>