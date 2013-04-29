<?php

/* démarrer une session */
session_start();
require_once 'global.php';

$_SESSION['email'] = "christian.roze@free.fr";
/* si variable de session email vide, afficher demande de connexion 
if ( ($_SESSION['email'] == "") OR !isset($_SESSION['email']) ) {
  header("Location:"."controleur/clogin.php"); 
} */

/* On se connecte à la base de données si nécessaire à ce stade */
$bdd = new PDO('mysql:host=localhost;dbname=myo','root','');    

/* on inclut le bandeau du site et le menu général */
include_once 'vue/v_bandeau.php';
include_once 'vue/v_menu.php';

/* on inclut le fichier controleur s'il existe et si spécifié dans l'url
   ou bien la page d'accueil sinon */
if (!empty($_GET['page']) && is_file('CTRL_DIR/'.$_GET['page'].'.php')) {
	include_once 'CTRL_DIR/'.$_GET['page'].'.php'; 
}
else {
	include_once 'controleur/c_accueil.php'; 
}

/* on inclut le pied de page */
 include_once 'vue/v_pied.php';

/* inutile de détruire l'objet $bdd; la fin de script php s'en charge */


//index page de login qui renvi vers la page d'accueil
?>
