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
	case 'read':
		echo "not yet implemented";
	break;
	case 'modify':
		echo "not yet implemented";
	break;
	case 'delete':
		echo "not yet implemented";
	break;
	case 'save':
		echo "not yet implemented";
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
