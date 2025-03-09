<?php
class Bus {
    // Properti untuk menyimpan jumlah penumpang saat ini, diinisialisasi dengan 0
    private $jumlahPenumpang = 0;
    
    // Properti untuk menyimpan kapasitas maksimal bus
    private $kapasitas;

    // Constructor untuk mengatur kapasitas awal bus saat objek dibuat
    public function __construct($kapasitas) {
        $this->kapasitas = $kapasitas;
    }

    // Setter untuk mengubah kapasitas bus
    public function setKapasitas($kapasitas) {
        // Validasi agar kapasitas tidak negatif atau nol
        if ($kapasitas > 0) {
            $this->kapasitas = $kapasitas;
            echo "Kapasitas bus diatur menjadi: $kapasitas penumpang." . PHP_EOL;
        } else {
            echo "Kapasitas harus lebih besar dari 0!" . PHP_EOL;
        }
    }

    // Getter untuk mendapatkan jumlah penumpang saat ini
    public function getJumlahPenumpang() {
        return "Jumlah penumpang saat ini: " . $this->jumlahPenumpang;
    }

    // Getter untuk mendapatkan kapasitas maksimal bus
    public function getKapasitas() {
        return "Kapasitas bus: " . $this->kapasitas;
    }

    // Method untuk menambahkan penumpang ke dalam bus
    public function tambahPenumpang($jumlah) {
        // Validasi agar jumlah penumpang yang ditambahkan tidak negatif
        if ($jumlah < 0) {
            echo "Jumlah penumpang yang naik tidak bisa negatif!" . PHP_EOL;
        } 
        // Jika jumlah total penumpang setelah ditambah masih dalam kapasitas
        elseif ($this->jumlahPenumpang + $jumlah <= $this->kapasitas) {
            $this->jumlahPenumpang += $jumlah;
            echo "$jumlah penumpang naik. Total penumpang sekarang: " . $this->jumlahPenumpang . PHP_EOL;
        } 
        // Jika jumlah penumpang melebihi kapasitas
        else {
            echo "Tidak bisa menambah $jumlah penumpang. Kapasitas bus penuh!" . PHP_EOL;
        }
    }

    // Method untuk menurunkan penumpang dari bus
    public function turunkanPenumpang($jumlah) {
        // Validasi agar jumlah penumpang yang turun tidak negatif
        if ($jumlah < 0) {
            echo "Jumlah penumpang yang turun tidak bisa negatif!" . PHP_EOL;
        } 
        // Jika jumlah penumpang yang turun tidak melebihi jumlah saat ini
        elseif ($jumlah <= $this->jumlahPenumpang) {
            $this->jumlahPenumpang -= $jumlah;
            echo "$jumlah penumpang turun. Total penumpang sekarang: " . $this->jumlahPenumpang . PHP_EOL;
        } 
        // Jika jumlah penumpang yang ingin turun lebih dari jumlah penumpang saat ini
        else {
            echo "Tidak bisa menurunkan $jumlah penumpang. Jumlah penumpang saat ini: " . $this->jumlahPenumpang . PHP_EOL;
        }
    }
}
?>
