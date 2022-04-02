<?php
class Mahasiswa {
   public $nim; 
   public $nama; 
   public $thn_angkatan;  
   public $prodi;
   public $ipk;

   function __construct($nim, $nama) {
       $this->nim = $nim;
       $this->nama = $nama;
   }

   function predikatIPK() {
       if ( $this->ipk < 2.0 ) {
           return 'Cukup';
       } elseif ($this->ipk >= 2.0 && $this->ipk < 3.0) {
           return 'Baik';
       } elseif ($this->ipk >= 3.0 && $this->ipk < 3.75) {
           return 'Memuaskan';
       } elseif ($this->ipk >= 3.75 && $this->ipk < 4) {
           return 'Cum Laude';
       }
   }
    
}