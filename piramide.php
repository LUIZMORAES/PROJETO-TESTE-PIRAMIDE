<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>ASTERISCO</title>
	</head>
	
	<body>
		<form action="piramide/piramide.php" method="POST">
		
		<h1>TRIANGULO COM ASTERISCO</h1>
		<h5>DEMOSTRAÇÃO</h5>
		
			<input type=""number" name="num1" value="" id="n" placeholder="Digite o Numero : "><br><br>
		
			<button type="submit">Enviar</button>
		</form>
	</body>
</html>

<?php

	if($_POST){
		
		$m = $_POST['num1'];

		for ($j = 1; $j <= ($m-1/2); $j++) {
			
			echo " ";
		}
		
		echo "*";
		echo "<br>";
		
		for ($i = 1; $i <= $m; $i++) {
			
			for ($j = 1; $j <= ($m-1/2); $j++) {
				
				echo " ";
			}
			
			echo "<br>";
			
			for ($j = 0; $j <= $i; $j++) {
		
				echo "*";
	
			}

			echo "<br>";
		}
		
		
	}
?>