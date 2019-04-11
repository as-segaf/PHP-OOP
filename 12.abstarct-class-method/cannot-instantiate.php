<?php 
	
	//abstract class tidak bisa di instansiasi
	abstract class komputer{

		//method
		abstract function info();
	}

	//instansiasi
	$barang = new komputer(); //"Fatal error:  Uncaught Error: Cannot instantiate abstract class komputer"


 ?>