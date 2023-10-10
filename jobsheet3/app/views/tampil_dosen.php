<?php
    //memanggil class database
    include '../classes/databases.php';
    //instansiasi class database
    $db= new database;
?>

<div class="px-4">
<h3>Data Dosen</h3>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<a class="btn btn-primary mb-3 mt-4" class="btn btn-success" href="input_dosen.php"> +Tambah Dosen</a>
<table class="table table-bordered table-striped" style="text-align: center;">
    <thead class="table-dark">
    <tr>
        <th>Nomor</th>
        <th>NIDN</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Jenis Kelamin</th>
        <th>Tempat Lahir</th>
        <th>Aksi</th>
    </tr>
    </thead>
    <tbody>
    <?php
        $no=1;
        foreach($db->tampil_dosen() as $x){
            ?>
            <tr>
                <th scope="row"><?php echo $no++ ?></th>
                <td><?php echo $x['nidn'] ?></td>
                <td><?php echo $x['nama'] ?></td>
                <td><?php echo $x['alamat'] ?></td>
                <td><?php echo $x['jenis_kelamin'] ?></td>
                <td><?php echo $x['tempat_lahir'] ?></td>
                <td>
                    <a class="btn btn-danger" href="edit_dosen.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit</a>
                    <a class="btn btn-warning" href="proses_dosen.php?id=<?php echo $x['id'] ?>&aksi=hapus">Hapus</a>
                </td>
            </tr>
            <?php
        }
    ?>
    </tbody>
</table>