<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $data = json_decode(file_get_contents("php://input"), true);

   if (isset($data['action']) && $data['action'] === 'maFonctionPHP') {
      // Récupérez les paramètres
      $nomSender = isset($_POST['nomSender']) ? $_POST['nomSender'] : '';
      $mailSender = isset($_POST['mailSender']) ? $_POST['mailSender'] : '';
      $messageSender = isset($_POST['messageSender']) ? $_POST['messageSender'] : '';

      // Appelez votre fonction avec les paramètres
      maFonctionPHP($nomSender,$mailSender,$messageSender);
  }
}

function maFonctionPHP($nomSender,$mailSender,$messageSender) {
   // Code de votre fonction PHP
   $to = 'dev@itgcdev.fr';
    $subject = 'Prise de contact';
    $message = '$messageSender';

    // Vous pouvez ajouter des en-têtes supplémentaires si nécessaire
    $headers = 'From: contact@example.com' . "\r\n" .
               'Reply-To: expediteur@example.com' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    // Essayez d'envoyer l'e-mail
    $success = mail($to, $subject, $message, $headers);

    if ($success) {
        echo 'E-mail envoyé avec succès!';
        return true;
    } else {
        echo 'Erreur lors de l\'envoi de l\'e-mail.';
        return false;
    }
}
?>