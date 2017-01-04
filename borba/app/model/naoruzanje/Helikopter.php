<?php 

	class Helikopter implements OruzjeInterface
	{
		private $razornaMoc;
		public function __construct(int $razornaMoc)
		{
			$this->razornaMoc = $razornaMoc;
		}

		public function getRazornaMoc()
		{
			return $this->razornaMoc;
		}

		public function __toString()
		{
			return " helikopter ";
		}
	}

 ?>