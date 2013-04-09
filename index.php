<?php

/* démarrer une session */
session_start();

$_SESSION['email'] = "christian.roze@free.fr";
/* si variable de session email vide, afficher demande de connexion 
if ( ($_SESSION['email'] == "") OR !isset($_SESSION['email']) ) {
  header("Location:"."controleur/clogin.php"); 
} */

/* On se connecte à la base de données si nécessaire à ce stade */
$bdd = new PDO('mysql:host=localhost;dbname=myo','root','');    

/* on inclut le bandeau du site et le menu général */
include 'vue/vbandeau.php';
include 'vue/vmenu.php';

/* on inclut le fichier controleur s'il existe et si spécifié dans l'url
   ou bien la page d'accueil sinon */
if (!empty($_GET['page']) && is_file('controleur/'.$_GET['page'].'.php')) {
	include 'controleur/'.$_GET['page'].'.php'; 
}
else {
	include 'controleur/caccueil.php'; 
}

/* on inclut le pied de page */
 include 'vue/vpied.php';

/* inutile de détruire l'objet $bdd; la fin de script php s'en charge */

?>
