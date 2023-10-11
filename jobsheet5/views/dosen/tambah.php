<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<div class="px-4 py-4">
<h3>Tambah Data Dosen</h3>
</br>
<a class="btn btn-success" href="dosen">KEMBALI</a>
</br></br>

<!-- <?php
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
    }
    ?> -->

<div class="px-3 border" style="width:50%">
<form action="proses_dosen" method="post">
    <div class="mb-3">
        <label for="nidn" class="form-label">NIDN</label>
        <input type="text" id="nidn" class="form-control" name="nidn" placeholder="Masukkan NIDN">
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" id="nama" class="form-control" name="nama" placeholder="Masukkan Nama">
    </div>
    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea id="alamat" class="form-control" name="alamat" rows="5" placeholder="Masukkan Alamat"></textarea>
    </div>
    <div class="mb-3">
        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
        <select id="jenis_kelamin" class="form-select" name="jenis_kelamin">
            <option value="Pilih">Pilih</option>
            <option value="Perempuan">Perempuan</option>
            <option value="Laki-laki">Laki-laki</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
        <input type="text" id="tempat_lahir" class="form-control" name="tempat_lahir" placeholder="Masukkan Tempat Lahir">
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
</form>


    <!-- <table>
        <tr>
            <td>NIDN</td>
            <td><input type="text" name="nidn"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>
                <textarea name="alamat" cols="30" rows="5"></textarea>
        </td>
        <tr>
            <td>Jenis Kelamin</td>
            <td>
                <input type="radio" name="jenis_kelamin" value="P">Perempuan
                <input type="radio" name="jenis_kelamin" value="L">Laki-laki
            </td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td><input type="text" name="tempat_lahir"></td>
        </tr>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" class="btn btn-primary" value="Simpan"></td>
        </tr>
    </table> -->
</form>
</div>
</div>