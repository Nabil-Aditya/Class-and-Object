<?php
// Memasukkan file 'Bus.php' agar class Bus dapat digunakan
require_once 'Bus.php';

// Membuat objek bus kecil dengan kapasitas 20 penumpang
echo PHP_EOL . "=== Membuat Bus Kecil ===" . PHP_EOL;
$busKecil = new Bus(20);

// Menampilkan kapasitas bus kecil
echo $busKecil->getKapasitas() . PHP_EOL;

// Menampilkan jumlah penumpang awal (sebelum ada yang naik)
echo $busKecil->getJumlahPenumpang() . PHP_EOL;

// Menambahkan 15 penumpang ke dalam bus
$busKecil->tambahPenumpang(15);

// Mencoba menambahkan 10 penumpang lagi (total jadi 25), tetapi melebihi kapasitas (20)
$busKecil->tambahPenumpang(10);

// Menurunkan 5 penumpang dari bus
$busKecil->turunkanPenumpang(5);

// Mencoba menurunkan 20 penumpang, tetapi jumlah penumpang saat ini kurang dari itu
$busKecil->turunkanPenumpang(20);

// Membuat objek bus yang lebih besar dengan kapasitas 50 penumpang
echo PHP_EOL . "=== Membuat Bus Lebih Besar ===" . PHP_EOL;
$busBesar = new Bus(50);

// Menampilkan kapasitas bus besar
echo $busBesar->getKapasitas() . PHP_EOL;

// Menambahkan 30 penumpang ke dalam bus besar
$busBesar->tambahPenumpang(30);

// Menurunkan 10 penumpang dari bus besar
$busBesar->turunkanPenumpang(10);
?>
