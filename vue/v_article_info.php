 <?php 

 //var_dump($adherent->_data);

 echo '<table>';
 foreach ($article->_data as $key => $value):
 	if ($key != 'id_adherent' && $key != 'id_article' ) {
	echo '
	<tr >
		<th align = "left">'.$key.'</th>
	   <td>'. $value.'</td>
	</tr>';
 	}
   	endforeach;
   	echo '
   	<tr ;">
   	<th ></th>
	   <td align = >
		<input type="button" name="lien1" value="modifier"  
		onclick="self.location.href=\''.CTRL_DIR.'c_profil.php?action=modify&id=1 \'" 
		style="background-color:#3cb371" style="color:white; font-weight:bold"onclick></td>
  	</tr>
   	</table>';