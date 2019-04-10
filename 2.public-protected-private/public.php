<?php 

	class laptop{

		//property
		public $pemilik;

		//method
		public function hidupkan_laptop(){
			return "pencet tombol ON";
		}
	}

	//intansiasi(pembuatan objek)
	$laptop_saya = new laptop();

	//set property
	$laptop_saya->pemilik="saya sendiri";

	//tampilkan
	echo $laptop_saya->pemilik; //"saya sendiri"
	echo "<br>";
	echo $laptop_saya->hidupkan_laptop(); //"pencet tombol ON"

 ?>