<?php 



	//class turunan harus mengimplementasikan abstract class
	//abstarct class
	abstract class mobil{

		//abstract method
		abstract function infoMobil();
	}

	//buat turunan class dari mobil
	class motor extends mobil{

		//implementasi
		public function infoMobil(){
			return "ini mobil";
		}

		//method normal
		public function infoMotor(){
			return "ini motor";
		}
	}

	//instansiasi
	$kendaraan = new motor();

	//tampilkan
	echo $kendaraan->infoMobil();
	echo "<br>";
	echo $kendaraan->infoMotor();



	//error
	//abstract class
	abstract class komputer{

		//abstract method
		abstract function info();
	}

	//buat turunan class
	class laptop extends komputer{

		//method
		public function detail(){
			return "ini laptop";
		}
	}

	//instansiasi
	$barang = new laptop();

 ?>
