<?php
include_once '../global.php'; 

include_once WEB_DIR.'/v_menu.php';
include_once WEB_DIR.'/v_bandeau.php';
//include WEB_DIR.'/v_menu.php';
echo WEB_DIR;
/* démarrer une session */
session_start();
echo '<br />Debut c_profil';

/* si variable de session email renseignée, ... */

/* on inclut le modèle du profil */
//include '../modele/mprofil.php';

// ici diverses actions contrôleur extraites du modèle

/* on récupère le profil de l'utilisateur */
/*************************
$email = $_SESSION['email'];
$profil = lire_profil($email);
//**/
$_SESSION['email'] = 'email_test';
$email = $_SESSION['email'];
$profil = lire_profil($email);
/* on inclut la vue du profil et on affiche ce profil */
include '../vue/v_profil.php';

?>
