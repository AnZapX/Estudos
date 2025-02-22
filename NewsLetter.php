<?php
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// if (!empty($_POST)){
    
//     $mymail = $_POST['mail'];
// }else{
//     echo '<script>alert("Algo de errado aconteceu! tente novamente mais tarde");</script>';
//     echo '<script>history.go(-1);</script>';
//     die();
// }

if (isset($_POST['email'])) {
    // Sanitiza o valor do campo 'email'
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
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
        
        $mail->addAddress('andreaszapala98@gmail.com', 'Andreas');
        $mail->addAddress($email);

        // Conteúdo do e-mail
        $mail->isHTML(true);
        $mail->Subject = 'Cadastro do NewsLetter'; // Assunto simples
        $mail->CharSet = 'UTF-8'; // Define a codificação como UTF-8
        $mail->Body    = 'CONFIRMAÇÃO do E-mail: ' . $email . ' para cadastrado no Newsletter!';

        // Enviar e-mail
        $mail->send();
        echo '<script>alert("E-mail enviado com sucesso! Enviamos uma cópia para seu e-mail!");</script>';
        echo '<script>history.go(-1);</script>';
    } catch (Exception $e) {
        echo "Erro ao enviar e-mail: {$mail->ErrorInfo}";
    }
}else{
    echo "<script>Algo deu erro!</script>";
    echo '<script>history.go(-1);</script>';
    die();
}


