<?php
// Memanggil class 
spl_autoload_register(function ($class) {
    include $class . '.php';
});


// membuat objek baru dan propertynya di isi dari input 
$k2 = new Kecepatan();
echo "Masukkan jarak (km): ";
$k2->jarak = trim(fgets(STDIN));

echo "Masukkan waktu (jam): ";
$k2->waktu = trim(fgets(STDIN));

//tampil hasil dengan memanggil method
echo "Kecepatan: " . $k2->hitungKecepatan() . " km/jam" . PHP_EOL;
?>