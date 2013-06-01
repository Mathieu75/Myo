<body>
 <?php 

 echo '
 <table>';
 foreach ($ressourceType as $type):
 	echo '
 <tr>
 	<td>
 	<form action="index.php?page=c_article&action=create" method="post">
 	 <input type="hidden" name="id_type" value="'.$type["id_type_ressource"].'" />
     <input type="submit" name="rType" id="rType" value="'.$type["designation"].'">
 	</form>
 	</td>
 </tr>
 ';
endforeach;
echo '
</table>
</body>';

