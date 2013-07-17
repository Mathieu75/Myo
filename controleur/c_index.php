<?php

if (!empty($_SESSION['id'] )) {
	include_once('vue/v_index_accueil.php');

}else{
	$adherent = new Adherent();
	include_once('vue/v_index_form.php');
}