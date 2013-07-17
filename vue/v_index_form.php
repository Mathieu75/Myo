

<?php 

include_once('vue/v_profil_form.php');
 ?>

<section class = "SectionDroite">
 <h2>Connexion</h2>
 
<form  action="index.php?page=c_profil&action=login" method="post" >
	<table class = "table">
	<tr>
		<td><label for="nom">Nom : </label></td>
		<td> <input type="text" name="nom" id="adherent_nom" /> </td>
	</tr>
	<tr>
		<td><label for="mdp">Password : </label></td>
		<td> <input type="text" name="password" id="adherent_password" /> </td>
	</tr>
	<tr>
		<td> <input type="submit" value="login" class = "UpdateButton"/> </td>
		<td></td>
	</tr>
</table>
</form>

</section>
