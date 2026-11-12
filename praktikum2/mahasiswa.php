<?php

class Mahasiswa
{
    public $nim;
    public $nama;
    public $prodi;
    public $semester;


    public function tampilkanData()

    {
        
    echo "NIM : " . $nim . "<br>";
    echo "Nama : " . $nama . "<br>";
    echo "Prodi : " . $prodi . "<br>";
    echo "Semester : " . $semester . "<br>";
    }
}


$mhs1 = new Mahasiswa();
$mhs1->nim = "23001";
$mhs1->nama = "Andi";
$mhs1->prodi = "Sistem Informasi";
$mhs1->semester = 4;

$mhs2 = new Mahasiswa();
$mhs2->nim = "23002";
$mhs2->nama = "Budi";
$mhs2->prodi = "Sistem Informasi";
$mhs2->semester = 2;

$mhs1->tampilkanData();

?>