<?php
$action = $_GET['action'];
$id =$_SESSION['id'];
switch ($action) {
	case 'create':
		echo "not implemented";
	break;
	case 'read':
   		$articles = Doctrine_Query::create()
              ->select('a.*')
              ->from('Article a')
              ->where('a.id_adherent= ?',$id)
              ->execute();
		include_once 'vue/v_ma_bibliotheque.php';

	break;
	case 'modify':
		$article = Doctrine_Core::getTable('Article')->find($id);
		include_once 'vue/v_article_info.php';

	break;
	case 'save':
		echo "not implemented";
	break;
}



?>
