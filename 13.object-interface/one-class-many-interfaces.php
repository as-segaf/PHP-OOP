<?php 

	//interface
	interface mouse{
		public function klik_kanan();
	}

	//interface
	interface keyboard{
		public function tombol_a();
	}

	//implements
	class laptop implements mouse, keyboard{
		public function klik_kanan(){
			return "klik kanan";
		}

		public function tombol_a(){
			return "tombol a";
		}
	}

	//instansiasi
	$barang = new laptop();

	//tampilkan
	echo $barang->klik_kanan();
	echo "<br>";
	echo $barang->tombol_a();

 ?>