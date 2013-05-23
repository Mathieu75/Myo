 <?php 

 //var_dump($adherent->_data);

 echo '<table>';
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
<th ></th>
	<td align = "right">
		<input type="button" name="lien1" value="modifier"  
		onclick="self.location.href=\' index.php?page=c_profil&action=modify \'" 
		style="background-color:#3cb371" style="color:white; font-weight:bold"onclick>
	</td>
</tr>
</table>';
