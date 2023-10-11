<?php
include_once '../../config.php';
include_once '../../controllers/DosenController.php';

$database = new database();
$db = $database->getKoneksi();

if(isset($_GET['id'])){
    $id=$_GET['id'];

    $dosenController= new dosenController($db);
    $result=$dosenController->deleteDosen($id);

    if($result){
        header("location:/PWEB2/jobsheet5/dosen");
        exit;
    }else{
        echo "Gagal menghapus data";
    }
}
?>