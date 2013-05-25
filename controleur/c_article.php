<?php
$action = $_GET['action'];
$id_adherent =$_SESSION['id'];
if (!empty($_GET['id'])) {
$id =$_GET['id'];
}
switch ($action) {
	case 'create':
		echo "not yet implemented";
	break;
	case 'read':
		$article = Doctrine_Core::getTable('Article')->find($id);
		include_once 'vue/v_article_info.php';
	break;
	case 'modify':
		$article = Doctrine_Core::getTable('Article')->find($id);
		$ressource = $article->get('Ressource');
		$ressources = Doctrine_Query::create()
              ->select('r.*')
              ->from('Ressource r')
              ->where('r.id_type_ressource= ?',$ressource['id_type_ressource'])
              ->execute();
		$type = $ressource->get('Type_ressource');
		include_once 'vue/v_article_form.php';
	break;
	case 'delete':
		echo "not yet implemented";
	break;
	case 'save':
		echo "not yet implemented";
		$comboRessource = $_POST['cbRessource'] ;
		var_dump($comboRessource);
		var_dump($_POST);
		var_dump($_GET);
	break;
}
?>
