<section>
<?php 
 
 echo '<table class="table table-striped table-hover">
  <tr align = "left">
   <th>Nom</th>
   <th>Description</th>
   <th>Adherent</th>
   <th>Adresse</th>
   <th>Date de depos</th>
   <th><em>Action</em></th>
  </tr>';
foreach($articles as $article):
 echo '  <tr  onclick="location.href=\'index.php?page=c_article&action=read&id='.$article["id_article"].'\';">
    <td>'. $article["nom"].'</td>
    <td>'.$article["description"].'</td>
    <td>'.$article->get("Adherent")["prenom"]." ".$article->get("Adherent")["nom"].'</td>
    <td>'.$article->get('Adherent')["adresse"].'</td>
    <td>'.$article["date_depos"].'</td>
    <td>';
    if ($article['id_adherent']==$_SESSION['id']) {
      echo '   <a href="index.php?page=c_article&action=read&amp;id='.$article["id_article"].'">voir</a>';
    }else {
      echo '   <a href="index.php?page=c_reservation&action=create&amp;id='.$article["id_article"].'">Emprunter</a>';
    }
    echo ' 
    </td>
   </tr>';
   endforeach;
 echo '

 </table>
</section>

 ';