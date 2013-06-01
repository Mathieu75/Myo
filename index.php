<?php
require_once("config/global.php");
include_once('vue/v_index_bandeau.php');
include_once('vue/v_index_menu.php');
session_start();

$adherent = Doctrine_Core::getTable('Adherent')->find(1);
$_SESSION['id'] = $adherent['id_adherent'];
$_SESSION['droit'] = $adherent['droit'];
$_SESSION['nom'] = $adherent['nom'];
$_SESSION['prenom'] = $adherent['prenom'];
if (!empty($_GET['page'])) {
  include_once('controleur/'.$_GET['page'].'.php');
}