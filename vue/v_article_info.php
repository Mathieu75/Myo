 <?php 

 echo '<table>';
 foreach ($article->_data as $key => $value):
 	if ($key != 'id_adherent' && $key != 'id_article' ) {
	
		if($key == 'id_ressource'){
			echo '<tr >
				<th align = "left">ressource</th>
			   <td>'. $article->get('Ressource')['designation'].'</td>
			</tr>';

		}else{
			echo '<tr >
				<th align = "left">'.$key.'</th>
			   <td>'. $value.'</td>
			</tr>';
		}
 	}
   	endforeach;
   	echo '
   	<tr ;">
   	<th ></th>
	   <td align = \'right\' >
		<input type="button" name="lien1" value="modifier"  
		onclick="self.location.href=\'index.php?page=c_article&action=modify&id='.$article->_data['id_article'].' \'" 
		</td>
  	</tr>
   	</table>';