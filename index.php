<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Enigmas do clayton</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<section id="home">
			<form method="post" class="card">
			<h1>BEM VINDOS AO ENIGMA ENIGMATICO DO CLEITON</h1>
			<br>
			<img src="cleiton.jpg">
			<br>
			<input type="submit" onclick="window.location.href = '1.php'" value="Entrar até os desafios!" name="Entrar" class="btn1">
		</form>
	</section>
	<div id="creditos1">
		<h1>Feito por:</h1>
		Alisson | Xandgay
	</div>
	<div id="creditos2">
		<h1>Feito por:</h1>
		Alisson | Xandgay
	</div>
</body>
</html>
<?php
$submit = @$_REQUEST['Entrar'];
if ($submit) {
   header("Location: 1.php");
}



?>