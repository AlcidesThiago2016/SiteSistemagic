<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados enviados pelo formulário
    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    // Validação básica
    if (!$email) {
        die("E-mail inválido! Verifique o endereço inserido.");
    }

    // Configuração do e-mail
    $to = "sistemagicsolucoes@gmail.com"; // Substitua pelo seu e-mail
    $subject = "Mensagem de Contato - $name";
    $body = "Nome: $name\nE-mail: $email\nTelefone: $phone\nMensagem:\n$message";

    // Cabeçalhos adicionais
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Envia o e-mail
    if (mail($to, $subject, $body, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar a mensagem. Tente novamente mais tarde.";
    }
} else {
    echo "Método de requisição inválido.";
}
?>
