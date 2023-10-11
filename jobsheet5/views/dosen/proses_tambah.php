<?php
include_once '../../config.php';
include_once '../../controllers/DosenController.php';

$database= new database();
$db=$database->getKoneksi();

if(isset($_POST['submit'])){
    $nidn=$_POST['nidn'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $tempat_lahir=$_POST['tempat_lahir'];

    $dosenController=new DosenController($db);
    $result=$dosenController->createDosen($nidn, $nama, $alamat, $jenis_kelamin, $tempat_lahir);

    if($result){
        header("location:dosen");
    }else{
        header("location:tambah_dosen");
    }
}
?>