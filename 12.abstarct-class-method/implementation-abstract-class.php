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
	echo $kendaraan->infoMobil(); //"ini mobil"
	echo "<br>";
	echo $kendaraan->infoMotor(); //"ini motor"



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

	//"Fatal error: Class laptop contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (komputer::info)"
 ?>
