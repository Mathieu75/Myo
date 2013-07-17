<nav>
<?php  

echo '

<div id="accordion" >

	<h3 class = "ui-state-disabled"><a href="index.php?page=c_menu&action=myo_bibliotheque">MYO</a></h3>
		<div></div>
	<h3><a href="index.php?page=c_menu&action=profil_info">Mon profil</a></h3>
		<div>
			<ul>
				<li><a href="index.php?page=c_menu&action=profil_bibliotheque">Bibliotheque</a>
				<li><a href="index.php?page=c_menu&action=profil_emprunt">Emprunts</a>
				<li><a href="index.php?page=c_menu&action=profil_demande">Mes demandes</a>
			</ul>
		</div>
	<h3 class = "ui-state-disabled"><a href="index.php?page=c_menu&action=contact">Contact</a></h3>
		<div></div>

</div>
<script> 

$(function() {
   //Turn the div into an accordion
   $("#accordion").accordion({
   	icons: null,
    collapsible: true,
    active: false,
    heightStyle: "content",
	alwaysOpen: false,  
    autoHeight: false,  
    header: \'h3\'
   });
 
   //capture the click on the a tag
   $("#accordion h3 a").click(function() {
      window.location = $(this).attr(\'href\');
      return false;
   });
             
});
var $span = $("#accordion_atiflar > div > span:empty");
$span.parent(\'div\').hide();
$span.parent(\'div\').prev(\'h3\').hide();

$(\'.disable\').addClass("ui-state-disabled");
var accordion = $( "#accordion" ).data("accordion");
    accordion._std_clickHandler = accordion._clickHandler;
    accordion._clickHandler = function( event, target ) {
    var clicked = $( event.currentTarget || target );
    if (! clicked.hasClass("ui-state-disabled"))
        this._std_clickHandler(event, target);
    };

</script> 

</nav>';

