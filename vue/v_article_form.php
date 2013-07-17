<section>
 
 <form name='formulaire' id='myForm' action="index.php?page=c_article&action=save" method="post">
  <table class = "table">
    <tr>
      <td><label for="article_nom"><b>Nom</b> </label></td>
      <td><input type="text" name="nom" id="article_nom" value="<?php echo $article['nom'] ?>" /></td>
      <td></td>
    </tr>

  <tr>
    <td><label for="article_description"><b>Description</b> </label></td>
    <td><input type="text" name="description" id="article_description" value="<?php echo $article['description'] ?>" /></td>
    <td></td>
  </tr>
  <tr>
    <td><label for="article_date_depos"><b>Date de depos</b> </label></td>
    <td><input type="date" name="date_depos" id="article_date_depos" value="<?php echo $article['date_depos'] ?>" /></td>
    <td></td>
  </tr>

  <tr>
     <td><label for="article_ressource"> <b>Ressource</b> </label></td>
   <td><input type="text" name="comboRessourcetxt" value="<?php echo $article->get('Ressource')['designation'] ?>" /></td>
    <td>
      <select name="comboRessource">
          <option value="'.$value.'"></option>
      <?php 
            foreach ($ressourceList as $value) {
              echo '
          <option value="'.$value["designation"].'">'.$value["designation"].'</option>
              ';
      }
      ?>
      </select>
    </td>
    </tr>
  <tr>
     <td colspan = "2">
    <input type="submit" value="Sauvegarder" class = "UpdateButton"/>
     <input type="hidden" name="id" value="<?php echo $article['id_adherent'] ?>" />
     <input type="hidden" name="idRessource" value="<?php echo $article['id_ressource'] ?>" />
     <input type="hidden" name="id_type" value="<?php echo $_POST['id_type'] ?>" />
     <input type="hidden" name="id_article" value="<?php echo $article['id_article']?>" />
    </td>
    <td></td>
  </tr>
  </table>
 </form>

</section>