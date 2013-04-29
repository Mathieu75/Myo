<?php
include_once '../global.php'; 
echo '
<head>
<title></title>


</head>
<body>

<a href="Header.php"><img  src="'.WEB_DIR.'/img/logo.png" /></a>
<a href="Header.php"><img  src="'.WEB_DIR.'/img/btnHome.png" /></a>
<a href="Header.php"><img  src="'.WEB_DIR.'/img/btnBefore.png" /></a>
<a href="Header.php"><img  src="'.WEB_DIR.'/img/btnNext.png" /></a>

<input type="text" name="recherche" />

<select name="choix">
	<option value="01">MYO</option>
	<option value="02">MINE</option>
</select>
<input type="submit" value="Rechercher" />';
