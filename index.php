<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title></title>
  <link rel="stylesheet" type="text/css" href="css/Style.css">


  <link rel="stylesheet" href="css/ComboBox.css">
  <script src="js/ComboBox.js"></script>

	<link rel="stylesheet" href="css/jquery-ui-1.10.3.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

  <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css" />
  <script type="bootstrap/js/bootstrap.js"></script>

  
</head>

<body>
<div id='main'>
<?php
require_once("config/global.php");
include_once('vue/v_index_bandeau.php');
include_once('vue/v_index_menu.php');
session_start();

echo '<section>';
if (!empty($_GET['page'])) {
	include_once('controleur/'.$_GET['page'].'.php');
}else{
	include_once('controleur/c_index.php');
}
echo '</section>
</div>
</body>';