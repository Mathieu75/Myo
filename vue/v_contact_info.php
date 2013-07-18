<?php 
echo '<table class="table table-striped table-hover">
  <tr align = "left">
   <th>Nom</th>
   <th>Prenom</th>
   <th>Mail</th>
   <th>Adresse</th>
   <th>Ville</th>
   <th>Action</th>
  </tr>';
foreach($adherents as $adherent):
 //echo '  <tr  onclick="alert(\'OK '.$adherent["id_adherent"].' \');">
  echo '  <tr>
    <td>'. $adherent["nom"].'</td>
    <td>'.$adherent["prenom"].'</td>
    <td>'.$adherent["mail"].'</td>
    <td>'.$adherent["adresse"].'</td>
    <td>'.$adherent["ville"].'</td>
    <td>
     <a href="index.php?page=c_profil&action=modify&id='.$adherent["id_adherent"].'">Modifier</a>
     <a href="index.php?page=c_profil&action=delete&id='.$adherent["id_adherent"].'">Supprimer</a>
    </td>
   </tr>';
   endforeach;
 echo '</table>';