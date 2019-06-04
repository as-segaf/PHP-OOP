<?php 

	//method normal error
	interface mouse{
		public function klik_kanan(){
			return "klik kanan";
		}
	}

	//instansiasi
	$barang = new mouse(); //"Fatal error: Interface function mouse::klik_kanan() cannot contain body"



 ?>