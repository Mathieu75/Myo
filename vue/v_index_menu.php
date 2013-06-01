<?php
require_once(dirname(__FILE__)."/../config/global.php");
echo '

<ul>
 <li><a href="index.php?page=c_menu&action=myo_bibliotheque">MYO</a>
 <li><a href="index.php?page=c_menu&action=profil_info">Mon profil</a>
	<ul>
	 <li><a href="index.php?page=c_menu&action=profil_bibliotheque">Bibliotheque</a>
	 <li><a href="index.php?page=c_menu&action=profil_emprunt">Emprunts</a>
	 <li><a href="index.php?page=c_menu&action=profil_demande">Mes demandes</a>
	</ul>
 </li>
  <li><a href="index.php?page=c_menu&action=contact">Contact</a>
</ul>';
