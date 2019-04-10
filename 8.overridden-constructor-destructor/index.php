<?php 

	//class
	class komputer{

		//constructor
		public function __construct(){
			echo "ini constructor dari class komputer <br>";
		}

		//destructor
		public function __destruct(){
			echo "<br> ini destructor dari class komputer <br>";
		}
	}

	//buat turunan class dari class komputer
	class laptop extends komputer{

	}

	//buat turunan class dari class laptop
	class chromebook extends laptop{

	}

	//instansiasi
	$gadget = new chromebook();

	//tampilkan
	echo "hello world";


	//
	
 ?>