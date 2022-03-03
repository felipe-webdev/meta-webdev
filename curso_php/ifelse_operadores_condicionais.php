<html>
	<head>
		<meta charset="utf-8" />
		<title>Curso PHP</title>
	</head>

	<body>
		<?php 
			//if (condição) {código};

			//if (condição) {código} else {código};

			//if (condição) {código} else if (condição) {código} else {código};
		
			//if (condição) código com apenas uma instrução sem usar chaves;

			//FORÇANDO OS VALORES BOOLEAN EM TRUE OU FALSE
				echo "Forçando o valor true: <br/>";

				if (true) {
					echo 'Verdadeiro <br/>';
				} else {
					echo 'Falso <br/>';
				};

				echo '<br/>';

				echo "Forçando o valor false: <br/>";
				
				if (false) {
					echo 'Verdadeiro <br/>';
				} else {
					echo 'Falso <br/>';
				};

				echo '<br/>';

			//OPERADOR DE COMPARAÇÃO 'IGUAL' ==
				echo "2 é igual a 2? <br/>";

				if (2 == 2) {
					echo 'Verdadeiro <br/>';
				} else {
					echo 'Falso <br/>';
				};

				echo '<br/>';
			
			//OPERADOR DE COMPARAÇÃO 'IGUAL' ==
				echo "3 é igual a 2? <br/>";

				if (3 == 2) {
					echo 'Verdadeiro <br/>';
				} else {
					echo 'Falso <br/>';
				};

				echo '<br/>';
			
			//OPERADOR DE COMPARAÇÃO 'IDÊNTICO' ===
				echo "2 é idêntico (igual e do mesmo tipo) a 2? <br/>";

				if (2 === 2) {
					echo 'Verdadeiro <br/>';
				} else {
					echo 'Falso <br/>';
				};

				echo '<br/>';
			
			//OPERADOR DE COMPARAÇÃO 'IDÊNTICO' ===
				echo "2 é idêntico (igual e do mesmo tipo) a '2'? <br/>";

				if (2 === '2') {
					echo 'Verdadeiro <br/>';
				} else {
					echo 'Falso <br/>';
				};

				echo '<br/>';
			
			//OPERADOR DE COMPARAÇÃO 'DIFERENTE' != OU <>
				echo "'x' é diferente de 'y'? <br/>";

				if ('x' != 'y') {
					echo 'Verdadeiro <br/>';
				} else {
					echo 'Falso <br/>';
				};

				echo '<br/>';
			
			//OPERADOR DE COMPARAÇÃO 'DIFERENTE' != OU <>
				echo "'x' é diferente de 'x'? <br/>";

				if ('x' != 'x') {
					echo 'Verdadeiro <br/>';
				} else {
					echo 'Falso <br/>';
				};

				echo '<br/>';
			
			//OPERADOR DE COMPARAÇÃO 'DIFERENTE' != OU <>
				echo "5 é diferente de 6? <br/>";

				if (5 <> 6) {
					echo 'Verdadeiro <br/>';
				} else {
					echo 'Falso <br/>';
				};

				echo '<br/>';
			
			//OPERADOR DE COMPARAÇÃO 'NÃO IDÊNTICO' !==
				echo "5 é não idêntico (é de valor ou tipo diferente) a 6? <br/>";

				if (5 !== 6) {
					echo 'Verdadeiro <br/>';
				} else {
					echo 'Falso <br/>';
				};

				echo '<br/>';
			
			//OPERADOR DE COMPARAÇÃO 'NÃO IDÊNTICO' !==
				echo "5 é não idêntico (é de valor ou tipo diferente) a '5'? <br/>";

				if (5 !== '5') {
					echo 'Verdadeiro <br/>';
				} else {
					echo 'Falso <br/>';
				};

				echo '<br/>';
			
			//OPERADOR DE COMPARAÇÃO 'NÃO IDÊNTICO' !==
				echo "5 é não idêntico (é de valor ou tipo diferente) a 5? <br/>";

				if (5 !== 5) {
					echo 'Verdadeiro <br/>';
				} else {
					echo 'Falso <br/>';
				};

				echo '<br/>';
			
			//OPERADOR DE COMPARAÇÃO 'MENOR' <
				echo "2 é menor que 18? <br/>";

				if (2 < 18) {
					echo 'Verdadeiro <br/>';
				} else {
					echo 'Falso <br/>';
				};

				echo '<br/>';
			
			//OPERADOR DE COMPARAÇÃO 'MENOR' <
				echo "18 é menor que 18? <br/>";

				if (18 < 18) {
					echo 'Verdadeiro <br/>';
				} else {
					echo 'Falso <br/>';
				};

				echo '<br/>';
			
			//OPERADOR DE COMPARAÇÃO 'MENOR' <
				echo "25 é menor que 18? <br/>";

				if (25 < 18) {
					echo 'Verdadeiro <br/>';
				} else {
					echo 'Falso <br/>';
				};

				echo '<br/>';
			
			//OPERADOR DE COMPARAÇÃO 'MAIOR' >
				echo "25 é maior que 18? <br/>";

				if (25 > 18) {
					echo 'Verdadeiro <br/>';
				} else {
					echo 'Falso <br/>';
				};

				echo '<br/>';
			
			//OPERADOR DE COMPARAÇÃO 'MAIOR' >
				echo "25 é maior que 25? <br/>";

				if (25 > 25) {
					echo 'Verdadeiro <br/>';
				} else {
					echo 'Falso <br/>';
				};

				echo '<br/>';
			
			//OPERADOR DE COMPARAÇÃO 'MAIOR' >
				echo "25 é maior que 30? <br/>";

				if (25 > 30) {
					echo 'Verdadeiro <br/>';
				} else {
					echo 'Falso <br/>';
				};

				echo '<br/>';
			
			//OPERADOR DE COMPARAÇÃO 'MENOR OU IGUAL' <=
				echo "25 é menor ou igual a 30? <br/>";

				if (25 <= 30) {
					echo 'Verdadeiro <br/>';
				} else {
					echo 'Falso <br/>';
				};

				echo '<br/>';
			
			//OPERADOR DE COMPARAÇÃO 'MENOR OU IGUAL' <=
				echo "25 é menor ou igual a 25? <br/>";

				if (25 <= 25) {
					echo 'Verdadeiro <br/>';
				} else {
					echo 'Falso <br/>';
				};

				echo '<br/>';
			
			//OPERADOR DE COMPARAÇÃO 'MENOR OU IGUAL' <=
				echo "25 é menor ou igual a 15? <br/>";

				if (25 <= 15) {
					echo 'Verdadeiro <br/>';
				} else {
					echo 'Falso <br/>';
				};

				echo '<br/>';
			
			//OPERADOR DE COMPARAÇÃO 'MAIOR OU IGUAL' >=
				echo "25 é maior ou igual a 15? <br/>";

				if (25 >= 15) {
					echo 'Verdadeiro <br/>';
				} else {
					echo 'Falso <br/>';
				};

				echo '<br/>';
			
			//OPERADOR DE COMPARAÇÃO 'MAIOR OU IGUAL' >=
				echo "6 é maior ou igual a 6? <br/>";

				if (6 >= 6) {
					echo 'Verdadeiro <br/>';
				} else {
					echo 'Falso <br/>';
				};

				echo '<br/>';
			
			//OPERADOR DE COMPARAÇÃO 'MAIOR OU IGUAL' >=
				echo "-17 é maior ou igual a 6? <br/>";

				if (-17 >= 6) {
					echo 'Verdadeiro <br/>';
				} else {
					echo 'Falso <br/>';
				};
		?>
	</body>
</html>