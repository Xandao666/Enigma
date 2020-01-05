<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Enigmas do clayton</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<section id="home">
		<div class="card">
			<form method="post">
			<h1>BEM VINDOS AO ENIGMA ENIGMATICO DO CLEITON</h1>
			<br>
			<img src="cleiton.jpg">
			<br>
			<input type="submit" onclick="window.location.href = '1.php'" value="Entrar até os desafios!" name="Entrar" class="btn1">

		</form>
		</div>
	</section>
</body>
</html>
<?php
$submit = @$_REQUEST['Entrar'];
if ($submit) {
   header("Location: painel.php");
}



?>