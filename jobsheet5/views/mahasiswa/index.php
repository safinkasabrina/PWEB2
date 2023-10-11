<?php
    //memanggil class model database
    include_once '../../config.php';
    include_once '../../controllers/MahasiswaController.php';
    require '../../index.php';

    //instansiasi class database
    $database=new database;
    $db = $database->getKoneksi();

    $mahasiswaController = new MahasiswaController($db);
    $mahasiswa = $mahasiswaController->getAllMahasiswa();
?>

<div class="px-4">
<h3>Data Mahasiswa</h3>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<a class="btn btn-primary mb-3 mt-4" href="tambah"> +Tambah Mahasiswa</a>
<table class="table table-bordered table-striped" style="text-align: center;">
    <thead class="table-dark">
    <tr>
        <th>Nomor</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Jenis Kelamin</th>
        <th>Aksi</th>
    </tr>
    </thead>
    <tbody>
    <?php
        $no=1;
        foreach($mahasiswa as $x){
            ?>
            <tr>
                <th><?php echo $no++ ?></th>
                <td><?php echo $x['nim'] ?></td>
                <td><?php echo $x['nama'] ?></td>
                <td><?php echo $x['alamat'] ?></td>
                <td><?php echo $x['jenis_kelamin'] ?></td>
                <td>
                    <a class="btn btn-danger" href="edit/<?php echo $x['id']; ?>">Edit</a>
                    <a class="btn btn-warning" href="hapus/<?php echo $x['id']; ?>"onclick="return confirm('Apakah yakin akan menghapus..?')">Hapus</a>
                </td>
            </tr>
            <?php
        }
    ?>
    </tbody>
</table>
</div>
</div>