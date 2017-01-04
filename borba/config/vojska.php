<?php 
	
	return 
	[
		new Pesadinac(require('config/pesadijaNaoruzanje.php')),
		new VojnikMornarice(require('config/mornaricaNaoruzanje.php')),
		new Pilot(require('config/avijacijaNaoruzanje.php')),	
	];



 ?>