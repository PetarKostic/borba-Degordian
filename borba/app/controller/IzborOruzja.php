<?php 

	class IzborOruzja
	{
		public static function izaberiOruzje(array $nizOruzja)
		{
			$broj = rand(0,count($nizOruzja)-1);
			return $nizOruzja[$broj];
		}
	}


 ?>