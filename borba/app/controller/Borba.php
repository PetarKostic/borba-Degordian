<?php 

	class Borba
	{
		public static $poruka;
		public static $zakljucak;
		public function __construct(Vojska $vojska1, Vojska $vojska2)
		{
			$this->zapocniBorbu($vojska1, $vojska2);
		}

		public function zapocniBorbu($vojska1, $vojska2)
		{
			while ($vojska1->getBrojHelta() > 0 && $vojska2->getBrojHelta() >0) {
				$prviNapad = rand(1,2);
				if ($prviNapad == 1) {
				
					self::$poruka .= "<br>Napada $vojska1 vojska --  ";
					$vojska2->napadni();
					if ($vojska2->getBrojHelta() > 0) {

						self::$poruka .= "Preostali broj helta $vojska2 vojske je : " . $vojska2->getBrojHelta();
					}
					else {
					
						self::$poruka .= "Preostali broj helta $vojska2 vojske je : 0 ";
					}
				} else {

					self::$poruka .= "<br>Napada $vojska2 vojska --  ";
					$vojska1->napadni();
					if ($vojska1->getBrojHelta() > 0){

						self::$poruka .= "Preostali broj helta $vojska1 vojske je : " . $vojska1->getBrojHelta();
					} else {
					
						self::$poruka .= "Preostali broj helta $vojska1 vojske je : 0 ";
					}
				}
			}
			$this->ispisiZakljucak($vojska1, $vojska2);
		}

		public function ispisiZakljucak($vojska1, $vojska2)
		{
			if ($vojska1->getBrojHelta() > $vojska2->getBrojHelta()) {
			
				self::$zakljucak .= "Pobedila je $vojska1 vojska";
			} else {
			
				self::$zakljucak .= "Pobedila je $vojska2 vojska";
			}
		}
	}

 ?>