<?php
    include '../classes/databases.php';
    $db=new database();
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<h3>Edit Data Mahasiswa</h3>
</br>
<a class="btn btn-success" href="tampil_mhs.php">KEMBALI</a>
</br></br>

<div class="px-3 border" style="width:50%">
<form action="proses_mhs.php?aksi=update" method="post">
    <?php
    foreach($db->edit($_GET['id']) as $d){
    ?>
    <div class="mb-3">
        <label for="nim" class="form-label">NIM</label>
        <input type="text" id="nim" class="form-control" name="nim" placeholder="Masukkan NIM" value="<?php echo $d['nim'] ?>">
        <input type="hidden" id="nim" class="form-control" name="id" placeholder="Masukkan NIM" value="<?php echo $d['id'] ?>">
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" id="nama" class="form-control" name="nama" placeholder="Masukkan Nama" value="<?php echo $d['nama'] ?>">
    </div>
    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea id="alamat" class="form-control" name="alamat" rows="5" placeholder="Masukkan Alamat"><?php echo $d['alamat'] ?></textarea>
    </div>
    <div class="mb-3">
        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
        <select id="jenis_kelamin" class="form-select" name="jenis_kelamin">
            <option value="Pilih" >Pilih</option>
            <option value="Perempuan" <?php if($d['jenis_kelamin'] == 'Perempuan') echo 'selected'; ?>>Perempuan</option>
            <option value="Laki-laki" <?php if($d['jenis_kelamin'] == 'Laki-laki') echo 'selected'; ?>>Laki-laki</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>

    <!-- <table>
        <tr>
            <td>NIM</td>
            <td>
                <input type="hidden" name="id" value="<?php echo $d['id']?>">
                <input type="text" name="nim" value="<?php echo $d['nim']?>">
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
        </tr>
        <tr>
            <td></td>
            <td><input class="btn btn-primary" type="submit" value="Simpan"></td>
        </tr>
    </table> -->
<?php
}
?>
</form>