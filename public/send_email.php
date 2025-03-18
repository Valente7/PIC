<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "joaomanuelsilveira@gmail.com"; // Coloque aqui o endereço de email para onde deseja enviar
    $subject = "Novo email de contato do site";
    $body = "Nome: $name\nEmail: $email\nMensagem:\n$message";

    if (mail($to, $subject, $body)) {
        echo "Email enviado com sucesso!";
    } else {
        echo "Ocorreu um erro ao enviar o email.";
    }
} else {
    echo "Este script não deve ser acessado diretamente.";
}
?>
