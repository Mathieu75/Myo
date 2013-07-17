<?php
$action = $_GET['action'];
$id_adherent =$_SESSION['id'];
if (!empty($_GET['id'])) {
	$id =$_GET['id'];
}
switch ($action) {
	case 'create':
		$article = new Article();
		$article['date_depos']=date("Y-m-d");
		$article['id_adherent']=$id_adherent;
		$ressourceList = Doctrine_Query::create()
              ->select('r.*')
              ->from('Ressource r')
              ->where('r.id_type_ressource= ?',$_POST['id_type'])
              ->execute();
		$type = Doctrine_Core::getTable('Type_ressource')->find($_POST['id_type']);
		include_once 'vue/v_article_form.php';
	break;
	case 'choose':
		$ressourceType = Doctrine_Core::getTable('Type_ressource')->findAll();
		include_once 'vue/v_article_choix.php';
	break;
	case 'read':
		$article = Doctrine_Core::getTable('Article')->find($id);
		include_once 'vue/v_article_info.php';
	break;
	case 'modify':
		$article = Doctrine_Core::getTable('Article')->find($id);
		$ressource = $article->get('Ressource');
		$ressourceList = Doctrine_Query::create()
              ->select('r.*')
              ->from('Ressource r')
              ->where('r.id_type_ressource= ?',$ressource['id_type_ressource'])
              ->execute();
		$type = $ressource->get('Type_ressource');
		$_POST['id_type']=$ressource['id_type_ressource'];
		include_once 'vue/v_article_form.php';
	break;
	case 'delete':
		echo "not yet implemented";
	break;
	case 'save':
		$comboRessource = $_POST['comboRessourcetxt'] ;
		var_dump($comboRessource);
		var_dump($_POST);
		var_dump($_GET);
		$ressourceList = Doctrine_Query::create()
              ->select('r.*')
              ->from('Ressource r')
              ->where('r.designation= ?',$comboRessource)
              ->execute();
        if (count($ressourceList) == 0 and $comboRessource != "") {
        	$ressource = new Ressource();
        	$ressource['designation']=$comboRessource;
        	$ressource['id_type_ressource']=$_POST['id_type'];
        	//$ressource->save();
        }else{
        	$ressource = $ressourceList[0];
        }


		if ($_POST['id_article'] !="") {
			$article = Doctrine_Core::getTable('Article')->find($_POST['id_article']);
		}else{
			$article = new Article();
		}
		echo 'ma ressource'.$ressource->id_ressource;
		$article->nom = $_POST['nom'];
		$article->description = $_POST['description'];
		$article->date_depos = $_POST['date_depos'];
		$article->id_ressource= $ressource->id_ressource;
		$article->id_adherent= $id_adherent;
		//$article->save();
		//$url ="index.php?page=c_menu&action=profil_bibliotheque";
		//header('Location: '.$url);
		?>
		<script type="text/javascript">
			window.history.back();
		</script>
		<?php
		//include_once 'vue/v_profil_bibliotheque.php';
	break;
}
?>
