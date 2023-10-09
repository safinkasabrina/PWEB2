<?php
    //membuat class
    class mahasiswa{
        //menuliskan property
        var $nim;
        var $nama;
        var $alamat;

        //method untuk menampilkan nama
        function tampil_nama(){
            //isi method
            return "Nama saya adalah Finka";
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
?>