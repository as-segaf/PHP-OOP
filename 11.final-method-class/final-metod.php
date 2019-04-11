<?php 


	class komputer{

		//final method
		//tidak bisa overridden
		final public function info(){
			return "ini adalah info komputer";
		}
	}

	//buat class turunan
	class laptop extends komputer{

		//method 
		public function info(){
			return "ini adalah info laptop";
		}
	}

	//instansiasi
	$barang = new laptop(); //"Fatal error:  Cannot override final method komputer::info()"




 ?>