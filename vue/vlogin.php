<?php
/* formulaire de login
Demande la saisie d'un email et d'un mot de passe
L'appui sur le bouton Connexion retourne ces données au modèle mlogin.php
*/
?>
<form method="post" action="../modele/mlogin.php">

<p>Entrez votre email et votre mot de passe</p>
<input type="text" name="email" />
<input type="password" name="passe" />
<input type="submit" value="Valider" name="valide">
</form>