<?php
$nome = utf8_decode($_GET['nome']);
$email = utf8_decode($_GET['email']);
$telefone = utf8_decode($_GET['telefone']);

$cabecalho = "MIME-Version: 1.0" ."\n";
$cabecalho .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$cabecalho .= "From: Lagoinha Jacksonville <trcosta13@gmail.com>" . "\r\n";
$cabecalho .= "Reply-To: thiagoreiscosta@gmail.com" . "\r\n";
$cabecalho .= "Cc: thiagoreiscosta@gmail.com" . "\r\n";
$cabecalho .= "Return-Path: <trcosta13@gmail.com>" . "\r\n";

$assunto = 'Bem Vindo ao Novo!';
$mensagem = 'Bem Vindo ao Novo'.$nome.'!';						

mail($email, $assunto, $mensagem, $cabecalho);
?>