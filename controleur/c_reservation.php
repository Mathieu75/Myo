<?php
$action = $_GET['action'];
$id_adherent =$_SESSION['id'];
if (!empty($_GET['id'])) {
$id =$_GET['id'];
}
switch ($action) {
	case 'create':
		$article = Doctrine_Core::getTable('Article')->find($id);
		$reservation = new Reservation();

		include_once 'vue/v_reservation_form.php';
	break;
	case 'accept':
		$reservation = Doctrine_Core::getTable('Reservation')->find($id);
		$reservation->status= 'ACCEPT';
		$reservation->save();
		include_once 'vue/v_profil_demande.php';
	break;
	case 'refuse':
		$reservation = Doctrine_Core::getTable('Reservation')->find($id);
		$reservation->status= 'ANNULER';
		$reservation->save();
		include_once 'vue/v_profil_demande.php';
	break;
	case 'delete':
		$reservation = Doctrine_Core::getTable('Reservation')->find($id);
		$reservation->delete();
		//$url ="index.php?page=c_menu&action=profil_bibliotheque";
		//header('Location: '.$url);
	break;
	case 'save':
		$reservation = new Reservation();
		$reservation->date_reservation = date("Y-m-d");
		$reservation->date_debut =  $_POST['date_debut'];
		$reservation->date_rendu =  $_POST['date_rendu'];
		$reservation->id_article= $_POST['id_article'];
		$reservation->status= 'CREER';
		$reservation->id_adherent= $id_adherent;
		$reservation->save();
		include_once 'vue/v_profil_demande.php';
	break;
}
?>
