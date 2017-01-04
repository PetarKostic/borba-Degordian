<?php 

	class Pesadinac implements InstrukcijaInterface
	{
		private $oruzje;
		public function __construct(array $oruzje)
		{
			$this->oruzje = IzborOruzja::izaberiOruzje($oruzje);
		}

		public function getOruzje()
		{
			return $this->oruzje;
		}
	}

 ?>