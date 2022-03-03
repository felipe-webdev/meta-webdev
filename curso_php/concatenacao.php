<html>
	<head>
		<meta charset="utf-8" />
		<title>Curso PHP</title>
	</head>

	<body>
		<?php 
			$nome = 'Maria';
			$cor = 'amarelo';
			$idade = 25;
			$atividade_preferida = 'andar de bicicleta';

			//operador . (ponto) semelhante ao || no SQL

			echo 'Olá ' . $nome . ', vi que sua cor preferida é ' . $cor . ', estou vendo também que você possui ' . $idade . ' anos e que gosta de ' . $atividade_preferida;

			//aspas duplas, faz as interpretação das variáveis e as incorpora na cadeia de caracteres (aspas simples não faz)
			echo '<br/>';
			echo "Olá $nome, vi que sua cor preferida é $cor, estou vendo também que você possui $idade anos e que gosta de $atividade_preferida";
		?>
	</body>
</html>