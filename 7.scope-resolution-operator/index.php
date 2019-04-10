<?php 

	//class
	class komputer{

		//method
		public function info_barang(){
			return "ini komputer milik parent class";
		}
	}

	//buat turunan class
	class laptop extends komputer{

		//method
		public function info_barang(){
			return "ini laptop milik child class";
		}
	}

	//instansiasi
	$barang = new laptop();

	//tampilkan
	//yang tampil adalah method milik class laptop
	echo $barang->info_barang(); //"ini laptop milik child class"
	echo "<br>";



	//contoh lain untuk menampilkan method parent
	//class
	class mobil{

		//method
		public function info_kendaraan(){
			return "ini mobil milik parent class";
		}
	}

	//buat turunan class
	class motor extends mobil{

		//method
		public function info_kendaraan(){
			return "ini motor milik child class";
		}

		public function info_mobil(){
			return parent::info_kendaraan();
		}
	}

	//instansiasi
	$kendaraan = new motor();

	//tampilkan
	echo $kendaraan->info_mobil(); //"ini adalah mobil milik parent class"




 ?>