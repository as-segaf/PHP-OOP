<?php 

	//class induk(parent)
	class induk_ayam{

		//property
		public $mata;
		public $kaki;
		public $mulut;

		//method
		public function lihat_pemilik(){
			return "punya saya";
		}
	}

	// wariskan/turunkan class induk_ayam ke class anak_ayam
	class anak_ayam extends induk_ayam{

		//method
		public function info(){
			return "jumlah mata: $this->mata, jumlah kaki: $this->kaki, jumlah mulut: $this->mulut ";
		}
	}

	//instansiasi
	$ayam_saya = new anak_ayam();

	//set property
	$ayam_saya->mata="2";
	$ayam_saya->kaki="2";
	$ayam_saya->mulut="1";

	//tampilkan
	echo $ayam_saya->lihat_pemilik();
	echo "<br>";
	echo $ayam_saya->info();
	echo "<br>";
	echo "<br>";



	//contoh lain
	//class induk
	class komputer{

		//method
		protected function info_komputer(){
			return "ini komputer saya";
		}
	}

	//turunan dari class komputer
	class laptop extends komputer{

		//method
		protected function info_laptop(){
			return "ini laptop saya";
		}
	}

	//turunan lagi dari class laptop
	class chromebook extends laptop{

		//method
		protected function info_chromebook(){
			return "ini chromebook saya";
		}

		public function info_gadget(){
			return $this->info_komputer()."<br>".$this->info_laptop()."<br>".$this->info_chromebook();
		}
	}

	//instansiasi dari class chromebook
	$barang = new chromebook();

	//tampilkan
	echo $barang->info_gadget();


 ?>