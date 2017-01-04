<?php 

	class Vojska
	{
		private $vojska;
		private $brojVojnika;
		private $naziv;
		private $brojHelta;
		private $tipVojske;
		public static $vanrednoStanje;
		public function __construct(int $brojVojnika , $tipVojske, string $naziv)
		{
			$situacija = rand(1,10);
			if ($situacija == 3) {
			
				self::$vanrednoStanje = "Doslo je do vanredne situacije deo $naziv vojske je prebacen na drugi front!";
				$brojVojnika -= $brojVojnika/4;
			}
			$this->vojska = KreiranjeVojske::kreirajVojsku($brojVojnika, $tipVojske);
			$this->brojVojnika = $brojVojnika;
			$this->naziv = $naziv;
			$this->tipVojske = $tipVojske;
			$this->ukupanBrojHelta();
		}

		public function __toString()
		{
			return $this->naziv;
		}

		public function getVojska()
		{
			return $this->vojska;
		}

		public function getBrVojnika()
		{
			return $this->brojVojnika;
		}

		public function getBrojHelta()
		{
			return $this->brojHelta;
		}

		public function napad(int $helti)
		{
			$this->brojHelta -= $helti;
		}

		public function ukupanBrojHelta()
		{
			foreach ($this->vojska as $vojnik) {
			
				$this->brojHelta += $vojnik->getHealt();
			}
			return $this->brojHelta;
		}

		public function napadni()
		{
			$vojnik = rand(0 , $this->getBrVojnika() - 1);
			$razornaMoc = $this->vojska[$vojnik]->napad();
			Borba::$poruka .= "Vojnik koristi " . $this->vojska[$vojnik]->getOruzje() . " razorne moci " . $razornaMoc . " - ";
			return $this->napad($razornaMoc);
		}
		
	}

 ?>