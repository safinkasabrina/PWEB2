<?php
    class dosen{
        var $nidn;
        var $nama;
        var $prodi;

        function tampil_nidn(){
            return "220302045";
        }
        function tampil_nama(){
            return "Nama saya adalah Finka";
        }
        function tampil_prodi(){
            return "D3 - Teknik Informatika";
        }
    }

    $nama_dosen= new dosen();

    echo $nama_dosen->tampil_nama();
?>