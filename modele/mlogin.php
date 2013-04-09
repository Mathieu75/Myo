<?php>
/* modèle du login
Récupère les données de la vue vlogin.php
Accède à la base et retourne
  l'email de la personne loggée
ou
  nul si erreur logon
*/
/* récupération des données postées */
$email = $_POST['email'];
$passe = $_POST['passe'];

/* accès base */


/* mise à jour variable de session si ok */
$_SESSION['email'] = $email;
header("Location:"."index.php");

?>