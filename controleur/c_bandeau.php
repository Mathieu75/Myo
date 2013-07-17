<?php 
$action = $_GET['action'];

switch ($action) {
	case 'logout':
		$_SESSION['id'] = null;
		$_SESSION['droit'] = null;
		$_SESSION['nom'] = null;
		$_SESSION['prenom'] = null;
  		header('Location: index.php'); 
	break;
	case 'recherche':
		$recherche = "%".$_POST['recherche']."%";
		$articles = Doctrine_Query::create()
              ->select('a.*')
              ->from('Article a')
              ->where('a.description like ?',$recherche)
              ->orWhere('a.nom like ?',$recherche)
              ->execute();
		include_once 'vue/v_myo_bibliotheque.php'; 
	break;
}

 ?>