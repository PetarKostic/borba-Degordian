<?php 
	
	class KreiranjeVojske 
	{
		public static function kreirajVojsku(int $brojVojnika , $tipVojske)
		{	
		    $vojska = [];
			for ($i = 0; $i < $brojVojnika; $i++) {
				$broj = rand(0, count($tipVojske) - 1);
				$vojnik = new Vojnik($tipVojske[$broj]);
				array_push($vojska, $vojnik);
			}	
			return $vojska;
		}
	}

 ?>