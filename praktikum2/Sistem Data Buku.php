<?php

class Buku
{
    // Property
    public $kode;
    public $judul;
    public $penulis;
    public $tahun;

    // Method
    public function tampilkanData()
    {
        echo "Kode Buku: " . $this->kode . "<br>";
        echo "Judul: " . $this->judul . "<br>";
        echo "Penulis: " . $this->penulis . "<br>";
        echo "Tahun Terbit: " . $this->tahun . "<br>";
    }
}

$buku1 = new Buku();

// Isi property
$buku1->kode = "B001";
$buku1->judul = "Belajar Pemrograman PHP";
$buku1->penulis = "Budi";
$buku1->tahun = 2024;

$buku2 = new Buku();
$buku2->kode = "B002";
$buku2->judul = "Belajar Pemrograman";
$buku2->penulis = "Budina";
$buku2->tahun = 2024;
// Tampilkan data

$buku1->tampilkanData();
$buku2->tampilkanData();
?>