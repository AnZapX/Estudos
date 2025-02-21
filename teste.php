<?php
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Mailer {
    // Propriedades privadas
    private $email;
    private $name;
    // Método construtor
    public function __construct($email = $_POST['email'], $name = null) {
        $this->setEmail($email);
        $this->setName($name);
    }

    // Método get para o email
    public function getEmail() {
        return $this->email;
    }

    // Método set para o email
    public function setEmail($email) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            die("E-mail invalido.");
        }else{
            $this->email = $email;  
        }
        
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        
        $this->name = $name;
        // if($post){
        //         $saveStrip = array_map("strip_tags", $post);
        //         $save = array_map("trim", $saveStrip);
        //         $this->name = $save;
        //}
    }

    // Método para exibir informações do usuário
    public function sendMail() {
       
            $mail = new PHPMailer();
            try {

                $mail->isSMTP();

                $mail->Host       = 'smtp.gmail.com';                     // Servidor SMTP
                $mail->SMTPAuth   = true;                                   // Ativar autenticação SMTP
                // $mail->Username   = 'andreaszapala98@gmail.com';               // Usuário SMTP
                $mail->Password   = 'jbun fndl aocb obzp';                           // Senha SMTP
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Ativar criptografia TLS
                $mail->Port       = 587;                                    // Porta SMTP
            
                // Remetente e destinatário
                $mail->setFrom('andreaszapala98@gmail.com', "Andreas Zapalá");
                $mail->addAddress('andreaszapala98@gmail.com', "Andreas Zapalá");
                $mail->addAddress($this->email, $this->name);
                
                // Conteúdo do e-mail
                $mail->isHTML(true);
                $mail->Subject = 'Cadastro do NewsLetter'; // Assunto simples
                $mail->CharSet = 'UTF-8'; // Define a codificação como UTF-8
                $mail->Body    = 'O E-mail: <b>' . $this->email . '</b>  com o nome <b>' . $this->name . '</b> deseja ser cadastrado no Newsletter!';
            
                // Enviar e-mail
                $mail->send();
                echo '<script>alert("E-mail enviado com sucesso!");</script>';
                // echo '<script>history.go(-1);</script>';
            } catch (Exception $e) {
                echo "Erro ao enviar e-mail: {$mail->ErrorInfo}";
            }
        }
    }


// Exemplo de uso da classe
    // $usuario = new Mailer( "andreas.zapala@gmail.com", "Teste avionario");
     
    // echo $usuario->getEmail() . "<br>";

    // echo $usuario->getName() ;

    // $usuario->sendMail();

