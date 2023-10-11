<?php
class Dosen{
    private $koneksi;

    public function __construct($db){
        $this->koneksi=$db;
    }

    public function getAllDosen(){
        $query="SELECT * from dosen";
        $result=mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function createDosen($nidn, $nama, $alamat, $jenis_kelamin, $tempat_lahir){
        $query="INSERT INTO dosen (nidn, nama, alamat, jenis_kelamin, tempat_lahir) 
        VALUES('$nidn', '$nama', '$alamat', '$jenis_kelamin', '$tempat_lahir')";
        $result=mysqli_query($this->koneksi, $query);
        if($result){
            return true;
        }else{
            return false;
        }
    }

    public function getDosenById($id){
        $query="SELECT * FROM dosen where id=$id";
        $result=mysqli_query($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }

    public function updateDosen($id, $nidn, $nama, $alamat, $jenis_kelamin, $tempat_lahir){
        $query="UPDATE dosen set nidn='$nidn', nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin', tempat_lahir='$tempat_lahir' WHERE id = $id";
        $result=mysqli_query($this->koneksi, $query);
        if($result){
            return true;
        }else{
            return false;
        }
    }

    public function deleteDosen($id){
        $query = "DELETE FROM dosen WHERE id=$id";
        $result = mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        }else{
            return false;
        }
    }
}
?>