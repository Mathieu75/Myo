<?php 
echo '<table>
  <tr align = "left">
   <th>Nom</th>
   <th>Prenom</th>
   <th>Adresse</th>
   <th>Ville</th>
   <th>Action</th>
  </tr>';
foreach($adherents as $adherent):
 echo '  <tr  onclick="alert(\'OK '.$adherent["id_adherent"].' \');">
    <td>'. $adherent["nom"].'</td>
    <td>'.$adherent["prenom"].'</td>
    <td>'.$adherent["adresse"].'</td>
    <td>'.$adherent["ville"].'</td>
    <td>
     <a href="?action=modify&amp;id='.$adherent["id_adherent"].'">Modifier</a>
     <a href="?action=delete&amp;id='.$adherent["id_adherent"].'">Supprimer</a>
    </td>
   </tr>';
   endforeach;
 echo '</table>';