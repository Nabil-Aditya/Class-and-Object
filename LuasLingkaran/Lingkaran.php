<?php
class Lingkaran {
    // properti panjang dan lebar
    public $jarijari;

    // method getLuas
    function getLuas() {
        return pi() * pow($this->jarijari, 2);
    }
}
?>
