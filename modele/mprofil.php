<?php
echo '<br />Debut mprofil';

function lire_profil($email) {

	/* On se connecte à la base de données */
	try {
     $bdd = new PDO('mysql:host=localhost;dbname=myo','root','');  
	}
	catch (Exception $e) {
		die('Erreur: '.$s->getMessage());
	}	
	/* on fait un select */
	$reponse = $bdd->query('SELECT nom, prenom, email, adresse, cp, ville, Date_inscription, admin FROM my_user WHERE email = \''.$email.'\'');
	$donnees = $reponse->fetch();
	$reponse->closeCursor();
	
	return $donnees;
} 
/* autres fonctions 
function ecrire_profil() ... */

?>