	<?php
	// Navigation goes here
	include("templates/nav.php");
	// Sjekker om siden er satt hvis ikke, vis frontpage.php og så vi slipper nullpointerexception
	if(isset($_GET['page'])){
		$page = $_GET['page'];
		$pages = array("frontpage","hva", "hvordan", "kommandoer", "om", "quiz");
		// Looper gjennom sidene, og inkluderer php filen som har samme navn som i arrayen.
		foreach($pages as $key) {
			// Prøver å finne siden
			if($key == $page){ 
				// Da fant vi siden!
				include("pages/".$key.".php");
				break; // Bryter loopen
			}
		}
	} else {
		include('pages/frontpage.php'); //Hvis ikke lenken har ?page etter seg
	}
	// includes footer
	include("templates/footer.php"); ?>