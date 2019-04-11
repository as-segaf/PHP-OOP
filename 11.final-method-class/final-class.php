<?php 


	//final class
	final class mobil{

		//method
		public function infoMobil(){
			return "ini adalah info mobil";
		}
	}

	//buat turunan class
	class motor extends mobil{

	}

	//instansisai
	$kendaraan = new motor(); //"Fatal error:  Class motor may not inherit from final class (mobil)"

 ?>