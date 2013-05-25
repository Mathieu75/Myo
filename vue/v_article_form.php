<body>
 <?php if($article->exists()): $id = $article['id_adherent']?>
  <h1>Modification d'un article</h1>
 <?php else: $id = "new"?>
  <h1>Création d'un article</h1>

 <?php endif; ?>

 
 <form name='formulaire' id='myForm' action="index.php?page=c_article&action=save" method="post">
  <table>
    <tr>
      <td><label for="article_nom">Nom : </label></td>
      <td><input type="text" name="nom" id="article_nom" value="<?php echo $article['nom'] ?>" /></td>
    </tr>

  <tr>
    <td><label for="article_description">Description : </label></td>
    <td><input type="text" name="description" id="article_description" value="<?php echo $article['description'] ?>" /></td>
  </tr>
  <tr>
    <td><label for="article_date_depos">Date de depos : </label></td>
    <td><input type="date" name="date_depos" id="article_date_depos" value="<?php echo $article['date_depos'] ?>" /></td>
  </tr>
  <tr>
    <td><label for="article_adresse">Adresse : </label></td>
    <td><input type="text" name="adresse" id="article_adresse" value="<?php echo $article['adresse'] ?>" /></td>
  </tr>

  <tr>
    <input type="hidden" id="cbRessource" name="cbRessource" value="" />

<script src="vue/script/ComboBox.js"></script>
<script>

  document.write("<td>Ressource :<\/td>");

  document.write("<td>");

</script>

  <script>
  var comboRessource=new ComboBox("comboRessource",document.getElementById("myForm"),document.getElementById("cbRessource"))
  //var comboRessource=new ComboBox("comboRessource",document.forms['formulaire'])

  <?php 
  foreach ($ressources as $key => $value) {
  ?>
    var jsvalue = <?=json_encode($value['designation'])?>;
    comboRessource.add(new ComboBoxItem(jsvalue,jsvalue));
  <?php 
  }
  ?>
  comboRessource.value = <?=json_encode($article->get('Ressource')['designation'])?>;
  comboRessourcetxt.value = <?=json_encode($article->get('Ressource')['designation'])?>;


</script>

  <script>
  document.write("<\/td>");
  </script>
  </tr>
  <tr>
    <input type="submit" value="Sauvegarder"/>
    <?php if($article->exists()): ?>
      <input type="hidden" name="id" value="<?php echo $article['id_adherent'] ?>" />
    <?php endif; ?>
  </tr>
  </table>
 </form>

 <a href="index.php?page=c_profil&action=read">Retour à la liste</a>
<?php 
 ?>
</body>