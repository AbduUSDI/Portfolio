<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));
    
    // Validation simple
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Adresse email du destinataire
        $to = "abdu.usdi@gmail.com";
        
        // Sujet de l'email
        $subject = "Nouveau message de contact de " . $name;
        
        // Corps de l'email
        $emailBody = "Nom: $name\nEmail: $email\n\nMessage:\n$message";
        
        // En-têtes
        $headers = "From: $email" . "\r\n" .
                   "Reply-To: $email" . "\r\n" .
                   "Content-Type: text/plain; charset=UTF-8";
        
        // Envoi de l'email
        if (mail($to, $subject, $emailBody, $headers)) {
            echo "Merci, votre message a été envoyé avec succès.";
        } else {
            echo "Désolé, une erreur est survenue lors de l'envoi de votre message. Veuillez réessayer plus tard.";
        }
    } else {
        echo "Veuillez remplir tous les champs.";
    }
}