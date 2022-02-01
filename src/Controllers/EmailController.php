<?php


namespace App\Controllers;

class EmailController
{
    public static function enviaEmail()
    {
        $nome     = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
        $email    = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $msg      = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);

        $to      = 'mhsilva555@gmail.com';
        $subject = 'Formulário de Contato';

        $mensagem = '<b>Nome:</b> '.$nome.'\r\n'.
            '<b>Email:</b> '.$email.'\r\n'.
            '<b>Mensagem:</b> '.$msg.'\r\n';

        $headers = 'From: mhsilva555@gmail.com' . "\r\n" .
            'Reply-To: mhsilva555@gmail.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        mail($to, $subject, $mensagem, $headers);
    }
}
