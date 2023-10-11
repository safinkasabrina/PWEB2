<?php
include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';

$database = new database();
$db = $database->getKoneksi();

if(isset($_GET['id'])){
    $id=$_GET['id'];

    $mahasiswaController= new mahasiswaController($db);
    $result=$mahasiswaController->deleteMahasiswa($id);

    if($result){
        header("location:/PWEB2/jobsheet5/mahasiswa");
        exit;
    }else{
        echo "Gagal menghapus data";
    }
}
?>