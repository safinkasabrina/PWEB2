<?php
    //memanggil class database
    include '../classes/databases.php';
    //instansiasi class database
    $db= new database;
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIAKAD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <div class="px-3 py-3">
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SIAKAD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Dosen</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="px-4">
<?php
    if(isset($_GET['pesan']) && $_GET['pesan'] == 'Berhasil!'){ ?>
        <div class="alert alert-primary d-flex align-items-center" role="alert">
  <svg xmlns="http://www.w3.org/2000/svg" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:" style="width: 16px; height: 16px;">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </svg>
  <div>
    Data berhasil ditambahkan!
  </div>
</div>
    <?php
        header("refresh:1, url=tampil_mhs.php");
    }elseif(isset($_GET['pesan']) && $_GET['pesan'] == 'Sukses!'){ ?>
      <div class="alert alert-warning d-flex align-items-center" role="alert">
  <svg xmlns="http://www.w3.org/2000/svg" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:" style="width: 16px; height: 16px;">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </svg>
  <div>
    Data berhasil di edit!
  </div>
</div>
<?php
  header("refresh:2,url=tampil_mhs.php");
  }elseif(isset($_GET['pesan']) && $_GET['pesan'] == 'Congrats!'){ ?>
    <div class="alert alert-danger d-flex align-items-center" role="alert">
  <svg xmlns="http://www.w3.org/2000/svg" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:" style="width: 16px; height: 16px;">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </svg>
  <div>
    Data berhasil di hapus!
  </div>
</div>
<?php
  header("refresh:2,url=tampil_mhs.php");
  }
    ?>
<h3>Data Mahasiswa</h3>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<a class="btn btn-primary mb-3 mt-4" href="input_mhs.php"> +Tambah Mahasiswa</a>
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
        foreach($db->tampil_mahasiswa() as $x){
            ?>
            <tr>
                <th><?php echo $no++ ?></th>
                <td><?php echo $x['nim'] ?></td>
                <td><?php echo $x['nama'] ?></td>
                <td><?php echo $x['alamat'] ?></td>
                <td><?php echo $x['jenis_kelamin'] ?></td>
                <td>
                    <a class="btn btn-danger" href="edit_mhs.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit</a>
                    <a class="btn btn-warning" href="proses_mhs.php?id=<?php echo $x['id'] ?>&aksi=hapus">Hapus</a>
                </td>
            </tr>
            <?php
        }
    ?>
    </tbody>
</table>
</div>
</div>