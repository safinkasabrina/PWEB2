<?php
    include '../classes/databases.php';
    $db=new database();

    $aksi= $_GET['aksi'];
    if ($aksi=="tambah"){
        $db->tambah_mhs($_POST['nim'],$_POST['nama'],$_POST['alamat'],$_POST['jenis_kelamin']);
        header("location:tampil_mhs.php");
    }elseif($aksi=="update"){
        $db->update($_POST['id'], $_POST['nim'], $_POST['nama'], $_POST['alamat'], $_POST['jenis_kelamin']);
        header("location:tampil_mhs.php");
    }elseif($aksi=="hapus"){
        $db->hapus($_GET['id']);
        header("location:tampil_mhs.php");
    }
?>