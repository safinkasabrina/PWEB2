<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<h3>Tambah Data Dosen</h3>
</br>
<a class="btn btn-success" href="tampil_dosen.php">KEMBALI</a>
</br></br>
<form action="proses_dosen.php?aksi=tambah" method="post">
    <table>
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
    </table>
</form>
</div>