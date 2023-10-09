<?php
    //membuat class
    class mahasiswa{
        //property public
        public $nama;
        protected $nim = "220302045";

        //public method
        function tampilkan_nama(){
            //nilai kembalian
            return "Nama Saya Finka </br>";
        }

        //membuat protected method
        protected function tampilkan_nim(){
            return $this->nim;
        }

        public function getNim(){
            return $this->tampilkan_nim();
        }
    }

    //instansiasi objek mahasiswa ke dalam variabel $mahasiswa
    $mahasiswa = new mahasiswa();

    //memanggil method tampilkan_nama
    echo $mahasiswa->tampilkan_nama();
    echo $mahasiswa->getNim();
?>