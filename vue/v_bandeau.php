
<head>
<title></title>
<script>
message = history.forward();
if(message = 'undefined'){
	document.write( '<a href="javascript:history.forward()"><img  src="vue/img/btnNext2.png" /></a>' ); 
}else{
   message = "Il reste " + (window.history.length - 1);
}
</script>

</head>
<body>
"{%message}"
<a href="v_bandeau.php"><img  src="vue/img/logo.png" /></a>
<a href="v_bandeau.php"><img  src="vue/img/btnHome.png" /></a>
<a href="javascript:history.back()"><img  src="vue/img/btnBefore.png" /></a>
<a href="javascript:history.forward()"><img  src="vue/img/btnNext.png" /></a>

<input type="text" name="recherche" />

<select name="choix">
	<option value="01">MYO</option>
	<option value="02">MINE</option>
</select>
<input type="submit" value="Rechercher" />
