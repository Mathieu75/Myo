 <?php 

 //var_dump($adherent->_data);

 echo '<table class = "table">';
 foreach ($adherent->_data as $key => $value):
 	if ($key != 'id_adherent' &&$key != 'droit' ) {
	echo '
	<tr>
		<th align = "left">'.$key.'</th>
	   <td>'. $value.'</td>
	</tr>';
 	}
endforeach;
echo '
<tr>
	<td >
		<input type="button" name="lien1" value="Modifier"  
		onclick="self.location.href=\' index.php?page=c_profil&action=modify \'" 
		class = "UpdateButton">
	</td>
	<td></td>
</tr>
</table>';
