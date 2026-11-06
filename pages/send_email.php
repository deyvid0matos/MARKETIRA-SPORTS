<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Obtém os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];

    // Defina o destinatário do e-mail
    $to = "giovannamig@marketeiracompany.com.br";  // Altere para o seu e-mail de destino

    // Assunto do e-mail
    $subject = "Nova Mensagem de Contato: " . $assunto;

    // Corpo do e-mail
    $body = "
    <html>
    <head>
        <title>$subject</title>
    </head>
    <body>
        <p><strong>Nome:</strong> $nome</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Telefone:</strong> $telefone</p>
        <p><strong>Assunto:</strong> $assunto</p>
        <p><strong>Mensagem:</strong></p>
        <p>$mensagem</p>
    </body>
    </html>
    ";

    // Cabeçalhos do e-mail (necessário para enviar e-mails em formato HTML)
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";
    $headers .= "From: $email" . "\r\n";

    // Envia o e-mail
    if (mail($to, $subject, $body, $headers)) {
        header("Location: email_sucesso.php");
    } else {
        header("Location: email_falha.php");
    }
} else {
    // Se não for um POST, redireciona para a página de formulário (por segurança)
    header("Location: contato.html");
    exit();
}
?>