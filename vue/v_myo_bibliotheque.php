<?php 
 
 echo '<table>
  <tr align = "left">
   <th>Nom</th>
   <th>Description</th>
   <th>Adresse</th>
   <th>Date de depos</th>
   <th><em>Action</em></th>
  </tr>';
foreach($articles as $article):
 echo '  <tr  onclick="alert(\'OK '.$article["id_article"].' \');">
    <td>'. $article["nom"].'</td>
    <td>'.$article["description"].'</td>
    <td>'.$article["adresse"].'</td>
    <td>'.$article["date_depos"].'</td>
    <td>
     <a href="?action=modify&amp;id='.$article["id_article"].'">Modifier</a>
     <a href="?action=delete&amp;id='.$article["id_article"].'">Supprimer</a>
    </td>
   </tr>';
   endforeach;
 echo '</table>';