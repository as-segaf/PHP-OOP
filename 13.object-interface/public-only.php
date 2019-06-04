<?php 

	//interface
	interface mouse{

		//metod harus public
		public function klik_kanan();
		protected function klik_kiri();
		private function scroll();
	}

	//implements
	class laptop implements mouse{

		public function klik_kanan(){
			return "klik kanan";
		}

		public function klik_kiri(){
			return "klik kiri";
		}

		public function scroll(){
			return "scroll";
		}
	}

	//instansiasi
	$barang = new laptop();

	// Fatal error: Access type for interface method mouse::klik_kiri() must be omitted 

	//conto lain
	//interface
	interface keyboard{

		//public
		public function tombol_a();
	}

	//implements
	class komputer implements keyboard{

		protected function tombol_a(){
			return "klik kanan";
		}
	}

	//instansiasi
	$gadget = new komputer();
	// Fatal error: Access level to komputer::tombol_a() must be public (as in class keyboard)
	
 ?>