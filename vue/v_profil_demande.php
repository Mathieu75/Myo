 <?php 

 echo '<table>
  <tr align = "left">
   <th>Ressource</th>
   <th>Proprietaire</th>
   <th>description</th>
   <th>Adresse</th>
   <th>date de la reservation</th>
   <th>date de debut</th>
   <th>date de rendu</th>
   <th>Status</th>
   <th><em>Action</em></th>
  </tr>';
foreach($reservations as $reservation):	
 echo '  <tr  onclick="alert(\'OK '.$reservation["id_reservation"].' \');">
    <td>'. $reservation->get('Article')['nom'].'</td>
    <td>'. $reservation->get('Article')->get('Adherent')['prenom']." ".$reservation->get('Article')->get('Adherent')['nom'].'</td>
    <td>'. $reservation->get('Article')['description'].'</td>
    <td>'. $reservation->get('Article')->get('Adherent')['adresse'].'</td>
    <td>'. $reservation['date_reservation'].'</td>
    <td>'. $reservation['date_debut'].'</td>
    <td>'. $reservation['date_rendu'].'</td>
    <td>'. $reservation['status'].'</td>
    <td>
     <a href="?action=modify&amp;id='.$reservation["id_reservation"].'">Modifier</a>
     <a href="?action=delete&amp;id='.$reservation["id_reservation"].'">Supprimer</a>
    </td>
   </tr>';
   endforeach;
 echo '</table>';