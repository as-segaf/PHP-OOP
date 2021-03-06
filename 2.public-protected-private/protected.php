<?php


	//buat class baru
	class komputer{

		//property
		protected $pemilik="saya sendiri";

		//method
		protected function hidupkan_komputer(){
			return "pencet tombol ON";
		}

		//buat method lagi untuk mengakses protected
		public function tampilkan_pemilik(){
			return "komputer ini milik $this->pemilik";
		}

		public function cara_menghidupkan(){
			return "untuk menghidupkan komputer ". $this->hidupkan_komputer();
		}

	}

	//instansiasi(pembuatan objek)
	$komputer_saya = new komputer();

	//tampilkan
	echo $komputer_saya->tampilkan_pemilik(); //"komputer ini milik saya sendiri"
	echo "<br>";
	echo $komputer_saya->cara_menghidupkan(); //"untuk menghidupkan komputer pencet tombol ON"
	echo "<br>";
	echo "<br>";





	//buat class turunan (class turunan juga bisa mengakses)
	class komputerlain extends komputer{

		//method
		public function tampilkan_owner(){
			return "komputer ini juga milik $this->pemilik";
		}

		public function cara_menyalakan(){
			return "untuk menyalakan komputer yang ini, " . $this->hidupkan_komputer();
		}
	}


	//instansiasi(pembuatan objek)
	$komputer_saya_juga	= new komputerlain();

	//tampilkan
	echo $komputer_saya_juga->tampilkan_owner();  //"komputer ini juga milik saya sendiri"
	echo "<br>";
	echo $komputer_saya_juga->cara_menyalakan(); //"untuk menyalakan komputer yang ini pencet tombol ON"
	echo "<br>";
	echo "<br>";
 




	//contoh lain
	//buat class baru untuk mencoba error
	class laptop{

		//property
		protected $pemilik;

		//method
		protected function hidupkan_laptop(){
			return "pencet tombol ON";
		}
	}

	//intansiasi(pembuatan objek)
	$laptop_saya = new laptop();

	//set property akan menghasilkan error
	$laptop_saya->pemilik="saya sendiri"; // Fatal error: Cannot access protected property laptop::$pemilik


	//menampilkan property akan menghasilkan error
	//
	//walalupun tidak set property, tapi ini terhitung memanggil dari luar
	//objek posisinya berada di luar class
	//inilah maksud dari protected tidak bisa di akses dari luar 
	echo $laptop_saya->pemilik;
	echo "<br>";


	//ini berlaku juga untuk method
	//tampilkan method akan menghasilkan error
	echo $laptop_saya->hidupkan_laptop();

?>
