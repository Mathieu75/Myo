
  
<?php
 if(!empty($action)){
  
 echo '
  <section>
  <form action="index.php?page=c_profil&action=save" method="post">';
 }else{?>
  <section class = "SectionGauche">

  <h2>Devenir adherent</h2>

  <form action="index.php?page=c_profil&action=submit" method="post">'
 <?php 
}
 ?>
 <table class = "table">
  <tr>
    <td>
      <label for="adherent_nom"> <b> Nom </b></label>
    </td>
    <td>
      <input type="text" name="nom" id="adherent_nom" value="<?php echo $adherent['nom'] ?>" />
    </td>
  </tr>
  <tr>
    <td>
      <label for="adherent_prenom"><b>Prenom</b></label>
    </td>
    <td>
      <input type="text" name="prenom" id="adherent_prenom" value="<?php echo $adherent['prenom'] ?>" />
    </td>
  </tr>
  <tr>
    <td>
      <label for="adherent_mail"><b>Mail</b> </label>
    </td>
    <td>
      <input type="text" name="mail" id="adherent_mail" value="<?php echo $adherent['mail'] ?>" />
    </td>
  </tr>
  <tr>
    <td>
      <label for="adherent_adresse"><b>Adresse</b> </label>
    </td>
    <td>
      <input type="text" name="adresse" id="adherent_adresse" value="<?php echo $adherent['adresse'] ?>" />
    </td>
  </tr>
  <tr>
    <td>
      <label for="adherent_ville"><b>Ville</b> </label>
    </td>
    <td>
      <input type="text" name="ville" id="adherent_ville" value="<?php echo $adherent['ville'] ?>" />
    </td>
  </tr>

 <?php  
 if(!empty($action)){
  echo ' 
<tr>
    <td >
    <input type="submit" value="Sauvegarder" class = "UpdateButton"/>
    </td>
    <td></td>
  </tr>
 
  ';
 }else{
  echo ' 
<tr>
    <td>
      <label for="password"><b>Password</b> </label>
    </td>
    <td>
     <input type="password" name="password" id="password" />
    </td>
  </tr>

 <tr>
    <td>
      <input type="submit" value="Submit"class = "UpdateButton"/>
    </td>
    <td></td>
  </tr>';
 }
 ?>
 </table>
  <?php if($adherent->exists()): ?>
   <input type="hidden" name="id" value="<?php echo $adherent['id_adherent'] ?>" />
  <?php endif; ?>
 </form>
</section>