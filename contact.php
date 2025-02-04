<?php
if($_SERVER["REQUEST_METHOD"] == "GET") {
    $nom = $_GET['nom'];
    $email = $_GET['email'];
    $message = $_GET['message'];

    $to = "rayan34080azagagh@gmail.com"; // Remplacez cette adresse par votre adresse e-mail
    $subject = "Portfolio - Nouveau message de $nom";
    $body = "Nom : $nom\nEmail : $email\n\nMessage :\n$message";
    $headers = "From: $email";

    if(mail($to, $subject, $body, $headers)) {
        echo "Message envoyé avec succès!";
    } else {
        echo "Échec de l'envoi du message.";
    }
}
?>
