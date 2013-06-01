 <body>
 <?php 
 if($reservation->exists()): $id = $reservation['id_reservation	']?>
 	<h1>Modification d'une reservation</h1>
 	<?php else: $id = "new"?>
  	<h1>Création d'une reservation</h1>
  	<?php 
 endif;?>
 <div >
 	<table>
 		<tr>
 			<th>Formulaire de reservation</th>
 			<th>information sur l'articl</th>
 		</tr>
 		<tr>
 			<td>
				<form action="index.php?page=c_reservation&action=save" method="post">
					<label for="date_debut">Emprunter le : </label><br />
					<input type="date" name="date_debut" id="date_debut" value="<?php echo $reservation['date_debut'] ?>" /><br />
					<br />
					<label for="date_rendu">Rendu le : </label><br />
					<input type="date" name="date_rendu" id="date_rendu" value="<?php echo $reservation['date_rendu'] ?>" /><br />
					<br />

					<input type="hidden" name="id_article" value="<?php echo $article['id_article'] ?>" />
					<input type="submit" value="Sauvegarder" />
					<?php if($reservation->exists()): ?>
					<input type="hidden" name="id" value="<?php echo $reservation['id_reservation'] ?>" />
					<?php endif; ?>
				</form>
			</td>
 			<td>
 				<table>

					 <?php
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
					?>
				</table >
			</td>
			
		</tr>
	</table>
</div>
</body>
