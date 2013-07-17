 <section class="SectionGauche">
 
				<form action="index.php?page=c_reservation&action=save" method="post">
 				<table >
					<?php 
					 if($reservation->exists()): $id = $reservation['id_reservation	']?>
 						<th colspan="2"><h2>Modification d'une reservation</h2></th>
					 	<?php else: $id = "new"?>
 						<th colspan="2"><h2>Création d'une reservation</h2></th>
					  	<?php 
					 endif;?>
					<tr>
						<td><label for="date_debut">Emprunter le : </label></td>
						<td><input type="date" name="date_debut" id="date_debut" value="<?php echo $reservation['date_debut'] ?>" /></td>
					</tr>
					<tr>
						<td><label for="date_rendu">Rendu le : </label></td>
						<td>
							<input type="date" name="date_rendu" id="date_rendu" value="<?php echo $reservation['date_rendu'] ?>" />
							<input type="hidden" name="id_article" value="<?php echo $article['id_article'] ?>" />
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
					
					
					
					<input type="submit" value="Sauvegarder" />
					<?php if($reservation->exists()): ?>
					<input type="hidden" name="id" value="<?php echo $reservation['id_reservation'] ?>" />
					<?php endif; ?>
							
						</td>
					</tr>
 				</table>
				</form>
			</section>
			<section class = "SectionDroite"> 
 				<table>
 					<th colspan="2"><h2>information sur l'objet</h2></th>
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
</section>
