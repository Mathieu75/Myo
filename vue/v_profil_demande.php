 <?php 

 echo '<table class="table table-striped table-hover">
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
 echo '  <tr  onclick="location.href = \'index.php?page=c_article&action=read&id='.$reservation["id_article"].'\'">
    <td>'. $reservation->get('Article')['nom'].'</td>
    <td>'. $reservation->get('Article')->get('Adherent')['prenom']." ".$reservation->get('Article')->get('Adherent')['nom'].'</td>
    <td>'. $reservation->get('Article')['description'].'</td>
    <td>'. $reservation->get('Article')->get('Adherent')['adresse'].'</td>
    <td>'. $reservation['date_reservation'].'</td>
    <td>'. $reservation['date_debut'].'</td>
    <td>'. $reservation['date_rendu'].'</td>
    <td>'. $reservation['status'].'</td>
    <td>
     <a href="index?page=c_profil&action=accept&id='.$reservation["id_reservation"].'">Accepter</a>
     <a href="index?page=c_profil&action=refuse&id='.$reservation["id_reservation"].'">Refuser</a>
    </td>
   </tr>';
   endforeach;
 echo '</table>';