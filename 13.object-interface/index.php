<?php 

	//object interface
	interface mouse{

		public function klik_kanan();
		public function klik_kiri();
	}

	//implements
	class laptop implements mouse{

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
	echo "<br>";
	echo $barang->klik_kiri(); //"klik kiri"
	echo "<br>";


	//contoh lain
	//error
	interface keyboard{
		public function tombol_a();
		public function tombol_b();
	}

	//implements
	class komputer implements keyboard{
		public function tombol_a(){
			return "tombol a";
		}
	}

	//instansiasi
	$gadget = new komputer();
	// Fatal error: Class komputer contains 1 abstract method
	// and must therefore be declared abstract or implement the
	// remaining methods (keyboard::tombol_b)
 ?>