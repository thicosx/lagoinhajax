<?php

// include ("connection/connection.php");
// $timeZone = "America/New_York";
// $hourFormat = 'Y-m-d';
// date_default_timezone_set($timeZone);
// $dtAtual = date($hourFormat);

$nome = utf8_decode($_GET['nome']);
$email = utf8_decode($_GET['email']);
$telefone = utf8_decode($_GET['telefone']);

echo $email;

$header = "MIME-Version: 1.0\n";
$header .= "Content-type: text/html; charset=utf-8\n";
$header .= "From: Lagoinha Jacksonville <trcosta13@gmail.com>\n";
$header .= "Return-Path: <trcosta13@gmail.com>\n";

$assunto = 'Bem Vindo ao Novo!';
$mensagem = '<html>
			<body>
			<font face=Verdana size=2>
			Dear '.$nome.',<br><br>
			Seja bem vindo a Lagoinha.
			<br><br>
			<b>Lagoinha Jacksonville Church<br></b>
			San Jose Boulevard<br>
			Jacksonville, FL, 32258<br>
			www.lagoinhajacksonville.com		
			</font>
			</body>
			</html>';						

mail($email, $assunto, $mensagem, $header)
?>