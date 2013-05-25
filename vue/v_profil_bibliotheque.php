<?php 
 
    //var_dump( $articles);

 echo '<table>
  <tr align = "left">
   <th>Nom</th>
   <th>description</th>
   <th>Adresse</th>
   <th><em>date de depos</em></th>
  </tr>';
foreach($articles as $article):
 echo '  <tr  onclick="location.href=\'index.php?page=c_article&action=read&id='.$article["id_article"].'\';">
    <td>'. $article["nom"].'</td>
    <td>'.$article["description"].'</td>
    <td>'.$article["adresse"].'</td>
    <td>'.$article["date_depos"].'</td>
    <td>
     <a href="index.php?page=c_article&action=modify&amp;id='.$article["id_article"].'">modifier</a>
    <a href="index.php?page=c_article&action=delete&amp;id='.$article["id_article"].'">Supprimer</a>
    </td>
   </tr>';
   endforeach;
 echo '</table>';