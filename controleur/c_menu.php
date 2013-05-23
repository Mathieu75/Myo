<?php
require_once(dirname(__FILE__)."/../config/global.php");
//include WEB_DIR.'/v_menu.php';
$action ="";
$action = $_GET['action'];
$id = $_SESSION['id'];
//$type = $_GET['type'];
switch ($action) {
	case 'profil_info':
		$adherent = Doctrine_Core::getTable('Adherent')->find($id);
		include_once 'vue/v_profil_info.php';
	break;
	case 'profil_emprunt':
		$reservations = Doctrine_Query::create()
              ->select('r.*')
              ->from('Reservation r')
              ->leftJoin('r.Article a')
              ->where('a.id_adherent= ?',$id)
              ->execute();

		include_once 'vue/v_profil_emprunt.php';
	break;
	case 'profil_demande':
   		$reservations = Doctrine_Core::getTable('Reservation')->findByAdherent($id);
		include_once 'vue/v_profil_demande.php';
	break;
	case 'profil_bibliotheque':
		
   		$articles = Doctrine_Core::getTable('Article')->findByAdherent($id);
		include_once 'vue/v_profil_bibliotheque.php';
	break;
	case 'myo_bibliotheque':
		$articles = Doctrine_Core::getTable('Article')->findall();
		include_once 'vue/v_myo_bibliotheque.php';
	break;
	case 'contact':
		$adherents = Doctrine_Core::getTable('Adherent')->findall();
		include_once 'vue/v_contact.php';
	break;
}



?>
