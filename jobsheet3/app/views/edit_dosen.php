<?php
    include '../classes/databases.php';
    $db=new database();
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<h3>Edit Data Dosen</h3>
</br>
<a class="btn btn-success" href="tampil_dosen.php">KEMBALI</a>
<form action="proses_dosen.php?aksi=update" method="post">
    <?php
    foreach($db->edit_dosen($_GET['id']) as $d){
    ?>
    <table>
        <tr>
            <td>NIDN</td>
            <td>
                <input type="hidden" name="id" value="<?php echo $d['id']?>">
                <input type="text" name="nidn" value="<?php echo $d['nidn']?>">
        </td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" value="<?php echo $d['nama']?>"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>
                <textarea name="alamat" cols="30" rows="5"><?php echo $d['alamat'] ?></textarea>
        </td>
        <tr>
            <td>Jenis Kelamin</td>
            <td><input type="text" name="jenis_kelamin" value="<?php echo $d['jenis_kelamin']?>"></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td><input type="text" name="tempat_lahir" value="<?php echo $d['tempat_lahir']?>"></td>
        </tr>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" class="btn btn-primary" value="Simpan"></td>
        </tr>
    </table>
<?php
}
?>
</form>