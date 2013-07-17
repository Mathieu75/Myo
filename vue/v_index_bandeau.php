<header >
		<div>
			<input type="image" src="vue/img/baniere.png">
		</div>

		<div class = "bandeauGauche">
			<a  href="index.php"><img  src="vue/img/my_logo.png" /></a>
			<a href="index.php"><img  src="vue/img/Home-Button.png" /></a>
		</div>
		<div class = "bandeauDroite">
			<form class = "bandeauform" action="index.php?page=c_bandeau&action=recherche" method="post">
				<table class = "bandeauTable">
					<tr>
						<td>
							<input type="text" name="recherche"/>
							<input type="submit" value="Rechercher" class = "UpdateButton"/>
						</td>
						<td align= "right">
							<input type="button" value="Deconnecter" onclick="self.location.href=' index.php?page=c_bandeau&action=logout '" class = "DeleteButon">
						</td>
					</tr>
				</table>
			</form>
		</div>


</header>

