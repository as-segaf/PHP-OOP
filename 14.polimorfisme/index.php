<?php 

	//buat abstract class 
	abstract class komputer{

		//buat abstract method
		abstract function booting_os();
	}

	//inherit
	class laptop extends komputer{
		public function booting_os(){
			return "booting laptop";
		}

	}

	class pc extends komputer{
		public function booting_os(){
			return "booting pc";
		}
	}

	class chromebook extends komputer{
		public function booting_os(){
			return "booting chromebook";
		}
	}

	//instansiasi
	$laptop_baru = new laptop();
	$pc_baru     = new pc();
	$chromebook_baru = new chromebook();

	//buat function untuk memproses objek
	function tampilkan_proses($objek){
		return $objek->booting_os();
	}

	//jalankan function
	echo tampilkan_proses($laptop_baru);
	echo "<br>";
	echo tampilkan_proses($pc_baru);
	echo "<br>";
	echo tampilkan_proses($chromebook_baru);


 ?>