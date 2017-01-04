<?php 

	class Vojnik
	{
		private $tipVojnika;
		private $helti = 100;

		public function __construct(InstrukcijaInterface $tipVojnika)
		{
			$this->tipVojnika = $tipVojnika;
		}

		public function getOruzje()
		{
			return $this->tipVojnika->getOruzje();
		}

		public function getHealt()
		{
			return $this->helti;
		}

		public function napad()
		{
			return $this->getOruzje()->getRazornaMoc();
		}
	}

 ?>