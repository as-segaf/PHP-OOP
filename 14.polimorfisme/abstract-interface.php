<?php

  // buat abstract class
  abstract class komputer{
     // buat abstract method
     abstract public function booting_os();
  }
    
  interface mouse{
     public function double_klik();
  }
    
  class laptop extends komputer implements mouse{
     public function booting_os(){
       return "booting laptop";
     }
     public function double_klik(){
       return "double klik mouse laptop";
     }
  }
    
  class pc extends komputer implements mouse{
     public function booting_os(){
       return "booting pc";
     }
     public function double_klik(){
       return "double klik mouse pc";
     }
  }
    
  class chromebook extends komputer implements mouse{
     public function booting_os(){
       return "booting chromebook";
     }
     public function double_klik(){
       return "double klik mouse chromebook";
     }
  }
    
  // buat objek dari class diatas
  $laptop_baru = new laptop();
  $pc_baru = new pc();
  $chromebook_baru = new chromebook();
    
  // buat fungsi untuk memproses objek
  function tampilkan_proses($objek){
     return $objek->booting_os();
  }
    
  function double_klik_proses($objek){
     return $objek->double_klik();
  }
    
  // jalankan fungsi
  echo tampilkan_proses($laptop_baru);
  echo "<br />";
  echo double_klik_proses($laptop_baru);
  echo "<br />";
  echo "<br />";
    
  echo tampilkan_proses($pc_baru);
  echo "<br />";
  echo double_klik_proses($pc_baru);
  echo "<br />";
  echo "<br />";
    
  echo tampilkan_proses($chromebook_baru);
  echo "<br />";
  echo double_klik_proses($chromebook_baru);

?>