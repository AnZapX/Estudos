<?php
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (!empty($_POST)){
    $mymail = $_POST['mail'];
}else{
    echo '<script>alert("Algo de errado aconteceu! tente novamente mais tarde");</script>';
    echo '<script>history.go(-1);</script>';
    die();
}



// Configurações do MailHog
$mail = new PHPMailer();
try {
    // Configurações do servidor SMTP (MailHog)
    $mail->isSMTP();
    // $mail->Host = 'mailhog'; // Nome do serviço no docker-compose.yml
    // $mail->SMTPAuth = false; // MailHog não requer autenticação
    // $mail->Port = 1025;      // Porta SMTP do MailHog
    $mail->Host       = 'smtp.gmail.com';                     // Servidor SMTP
    $mail->SMTPAuth   = true;                                   // Ativar autenticação SMTP
    $mail->Username   = 'andreaszapala98@gmail.com';               // Usuário SMTP
    $mail->Password   = 'jbun fndl aocb obzp';                           // Senha SMTP
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Ativar criptografia TLS
    $mail->Port       = 587;                                    // Porta SMTP

    // Remetente e destinatário
    // $mail->setFrom('Teste.teste@gmail.com', 'Otário viajantes');
    $mail->addAddress('andreaszapala98@gmail.com', 'Andreas');

    // Conteúdo do e-mail
    $mail->isHTML(true);
    $mail->Subject = 'Cadastro do NewsLetter'; // Assunto simples
    $mail->CharSet = 'UTF-8'; // Define a codificação como UTF-8
    $mail->Body    = 'O E-mail: ' . $mymail . ' deseja ser cadastrado no Newsletter!';

    // Enviar e-mail
    $mail->send();
    echo '<script>alert("E-mail enviado com sucesso!");</script>';
    echo '<script>history.go(-1);</script>';
} catch (Exception $e) {
    echo "Erro ao enviar e-mail: {$mail->ErrorInfo}";
}