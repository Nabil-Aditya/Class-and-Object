<?php
// Memanggil class 
spl_autoload_register(function ($class) {
    include $class . '.php';
});


// Membuat objek baru dengan nama lingkaran1
$lingkaran1 = new Lingkaran();

// Contoh input dari user
echo 'Masukkan jari jari: ';
$lingkaran1->jarijari = trim(fgets(STDIN));
echo 'Luas bangun datar: ', $lingkaran1->getLuas(), PHP_EOL;
?>
