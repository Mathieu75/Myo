<body>
 <?php if($adherent->exists()): $id = $adherent['id_adherent']?>
  <h1>Modification d'un adherent</h1>
 <?php else: $id = "new"?>
  <h1>Création d'un adherent</h1>

 <?php endif; ?>
 
 <form action="index.php?page=c_profil&action=save" method="post">
  <label for="adherent_nom">Nom : </label><br />
  <input type="text" name="nom" id="adherent_nom" value="<?php echo $adherent['nom'] ?>" /><br />
  <br />
  <label for="adherent_prenom">Prenom : </label><br />
  <input type="text" name="prenom" id="adherent_prenom" value="<?php echo $adherent['prenom'] ?>" /><br />
  <br />
  <label for="adherent_adresse">Adresse : </label><br />
  <input type="text" name="adresse" id="adherent_adresse" value="<?php echo $adherent['adresse'] ?>" /><br />
  <br />
  <label for="adherent_ville">Ville : </label><br />
  <input type="text" name="ville" id="adherent_ville" value="<?php echo $adherent['ville'] ?>" /><br />
  <br />

  <input type="submit" value="Sauvegarder" />
  <?php if($adherent->exists()): ?>
   <input type="hidden" name="id" value="<?php echo $adherent['id_adherent'] ?>" />
  <?php endif; ?>
 </form>
 <a href="index.php?page=c_profil&action=read">Retour à la liste</a>
</body>