<?php 
 
    //var_dump( $articles);

 echo '<table>
  <tr align = "left">
   <th>Nom</th>
   <th>Description</th>
   <th>Adresse</th>
   <th><em>Date de depos</em></th>
   <th><em>Type</em></th>
   <th><em>Action</em></th>
  </tr>';
foreach($articles as $article):
 echo '  <tr  onclick="location.href=\'index.php?page=c_article&action=read&id='.$article["id_article"].'\';">
    <td>'. $article["nom"].'</td>
    <td>'.$article["description"].'</td>
    <td>'.$article["adresse"].'</td>
    <td>'.$article["date_depos"].'</td>
    <td>'.$article->get('Ressource')["designation"].'</td>
    <td>
      <a href="index.php?page=c_article&action=modify&amp;id='.$article["id_article"].'">modifier</a>
      <a href="index.php?page=c_article&action=delete&amp;id='.$article["id_article"].'">Supprimer</a>
    </td>
   </tr>';
   endforeach;
 echo '


<tr>
  <td colspan="6" align = "right">
    <input type="button" name="lien1" value="nouveau"  
    onclick="self.location.href=\' index.php?page=c_article&action=choose \'" 
    style="background-color:#3cb371" style="color:white; font-weight:bold"onclick>
  </td>
</tr>

 </table>';