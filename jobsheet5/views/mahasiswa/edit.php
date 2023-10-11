<?php
include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';

$database = new database();
$db = $database->getKoneksi();

if(isset($_GET['id'])){
    $id=$_GET['id'];

    $mahasiswaController = new MahasiswaController($db);
    $mahasiswaData = $mahasiswaController->getMahasiswaById($id);

    if ($mahasiswaData){
        if (isset($_POST['submit'])){
            $id = $_POST['id'];
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $jenis_kelamin = $_POST['jenis_kelamin'];

            $result = $mahasiswaController->updateMahasiswa($id, $nim,$nama, $alamat, $jenis_kelamin);

            if($result){
                header("location:/PWEB2/jobsheet5/mahasiswa");
            }else{
                header("location:edit");
            }
        }
    }else{
        echo "Mahasiswa tidak ditemukan";
    }
}
?>
<!-- <h3>Edit Data Mahasiswa</h3> -->
<!-- <form action="proses_mhs.php?aksi=update" method="post">
<?php
if($mahasiswaData){
    ?>
    <form action="" method="post">
        <?php
        foreach($mahasiswaData as $d => $value){
            ?>
            <table border="0">
                <tr>
                    <td width="100">
                        <?php
                        echo $d;
                        ?>
                    </td>
                    <td>
                        <input type="text" name="<?php echo $d ?>" value="<?php echo $value ?>">
                    </td>
                </tr>
                <?php
        }
            ?>
            //untuk membuat tombol submit, diletakkan diluar perulangan -->
            <!-- <tr>
                <td></td>
                <td>
                    <input type="submit" clas="btn btn-primary" name="submit" value="Simpan">
                </td>
            </tr>
            </table>
    </form>
</div>
    <?php
}
?>
</form> -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<h3>Edit Data Mahasiswa</h3>
<div class="px-3 border" style="width:50%">
    <?php
    if($mahasiswaData){
    ?>
    <form action="" method="post">
        <?php
        foreach($mahasiswaData as $d => $value){
        ?>
        <div class="mb-3">
            <label for="<?php echo $d ?>" class="form-label"><?php echo $d ?></label>
            <input type="text" class="form-control" id="<?php echo $d ?>" name="<?php echo $d ?>" value="<?php echo $value ?>">
        </div>
        <?php
        }
        ?>
        <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
    </form>
    <?php
    }
    ?>
</div>