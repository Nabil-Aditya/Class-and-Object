<?php
// Mendefinisikan kelas Kecepatan untuk menghitung kecepatan
class Kecepatan {
    // Properti untuk menyimpan nilai jarak (dalam satuan tertentu, misalnya km atau meter)
    public $jarak;

    // Properti untuk menyimpan nilai waktu (dalam satuan tertentu, misalnya jam atau detik)
    public $waktu;

    // Method untuk menghitung kecepatan berdasarkan rumus: kecepatan = jarak / waktu
    public function hitungKecepatan() {
        // Validasi untuk memastikan waktu tidak nol atau negatif agar tidak terjadi pembagian dengan nol
        if ($this->waktu <= 0) {
            return "Waktu harus lebih besar dari 0!";
        }
        // Mengembalikan hasil perhitungan kecepatan
        return $this->jarak / $this->waktu;
    }
}
?>
