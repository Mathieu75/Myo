<?php
/* démarrer une session */
session_start();
echo '<br />Debut cprofil';

/* si variable de session email renseignée, ... */

/* on inclut le modèle du profil */
include '../modele/mprofil.php';

// ici diverses actions contrôleur extraites du modèle

/* on récupère le profil de l'utilisateur */
$email = $_SESSION['email'];
$profil = lire_profil($email);

/* on inclut la vue du profil et on affiche ce profil */
include '../vue/vprofil.php';

?>
