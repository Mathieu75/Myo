<?php
require_once(dirname(__FILE__)."/../config/global.php");
//include WEB_DIR.'/v_menu.php';
$action ="";
$action = $_GET['action'];
$id = $_SESSION['id'];
switch ($action) {
	case 'create':
		$adherent = new Adherent();
		include_once 'vue/v_profil__form.php';
	break;
	case 'read':
		$adherent = Doctrine_Core::getTable('Adherent')->find($id);
		//var_dump($adherent);
		include_once 'vue/v_profil_info.php';

	break;

	case 'modify':
		$adherent = Doctrine_Core::getTable('Adherent')->find($id);
		include_once 'vue/v_profil__form.php';

	break;
	case 'save':
		$adherent = Doctrine_Core::getTable('Adherent')->find($_POST['id']);
		$adherent->nom = $_POST['nom'];
		$adherent->prenom = $_POST['prenom'];
		$adherent->adresse = $_POST['adresse'];
		$adherent->ville = $_POST['ville'];
		$adherent->save(); "doSave()";
		include_once 'vue/v_profil_info.php';
	break;
}



?>
