<?php
    // Importar as classes do PHPMailer
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    // Incluir o autoloader do Composer ou incluir os arquivos do PHPMailer manualmente
    require 'vendor/autoload.php'; // Para quem usa Composer
    // require 'caminho/para/PHPMailer/src/PHPMailer.php';
    // require 'caminho/para/PHPMailer/src/Exception.php';
    // require 'caminho/para/PHPMailer/src/SMTP.php';

    try {
        // Criar uma nova instância do PHPMailer
        $mail = new PHPMailer(true);

        // Configuração do servidor SMTP
        $mail->isSMTP(); // Usar o protocolo SMTP para enviar o e-mail
        $mail->Host = 'smtp.gmail.com'; // Endereço do servidor SMTP (substituir pelo correto)
        $mail->SMTPAuth = true; // Ativar autenticação SMTP
        $mail->Username = 'emarpel@gmail.com'; // Seu e-mail de login no SMTP
        $mail->Password = 'ecmr etfp tnna hnjy'; // Sua senha de login no SMTP
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Tipo de criptografia (TLS recomendado)
        $mail->Port = 587; // Porta do servidor SMTP (587 para TLS, 465 para SSL)

        // Configuração dos remetentes e destinatários
        $mail->setFrom('emarpel@gmail.com', 'Buda'); // E-mail do remetente
        $mail->addAddress('emarpel@gmail.com', 'Buda'); // E-mail do destinatário

        // Conteúdo do e-mail
        $mail->isHTML(true); // Definir que o e-mail terá formato HTML
        $mail->Subject = 'Testando Email'; // Assunto do e-mail
        $mail->Body = '<h3>Testando Email</h3>'; // Corpo do e-mail em HTML
        $mail->AltBody = 'Este é o corpo do e-mail em texto puro, para clientes que não suportam HTML.'; // Corpo alternativo em texto puro

        // Enviar o e-mail
        $mail->send();
        echo 'E-mail enviado com sucesso!';
    } catch (Exception $e) {
        // Capturar erros e exibir a mensagem
        echo "Erro ao enviar o e-mail: {$mail->ErrorInfo}";
    }
?>