<?php
require_once(dirname(__FILE__)."/../config/global.php");
//include WEB_DIR.'/v_menu.php';
$action ="";
$action = $_GET['action'];
$id_adherent =$_SESSION['id'];
if (!empty($_GET['id'])) {
	$id =$_GET['id'];
}
switch ($action) {
	case 'create':
		$adherent = new Adherent();
		include_once 'vue/v_profil__form.php';
	break;
	case 'read':
		$adherent = Doctrine_Core::getTable('Adherent')->find($id_adherent);
		//var_dump($adherent);
		include_once 'vue/v_profil_info.php';

	break;

	case 'modify':
		$adherent = Doctrine_Core::getTable('Adherent')->find($id_adherent);
		include_once 'vue/v_profil_form.php';

	break;
	case 'delete':
   		$articles = Doctrine_Core::getTable('Article')->findByAdherent($id);
   		foreach ($articles as $article) {
   			$reservations = Doctrine_Core::getTable('Reservation')->findByArticle($article['id_article']);
   			foreach ($reservations as $reservation) {
	   			$reservation->delete();
   			}
   			$article->delete();
   		}
		$adherent = Doctrine_Core::getTable('Adherent')->find($id);
		$adherent->delete();
		$url = "index.php?page=c_menu&action=contact";
		header('Location: '.$url);
	break;
	case 'save':
		$adherent = Doctrine_Core::getTable('Adherent')->find($_POST['id_adherent']);
		$adherent->nom = $_POST['nom'];
		$adherent->prenom = $_POST['prenom'];
		$adherent->mail = $_POST['mail'];
		$adherent->adresse = $_POST['adresse'];
		$adherent->ville = $_POST['ville'];

  		$adherent->save(); "doSave()";
		
		$_SESSION['nom'] = $adherent['nom'];
		$_SESSION['prenom'] = $adherent['prenom'];
		
		include_once 'vue/v_profil_info.php';
	break;
	case 'submit':
		$adherent = new Adherent();
		$adherent->nom = $_POST['nom'];
		$adherent->prenom = $_POST['prenom'];
		$adherent->mail = $_POST['mail'];
		$adherent->adresse = $_POST['adresse'];
		$adherent->ville = $_POST['ville'];
		$adherent->mdp = $_POST['password'];
		$adherent->droit = 0;

		$adherent->save(); "doSave()";

		$_SESSION['id'] = $adherent['id_adherent'];
		$_SESSION['droit'] = $adherent['droit'];
		$_SESSION['nom'] = $adherent['nom'];
		$_SESSION['prenom'] = $adherent['prenom'];
  		header('Location: index.php'); 
	break;
	case 'login':
		$q = Doctrine_Query::create()
              ->from('Adherent a')
              ->where('a.nom = ?',$_POST['nom'])
              ->andWhere('a.mdp = ?',$_POST['password']);
		$adherents = $q->fetchArray();

		$_SESSION['id'] = $adherents[0]['id_adherent'];
		$_SESSION['droit'] = $adherents[0]['droit'];
		$_SESSION['nom'] = $adherents[0]['nom'];
		$_SESSION['prenom'] = $adherents[0]['prenom'];
  		header('Location: index.php'); 
	break;
}



?>
