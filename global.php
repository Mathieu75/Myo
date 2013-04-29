<?php

/* démarrer une session */
$_SESSION['serveur_path'] = 'http://localhost/Myo';
define('LOC_DIR',  $_SESSION['serveur_path']);
define('WEB_DIR',  LOC_DIR.'/vue');
define('CTRL_DIR', LOC_DIR.'/controleur');
?>