<?php 


	//buat class
	class komputer{

		//property
		public $pemilik="saya sendiri";

		//method
		public function hidupkan_komputer(){
			return "pencet tombol ON komputer milik $this->pemilik";
		}
	}

	//instansiasi
	$komputer_saya = new komputer();

	//tampilkan
	echo $komputer_saya->hidupkan_komputer(); //"pencet tombol ON komputer milik saya sendiri"
	echo "<br>";

	//set property
	$komputer_saya->pemilik="orang lain";

	//tampilkan
	echo $komputer_saya->hidupkan_komputer(); //"pencet tombol ON komputer milik orang lain"
	echo "<br>";






	//buat class
	class laptop{

		//property
		public $pemilik="saya sendiri";

		//method
		public function hidupkan_laptop(){
			return "pencet tombol ON laptop milik $this->pemilik";
		}

	}

	//instansiasi(pembuatan objek)
	$laptop1 = new laptop();
	$laptop2 = new laptop();

	//set property untuk laptop2
	$laptop2->pemilik="orang lain";


	//tampilkan
	echo $laptop1->hidupkan_laptop(); //"pencet tombol ON laptop milik saya sendiri"
	echo "<br>";
	echo $laptop2->hidupkan_laptop(); //"pencet tombol ON laptop milik orang lain"


 ?>