<?php 

	//buat class
	class laptop{

		//buat method dengan parameter
		public function hidupkan_laptop($merk, $pemilik){
			return "pencet tombol ON laptop $merk milik $pemilik";
		}
	}

	//instansiasi(pembuatan objek)
	$laptop1 = new laptop();

	//tampilkan method dengan menambahkan argument
	echo $laptop1->hidupkan_laptop("asus", "saya");  //"pencet tombol ON laptop asus milik saya"
	echo "<br>";


	//contoh lain
	//buat class
	class komputer{

		//property
		public $pemilik="saya";
		public $merk="asus";

		//method
		public function hidupkan_komputer1(){
			return "pencet tombol ON komputer $this->merk milik $this->pemilik";
		}

		public function hidupkan_komputer2($merk, $pemilik){
			return "pencet tombol ON komputer $merk milik $pemilik";
		}
	}

	//objek
	$komputer_ini = new komputer();

	//tampilkan
	echo $komputer_ini->hidupkan_komputer1();  //"pencet tombol ON komputer asus milik saya"
	echo "<br>";
	echo $komputer_ini->hidupkan_komputer2("lenovo", "orang lain"); //"pencet tombol ON komputer lenovo milik orang lain"
	echo "<br>";



	//contoh lain lagi
	//buat class
	class hp{

		//method
		public function hidupkan_hp($merk="oppo", $pemilik="saya"){
			return "pencet tombol ON hp $merk milik $pemilik";
		}
	}

	//objek
	$hp_saya = new hp();

	//tampilkan
	echo $hp_saya->hidupkan_hp();  //"pencet tombol ON hp oppo milik saya"
 ?>