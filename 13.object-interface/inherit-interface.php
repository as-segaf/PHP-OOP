<?php 

	//inheritance
	interface mouse{
		public function klik_kanan();
	}

	//chlid interface
	interface mouse_gaming extends mouse{
		public function klik_kiri();
	}

	//implements
	class laptop implements mouse_gaming{
		public function klik_kanan(){
			return "klik kanan";
		}

		public function klik_kiri(){
			return "klik kiri";
		}
	}

	//instansiasi
	$barang = new laptop();

	//tampilkan 
	echo $barang->klik_kanan(); //"klik kanan"


 ?>