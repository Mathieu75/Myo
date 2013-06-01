<body>
 <?php if($article->exists()): $id = $article['id_article']?>
  <h1>Modification d'un article</h1>
 <?php else: $id = "new"?>
  <h1>Création d'un article</h1>

 <?php endif; ?>

 
 <form name='formulaire' id='myForm' action="index.php?page=c_article&action=save" method="post">
  <table id = "myTable">
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

  <script src="vue/script/ComboBox.js"></script>

  <script>
  var comboRessource=new ComboBox("comboRessource",document.forms['formulaire'])

  <?php 
  foreach ($ressourceList as $key => $value) {
  ?>
    var jsid = <?=json_encode($value['designation'])?>;
    var jsvalue = <?=json_encode($value['designation'])?>;
    comboRessource.add(new ComboBoxItem(jsid,jsvalue));
  <?php 
  }
  ?>
  comboRessource.value = <?=json_encode($article->get('Ressource')['designation'])?>;
  comboRessourcetxt.value = <?=json_encode($article->get('Ressource')['designation'])?>;


  </script>

  <script>
  var table=document.getElementById("myTable");
  var row=table.insertRow(4);
  var cell1=row.insertCell(0);
  var cell2=row.insertCell(1);
  cell1.innerHTML="Ressource :";
  cell2.appendChild(document.getElementById("comboRessource"));
  </script>

  </tr>
  <tr>
    <td></td>
    <td align = "right">
    <input type="submit" value="Sauvegarder"/>
     <input type="hidden" name="id" value="<?php echo $article['id_adherent'] ?>" />
     <input type="hidden" name="idRessource" value="<?php echo $article['id_ressource'] ?>" />
     <input type="hidden" name="id_type" value="<?php echo $_POST['id_type'] ?>" />
     <input type="hidden" name="id_article" value="<?php echo $article['id_article']?>" />
    </td>
  </tr>
  </table>
 </form>
</body