<?php 

	//class
	class laptop{

		//constanta
		const HARGA ="2 juta";

	}

	//tampilkan
	//pemanggilan dari luar 
	echo "harga laptop ini ".laptop::HARGA;  //"harga laptop ini 2 juta"
	echo "<br>";


	//bisa juga di panggil dari dalam variabel
	//value dari variabel harus sama dengan nama class
	$barang = "laptop";

	//tampilkan
	echo "harga laptop ini ".$barang::HARGA."(ini berasal dari variabel)";
	 //"harga laptop ini 2 juta (ini berasal dari variabel)"
	echo "<br>";	


	//bisa juga di panggil dengan objek
	//instansiasi
	$laptopSaya = new laptop();

	//tampilkan
	//pemanggilan dari objek
	echo "harga laptop ini ".$laptopSaya::HARGA."(ini berasal dari objek)";
	//"harga laptop ini 2 juta (ini berasal dari objek)"
	echo "<br>";



	//
	//contoh lain
	//mengakses dari dalam class
	//class
	class komputer{

		//const
		const HARGA = "3 juta";

		//method
		public function info(){
			return "harga komputer ini ".self::HARGA."(ini dipanggil dari dalam class)";
		}
	}

	//instansiasi
	$komputerSaya = new komputer();

	//tampilkan
	echo $komputerSaya->info(); //"harga komputer ini 3 juta (ini dipanggil dari dalam class)"
	echo "<br>";


	//
	//
	//mengakses constanta parent
	class mobil{

		//const
		const HARGA = "4 juta";

	}

	//buat turunan class dari mobil
	class motor extends mobil{

		//const
		const HARGA = "1 juta";

		//method
		public function infoMobil(){
			return "harga mobil ini ".parent::HARGA;
		}

		public function infoMotor(){
			return "harga motor ini ".self::HARGA;
		}
	}

	//instansiasi
	$kendaraan = new motor();

	//tampilkan
	echo $kendaraan->infoMobil(); //"harga mobil ini 4 juta"
	echo "<br>";
	echo $kendaraan->infoMotor(); //"harga motor ini 1 juta"
 ?>