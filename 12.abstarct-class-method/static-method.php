<?php 

	//abstract bisa memiliki static method
	abstract class komputer{

		//static method
		static public function info(){
			echo "ini komputer";
		}
	}

	//tampilkan
	echo komputer::info(); //"ini komputer"


 ?>