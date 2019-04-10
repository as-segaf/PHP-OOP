<?php 

	// //overridden contructor and destructor
	class mobil{

		//contructor
		public function __construct(){
			echo "ini constructor dari class mobil <br>";
		}

		//destructor
		public function __destruct(){
			echo "ini destructor dari class mobil <br>";
		}
	}

	//buat class turunan dari class mobil
	class motor extends mobil{

		//contructor
		public function __construct(){
			echo "<br> ini constructor dari class motor <br>";
		}

		//destructor
		public function __destruct(){
			echo "<br> ini destructor dari class motor <br>";
		}
	}

	//buat turunan dari class motor
	class sepeda extends motor{

		//contructor
		public function __construct(){
			echo "<br> ini constructor dari class sepeda <br>";
		}

		//destructor
		public function __destruct(){
			echo "<br> ini destructor dari class sepeda <br>";
		}
	}

	//instansiasi
	$kendaraan = new sepeda();

	//tampilkan
	echo "hello world";



 ?>