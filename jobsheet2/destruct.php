<?php
    //membuat class
    class mahasiswa{
        //menuliskan property
        var $nim;
        var $nama;
        var $alamat;

        //construct akan dan tetap dieksekusi atau dipanggil pertama kali
        function __construct(){
            echo "Saya Mahasiswa Teknik Informatika";
            echo "<br>";
        }

        function __destruct(){
            echo "Politeknik Negeri Cilacap";
        }

        //method untuk menampilkan nama
        function tampil_nama(){
            //isi method
            return "Nama saya adalah Finka </br>";
        }

        function tampil_mahasiswa(){
            return "Tidak akan menjadi joki atau menggunakan jasa joki sampai lulus kuliah </br>";
        }

        //method untuk menampilkan alamat
        function tampil_alamat(){
            //isi method
        }
    }

    //membuat objek nama_mahasiswa
    $nama_mahasiswa= new mahasiswa();

    //menampilkan objek ke layar
    echo $nama_mahasiswa->tampil_nama();
    echo $nama_mahasiswa->tampil_mahasiswa();
?>