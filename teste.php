<?php
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



class Mailer {
    // Propriedades privadas
    private $email;
    private $name;
    private $phone;
    // Método construtor
    public function __construct($name, $email, $phone) {
        $this->setName($name);
        $this->setEmail($email);
        $this->setPhone($phone);
    }

    
    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getEmail() {
        return $this->email;
    }
    public function setEmail($email) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            die("E-mail invalido.");
        }else{
            $this->email = $email;  
        }
    }

    public function getPhone(){
        return $this->phone;
    }
    public function setPhone($phone){
        $this->phone = $phone;
    }

    // Método para exibir informações do usuário
    public function sendMail() {
            $mail = new PHPMailer();
            try {

                $mail->isSMTP();

                $mail->Host       = 'smtp.gmail.com';                     // Servidor SMTP
                $mail->SMTPAuth   = true;                                   // Ativar autenticação SMTP
                $mail->Username   = 'andreaszapala98@gmail.com';               // Usuário SMTP
                $mail->Password   = 'jbun fndl aocb obzp';                           // Senha SMTP
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Ativar criptografia TLS
                $mail->Port       = 587;                                    // Porta SMTP
            
                // Remetente e destinatário
                $mail->addAddress('andreaszapala98@gmail.com', "Andreas Zapalá");
                $mail->addAddress($this->email, $this->name);
                
                // Conteúdo do e-mail
                $mail->isHTML(true);
                $mail->Subject = 'Agendamento do ' . $this->name; // Assunto simples
                $mail->CharSet = 'UTF-8'; 
                $mail->Body    = 'O cliente <b>' . $this->name . '</b> Solicita uma ligação!<br>Telefone: <b>' . $this->phone . '</b><br>O E-Mail: <b>' . $this->email;
            
                // Enviar e-mail
                $mail->send();
                
                echo '<script>alert("E-mail enviado com sucesso!");</script>';
                echo '<script>history.go(-1);</script>';
            } catch (Exception $e) {
                echo "Erro ao enviar e-mail: {$mail->ErrorInfo}";
            }
        }
    }
    
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['celular'])) {
        // Sanitiza o valor do campo 'email'
        $name = filter_input(INPUT_POST, 'name', FILTER_DEFAULT);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $phone = filter_input(INPUT_POST, 'celular', FILTER_DEFAULT);
        
        $usuario = new Mailer( $name, $email, $phone);
        $usuario->sendMail();
    }else{
        echo "<script>Erro! Preencha todos os campos ou tente mais tarde.</script>";
        echo '<script>history.go(-1);</script>';
        //die();
    }

