<?php
include_once '../../config.php';
include_once '../../controllers/DosenController.php';

$database = new database();
$db = $database->getKoneksi();

if(isset($_GET['id'])){
    $id=$_GET['id'];

    $dosenController = new DosenController($db);
    $dosenData = $dosenController->getDosenById($id);

    if ($dosenData){
        if (isset($_POST['submit'])){
            $id = $_POST['id'];
            $nidn = $_POST['nidn'];
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $tempat_lahir = $_POST['tempat_lahir'];

            $result = $dosenController->updateDosen($id, $nidn, $nama, $alamat, $jenis_kelamin, $tempat_lahir);

            if($result){
                header("location:/PWEB2/jobsheet5/dosen");
            }else{
                header("location:edit_dosen");
            }
        }
    }else{
        echo "Mahasiswa tidak ditemukan";
    }
}
?>
<!-- <h3>Edit Data Dosen</h3> -->
<!-- <form action="proses_dosen.php?aksi=update" method="post">
<?php
if($dosenData){
    ?>
    <form action="" method="post">
        <?php
        foreach($dosenData as $d => $value){
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
<h3>Edit Data Dosen</h3>
<div class="px-3 border" style="width:50%">
    <?php
    if($dosenData){
    ?>
    <form action="" method="post">
        <?php
        foreach($dosenData as $d => $value){
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