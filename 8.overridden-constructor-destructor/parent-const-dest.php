<?php 

	//class
	class komputer{

		//constructor
		public function __construct(){
			echo "ini constructor dari class komputer <br>";
		}

		//destructor
		public function __destruct(){
			echo "ini destructor dari class komputer <br>";
		}
	}

	//buat turunan dari class komputer
	class laptop extends komputer{

		//constructor
		public function __construct(){
			parent::__construct();
			echo "ini constructor dari class laptop <br>";
		}

		//destructor
		public function __destruct(){
			echo "ini destructor dari class laptop <br>";
			parent::__destruct();
		}	
	}

	//buat turunan dari class laptop
	class chromebook extends laptop{

		//constructor
		public function __construct(){
			parent::__construct();
			echo "ini constructor dari class chromebook <br>";
		}

		//destructor
		public function __destruct(){
			echo "ini destructor dari class chromebook <br>";
			parent::__destruct();
		}
	}


	//instansiasi
	$gadget = new chromebook();

	//tampilkan
	echo "hello world <br>";

 ?>