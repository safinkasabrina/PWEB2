<?php
    include '../classes/databases.php';
    $db=new database();

    $aksi= $_GET['aksi'];
    if ($aksi=="tambah"){
        $db->tambah_dosen($_POST['nidn'],$_POST['nama'],$_POST['alamat'],$_POST['jenis_kelamin'],$_POST['tempat_lahir']);
        header("location:tampil_dosen.php");
    }elseif($aksi=="update"){
        $db->update($_POST['id'], $_POST['nidn'], $_POST['nama'], $_POST['alamat'], $_POST['jenis_kelamin'], $_POST['tempat_lahir']);
        header("location:tampil_dosen.php");
    }elseif($aksi=="hapus"){
        $db->hapus_dosen($_GET['id']);
        header("location:tampil_dosen.php");
    }
?>