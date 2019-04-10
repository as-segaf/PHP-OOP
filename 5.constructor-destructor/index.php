<?php 

	//class
	class laptop{

		//property
		private $pemilik="saya sendiri";
		private $merk="asus";

		//method
		//constructor akan otomatis di panngil ketika proses intansiasi
		public function __construct(){
			echo "Ini berasal dari constructor class laptop";
		}

		public function hidupkan_laptop(){
			return "pencet tombol On laptop $this->merk milik $this->pemilik";
		}

		//destrutor akan otomatis di panggil sesaat sebelum objek dihapus
		public function __destruct(){
			echo "Ini berasal dari destructor class laptop";
		}
	}

	//intansiasi(pembuatan objek)
	$laptop_saya = new laptop();

	//tampilkan

	//"ini berasal dari constructor class laptop"
	echo "<br>";
	echo $laptop_saya->hidupkan_laptop(); //"pencet tombol On laptop asus milik saya sendiri"
	echo "<br>";
	//"ini berasal dari destructor class laptop"

	//menghapus objek
	unset($laptop_saya);
	// //$laptop_saya=null;

	//tampilkan tulisan setelah objek dihapus
	echo "<br>";
	echo "tulisan ini keluar setelah objek di hapus";
	echo "<br>";
	echo "<br>";



	//contoh lain
	//class
	class komputer{

		//property
		private $pemilik;
		private $merk;

		//method
		public function __construct($pemilik, $merk){
			$this->pemilik=$pemilik;
			$this->merk=$merk;
		}

		public function hidupkan_komputer(){
			return "pencet tombol ON komputer merk $this->merk milik $this->pemilik";
		}
	}

	//instansiasi
	$komputer_saya = new komputer("saya","asus");

	//tampilkan
	echo $komputer_saya->hidupkan_komputer(); //"pencet tombol ON komputer asus milik saya"
	echo "<br>";

	//instansiasi
	$komputer_orang = new komputer("orang", "lenovo");

	//tampilkan
	echo $komputer_orang->hidupkan_komputer(); //"pencet tombol ON komputer lenovo milik orang"
	echo "<br>";

 ?>