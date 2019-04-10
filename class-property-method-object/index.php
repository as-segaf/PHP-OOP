<?php 

	//class
	class laptop{

		//property
		var $pemilik;
		var $merk;
		var $warna;

		//method
		function hidupkan_laptop(){
			return "pencet tombol hidup laptop ini";
		}

		function matikan_laptop(){
			return "pencet tombol mati laptop ini";
		}
	}

	//objek (proses intansiasi)
	$laptop_saya = new laptop();

	//set property
	$laptop_saya->pemilik="saya sendiri";
	$laptop_saya->merk="asus";
	$laptop_saya->warna="hitam";

	//tampilkan property
	echo $laptop_saya->pemilik;
	echo "<br>";
	echo $laptop_saya->merk;
	echo "<br>";
	echo $laptop_saya->warna;
	echo "<br>";

	//tampilkan method
	echo $laptop_saya->hidupkan_laptop(); //"pencet tombol hidup laptop ini"
	echo "<br>";
	echo $laptop_saya->matikan_laptop(); //"pencet tombol mati laptop ini"



 ?>