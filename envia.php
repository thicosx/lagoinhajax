<?php
$nome = utf8_decode($_GET['nome']);
$email = utf8_decode($_GET['email']);
$telefone = utf8_decode($_GET['telefone']);

$cabecalho = "MIME-Version: 1.0" ."\n";
$cabecalho .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$cabecalho .= "From: Lagoinha Jacksonville <trcosta13@gmail.com>" . "\r\n";
$cabecalho .= "Return-Path: <trcosta13@gmail.com>" . "\r\n";
$cabecalho .= "Reply-To: trcosta13@gmail.com" . "\r\n";
$cabecalho .= "Cc: trcosta13@gmail.com" . "\r\n";

$assunto = 'Bem Vindo ao Novo!';
$mensagem = 'Bem Vindo ao Novo '.$nome.'!';						

mail($email, $assunto, $mensagem, $cabecalho);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lagoinha Jacksonville</title>
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <img src="./imgs/lagoinha-seeklogo.png" alt="" class="logo" />
    <p>"E conhecereis a verdade e a verdade vos libertará!</p>
    <p>João 10:32</p>

    <p id="siga">Siga Nossas Redes Sociais</p>

    <div id="redes">
      <a
        href="https://www.instagram.com/lagoinhajacksonvillechurch/"
        target="_blank"
        ><div id="instagram"></div
      ></a>
      <a
        href="https://www.youtube.com/@lagoinhajacksonvillechurch"
        target="_blank"
        ><div id="youtube"></div
      ></a>
    </div>
  </body>
</html>