<?php
    class manusia{
    public $nama_saya="Finka";
    protected $nik="33012389236724";
    

    public function panggil_nama($nama){
        return $this->nama_saya=$nama;
    }
    
    public function panggil_nik(){
        return "NIK saya : 33012389236724";
    }
}

class mahasiswa extends manusia{
    public $nama_mahasiswa;
    private $alamat="Indonesia";

    public function panggil_mahasiswa($mahasiswa){
        $this->nama_mahasiswa = $mahasiswa;
    }

    public function panggil_alamat(){
        return $this->alamat;
    }
}

$informatika = new mahasiswa();
$address = new mahasiswa();

$informatika->panggil_nama("Sabrina");
$informatika->panggil_mahasiswa("Indonesia");

echo "Nama Depan Saya : " . $informatika->nama_saya . "</br>";
echo "Nama Belakang : " . $informatika->nama_mahasiswa . "</br>";
echo $informatika->panggil_nik();
echo "</br>Alamat saya : " . $informatika->panggil_alamat() . "</br>";
?>