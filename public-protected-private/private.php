<?php 

	class komputer{

		//prpoerty
		private $pemilik="saya sendiri";

		//method
		private function hidupkan_komputer(){
			return "pencet tombol ON";
		}

		//method agar bisa mengkases private
		public function tampilkan_pemilik(){
			return "komputer ini milik $this->pemilik";
		}

		public function cara_menyalakan(){
			return "untuk menyalakan komputer " . $this->hidupkan_komputer();
		}
	}



	//turunan tidak bisa mengakses private
	//membuat class turunan
	class laptop extends komputer{

		//method
		public function tampilkan_owner(){
			return "laptop ini milik $this->pemilik";
		}

		public function cara_menghidupkan(){
			return "untuk menyalakan laptop " . $this->hidupkan_komputer();
		}
	}


	//instansiasi(pembuatan objek)
	$komputer_saya = new komputer();
	$laptop_saya   = new laptop();

	//tampilkan
	echo $komputer_saya->tampilkan_pemilik(); //"komputer ini milik saya sendiri"
	echo "<br>";
	echo $komputer_saya->cara_menyalakan(); //"untuk menyalakan komputer ini pencet tombol ON"
	echo "<br>";
	echo $laptop_saya->tampilkan_owner(); // "laptop ini milik" "Notice: Undefined property: laptop::$pemilik"
	echo "<br>";
	echo $laptop_saya->cara_menghidupkan(); //"Fatal error: Uncaught Error: Call to private method komputer::hidupkan_komputer() from context 'laptop'"


 ?>