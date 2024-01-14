<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $data = json_decode(file_get_contents("php://input"), true);

   if (isset($data['action']) && $data['action'] === 'maFonctionPHP') {
      maFonctionPHP();
   }
}

function maFonctionPHP() {
   // Code de votre fonction PHP
   echo 'Fonction PHP exécutée avec succès!';
}
?>