<?php
    class HomeController{
        public function home(){
            header("location:http://localhost/PWEB2/jobsheet5/index.php");
        }
        public function mahasiswa(){
            header("location:http://localhost/PWEB2/jobsheet5/views/mahasiswa/index.php");
        }
        public function tambah(){
            header("location:http://localhost/PWEB2/jobsheet5/views/mahasiswa/tambah.php");
        }
        public function edit(){
            header("location:http://localhost/PWEB2/jobsheet5/views/mahasiswa/edit.php");
        }
        public function hapus(){
            header("location:http://localhost/PWEB2/jobsheet5/views/mahasiswa/hapus.php");
        }

        public function dosen(){
            header("location:http://localhost/PWEB2/jobsheet5/views/dosen/dosen.php");
        }
    }
?>