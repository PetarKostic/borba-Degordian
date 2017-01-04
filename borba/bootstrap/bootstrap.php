<?php 

	require('vendor/autoload.php');
	$tipVojske = require('config/vojska.php');
	
	if (isset($_GET['army1']) && !empty($_GET['army1']) && !empty($_GET['army2']) && isset($_GET['army2'])) {

		$army1 = (int) $_GET['army1'];
		$army2 = (int) $_GET['army2'];

		if ($army1 <= 0 || $army2 <= 0) {

			$error = "Uneti tekst mora biti broj";
		} else {
			
			$vojska1 = new Vojska($army1 , $tipVojske, "army1");
			$vojska2 = new Vojska($army2, $tipVojske, "army2");
		    new Borba($vojska1, $vojska2);
		}	
	} else {

	    $error =  "Unesite u url-u broj army1 vojske i army2";
	  }
	
	
	

 ?>