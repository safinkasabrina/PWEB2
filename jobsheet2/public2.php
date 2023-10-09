<?php
    //membuat class
    class mahasiswa{
        //property public dan private
        public $nama;
        private $nim = "220302045";

        //public method
        function tampilkan_nama(){
            //nilai kembalian
            return "Nama Saya Finka </br>";
        }

        //membuat protected method
        function tampilkan_nim(){
            return "NIM saya ".$this->nim;
        }
    }

    //instansiasi objek mahasiswa ke dalam variabel $mahasiswa
    $mahasiswa = new mahasiswa();

    //memanggil method tampilkan_nama
    echo $mahasiswa->tampilkan_nama();
    echo $mahasiswa->tampilkan_nim();
?>