<?php 

	//class
	class komputer{

		//property
		public $pemilik="saya";
		public $merk="asus";

		//static property
		public static $harga;

		//static method
		public static function tampilkan_info(){
			return "ini adalah static method";
		}
	}

	//set static property
	komputer::$harga="2 juta";

	//tampilkan
	echo "harga komputer ini ".komputer::$harga; //"harga komputer ini 2 juta"
	echo "<br>";
	echo komputer::tampilkan_info(); //"ini adalah static method"


	//contoh lain
	//mengakses dari dalam class
	//class
	class laptop{

		//property
		public $pemilik="saya";

		//static property
		public static $harga;

		//static method
		public static function tampilkan_harga(){
			return "harga laptop ini ".self::$harga;
		}
	}

	//set static property
	laptop::$harga="3 juta";

	//tampilkan
	echo "<br>";
	echo laptop::tampilkan_harga(); //"harga laptop ini 3 juta"
	echo "<br>";



	//contoh lain
	//mengakses parent property dan method
	//class
	class mobil{

		//static method
		protected static function tampilkan_info(){
			return "ini adalah mobil";
		}
	}

	//buat turunan class dari mobil
	class motor extends mobil{

		//static method
		private static function tampilkan_detail(){
			return "ini adalah motor";
		}

		public static function tampilkan_semua(){
			echo parent::tampilkan_info();
			echo "<br>";
			echo self::tampilkan_detail();
		}
	}

	echo motor::tampilkan_semua();
 ?>