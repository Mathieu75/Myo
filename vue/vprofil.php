<h4>Votre profil actuel</h4>
<?php

echo '<div class="profil">';
// liste des labels de champs
$label = array("Nom","Prenom","Email","Adresse","Code postal","Ville","Inscription","Admin");

// affichage des labels et champs associés
for ($i=0;$i<8;$i++) {
 echo "<br />$label[$i] = ".$profil[$i];
}
echo "</div>";

?>