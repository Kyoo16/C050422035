<?php
// Fungsi untuk menghitung luas alas kerucut
function luasAlas($jariJari) {
    $phi = 3.14;
    $luas = $phi * pow($jariJari, 2);
    return $luas;
}

// Fungsi untuk menghitung luas permukaan kerucut
function luasPermukaan($jariJari, $tinggi) {
    $phi = 3.14;
    $s = sqrt(pow($jariJari, 2) + pow($tinggi, 2));
    $luas = $phi * pow($jariJari, 2) + $phi * $jariJari * $s;
    return $luas;
}

// Input jari-jari dan tinggi dari user
$jariJari = 5; // Ganti dengan jari-jari yang diinginkan
$tinggi = 8;   // Ganti dengan tinggi yang diinginkan

// Menghitung luas alas
$luasAlas = luasAlas($jariJari);

// Menghitung luas permukaan
$luasPermukaan = luasPermukaan($jariJari, $tinggi);

// Menampilkan hasil
echo "Diketahui jari-jari sebuah kerucut adalah " .$jariJari. "cm dan dengan tinggi " .$tinggi. "cm<br>";
echo "Luas Alas Kerucut: " . $luasAlas . " cm<br>\n";
echo "Luas Permukaan Kerucut: " . $luasPermukaan . " cm\n";
?>
