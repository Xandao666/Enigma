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
			<h1>ENIGMA 1 ( ENIGMA DE TESTE )</h1>
			<br>
			<img src="gorila.jpg">
			<br>
			<label>Qual o nome do filosofo citado na foto acima?</label>
			<br>
			<input type="text" name="enigma">
			<br>
			<input type="submit" onclick="" value="ENVIAR RESPOSTA" name="Resposta" class="btn1">
			</form>
		</div>
	</section>
</body>
</html>
<?php
/* Declaração de Variáveis */
				$Resposta = @$_REQUEST['enigma'];
				$submit = @$_REQUEST['Resposta'];
				
				$Resposta1 = 'MC Gorila';
				if($submit){
					if($Resposta == null ){
						echo "<script:alert('Por favor, preencha a senha do enigma!');</script>";
					}
					/* Caso o campo usuario e senha não 
						*estejam vazios vamos testar se o usuário e a senha batem 
					*iniciamos uma sessão e redirecionamos o usuário para o painel */
					else{
						if(($Resposta == $Resposta1 )){
							header("Location: 2.php");
						}
						/* Se o usuario ou a senha não batem alertamos o usuario */
						else{
								  echo "<script>alert('ERROOOOUUU');</script>";
						}
					}
				}




?>