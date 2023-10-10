<?php
    class database{
        var $host="localhost";
        var $username="root";
        var $password="";
        var $db="akademik";
        var $koneksi;

        function __construct(){
            $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->db);
        }

        function tampil_mahasiswa(){
            $data = mysqli_query($this->koneksi, "select * from mahasiswa");
            while($d = mysqli_fetch_array($data)){
                $hasil[]=$d;
            }
            return $hasil;
        }

        function tambah_mhs($nim, $nama, $alamat, $jenis_kelamin){
            mysqli_query($this->koneksi,"insert into mahasiswa (nim,nama,alamat,jenis_kelamin) values('$nim', '$nama', '$alamat', '$jenis_kelamin')");
        }

        function edit($id){
            $data = mysqli_query($this->koneksi, "select * from mahasiswa where id='$id'");
            while($d=mysqli_fetch_array($data)){
                $hasil[]=$d;
            }
            return $hasil;
        }

        function update($id, $nim, $nama, $alamat, $jenis_kelamin){
            mysqli_query($this->koneksi, "update mahasiswa set nim='$nim', nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin' where id='$id'");
        }

        function hapus($id){
            mysqli_query($this->koneksi, "delete from mahasiswa where id='$id'");
        }

        function tampil_dosen(){
            $data = mysqli_query($this->koneksi, "select * from dosen");
            while($d = mysqli_fetch_array($data)){
                $hasil[]=$d;
            }
            return $hasil;
        }

        function tambah_dosen($nidn, $nama, $alamat, $jenis_kelamin, $tempat_lahir){
            mysqli_query($this->koneksi,"insert into dosen (nidn,nama,alamat,jenis_kelamin,tempat_lahir) values('$nidn', '$nama', '$alamat', '$jenis_kelamin', '$tempat_lahir')");
        }

        function edit_dosen($id){
            $data = mysqli_query($this->koneksi, "select * from dosen where id='$id'");
            while($d=mysqli_fetch_array($data)){
                $hasil[]=$d;
            }
            return $hasil;
        }

        function update_dosen($id, $nidn, $nama, $alamat, $jenis_kelamin, $tempat_lahir){
            mysqli_query($this->koneksi, "update dosen set nidn='$nidn', nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin', tempat_lahir='$tempat_lahir' where id='$id'");
        }

        function hapus_dosen($id){
            mysqli_query($this->koneksi, "delete from dosen where id='$id'");
        }
    }
?>