<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Enigmas do clayton</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<center>
		<h1>BEM VINDOS AO ENIGMA ENIGMATICO DO CLEITON</h1>
		<img src="cleiton.jpg">
		<br>
		<input type="submit" value="Entrar até os desafios!" name="Entrar">
	</center>
</body>
</html>
<?php
$submit = @$_REQUEST['Entrar'];
if ($submit) {
   header("Location: painel.php");
}



?>