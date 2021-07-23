<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\EXCEPTION;
    use PHPMailer\PHPMailer\SMTP;

    defined('BASEPATH') or exit('No Direct script is allowed');

    class Emailmanager{

        public function load($isHTML = FALSE){

            $mail = new PHPMailer;

            $mail->isSMTP(TRUE);
            $mail->Host     = SMTP_HOST;
            $mail->Username = SMTP_USER;
            $mail->Password = SMTP_PASSWORD;
            $mail->SMTPSecure = SMTP_ENCRYPTION;
            $mail->Port     = SMTP_PORT;
            $mail->isHTML($isHTML);
            
            return $mail;
        }
    }