<?php

require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

$nome = htmlspecialchars(mb_convert_encoding($_GET['nome'], 'UTF-8'), ENT_QUOTES, 'UTF-8');
$email = filter_var($_GET['email'], FILTER_SANITIZE_EMAIL);
$telefone = htmlspecialchars($_GET['telefone'], ENT_QUOTES, 'UTF-8');

try {
    // Configuração do servidor SMTP (Gmail)
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'trcosta13@gmail.com'; // SEU EMAIL
    $mail->Password   = 'seuz hunl fzrf hqxs'; // SUA SENHA (ou App Password)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // Remetente e destinatário
    $mail->setFrom('trcosta13@gmail.com', 'Lagoinha Jacksonville');
    $mail->addAddress($email, $nome);

    // Conteúdo do email (HTML)
    $mail->isHTML(true);
    $mail->Subject = 'Bem-Vindo ao Novo!';
    $mail->Body    = '<h1>Bem-Vindo ao Novo!</h1><p>Obrigado por se cadastrar.</p>';

    // Enviar email
    $mail->send();
    // echo 'Email enviado com sucesso!';

    $email2 = "thiagoreiscosta@gmail.com";
    $nome2 = "João";

    // Remetente e destinatário
    $mail->setFrom('trcosta13@gmail.com', 'Lagoinha Jacksonville');
    $mail->addAddress($email2, $nome2);

    // Conteúdo do email (HTML)
    $mail->isHTML(true);
    $mail->Subject = 'Novo Cadastramento no Welcome';
    $mail->Body    = "<!DOCTYPE html>
                      <html lang='pt-BR'>
                      <head>
                      <meta charset='UTF-8'>
                      <title>Bem-Vindo</title>
                      </head>
                      <body>
                      <h1>Cadastramento no Welcome</h1>
                      <br>
                      <strong>Nome:</strong> $nome <br>
                      <strong>Email:</strong> $email <br>
                      <strong>Telefone:</strong> $telefone <br>
                      </body>
                      </html>";

    // Enviar email
    $mail->send();

} catch (Exception $e) {
    echo "Erro ao enviar email: {$mail->ErrorInfo}";
}







// header('Content-Type: text/html; charset=UTF-8');

// $cabecalho = "MIME-Version: 1.0" ."\r\n";
// $cabecalho .= "Content-type:text/html; charset=UTF-8" . "\r\n";
// // $cabecalho .= 'Content-type: text/html; charset=iso-8859-1' . "\n";
// $cabecalho .= "From: Lagoinha Jacksonville <trcosta13@gmail.com>" . "\r\n";
// // $cabecalho .= "From: trcosta13@gmail.com\n"."X-Mailer: php";
// $cabecalho .= "Reply-To: trcosta13@gmail.com" . "\r\n";
// $cabecalho .= "Return-Path: <trcosta13@gmail.com>" . "\r\n";

// $assunto = "Bem Vindo ao Novo!";
// $mensagem = "Bem Vindo ao Novo $nome!";

// mail($email, $assunto, $mensagem, $cabecalho);

// $msg = <<<HTML
// <!DOCTYPE html>
// <html lang="pt-BR">
// <head>
//     <meta charset="UTF-8">
//     <title>Novo Cadastro</title>
// </head>
// <body>
//     <h1 style="color: #3498db;">Cadastramento no Welcome</h1>
//     <p><strong>Nome:</strong> $nome</p>
//     <p><strong>Email:</strong> $email</p>
//     <p><strong>Telefone:</strong> $telefone</p>
// </body>
// </html>
// HTML;

// $msg = "
// <!DOCTYPE html>
// <html lang='pt-BR'>
// <head>
// <meta charset='UTF-8'>
// <title>Bem-Vindo</title>
// </head>
// <body>
// <h1>Cadastramento no Welcome</h1>
// <br>
// <strong>Nome:</strong> $nome <br>
// <strong>Email:</strong> $email <br>
// <strong>Telefone:</strong> $telefone <br>
// </body>
// </html>";

// $cab = "MIME-Version: 1.0" ."\n";
// // $cab .= "Content-type:text/html;charset=UTF-8" . "\n";
// $cab .= 'Content-type: text/html; charset=iso-8859-1' . "\n";
// // $cab .= "From: Lagoinha Jacksonville <trcosta13@gmail.com>" . "\n";
// $cab .= "From: trcosta13@gmail.com\n"."X-Mailer: php";
// $cab .= "Return-Path: <trcosta13@gmail.com>" . "\n";
// $cab .= "Reply-To: trcosta13@gmail.com" . "\n";

// $ret = "trcosta13@gmail.com";
// $sub = "Novo Cadastramento no Welcome";

// mail($ret, $sub, $msg, $cab);
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lagoinha Jacksonville</title>
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <img src="./imgs/lagoinha-seeklogo.png" alt="" class="logo" />
    <p>Obrigado, <?php echo "$nome"; ?></p>

    <p id="siga">Conheça o novo e siga nossas redes sociais!</p>

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