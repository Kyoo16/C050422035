<?php
// Jumlah lembar fotocopy
$jumlah = 158;
// Harga per lembar fotocopy
$harga = 0;

if ($jumlah < 100) {
    $harga = 150;
} elseif ($jumlah >= 100 && $jumlah <= 200) {
    $harga = 100;
} else {
    $harga = 80;
}

// Menghitung total biaya fotocopy
$total = $jumlah * $harga;

echo "Jumlah lembar fotocopy: $jumlah<br>";
echo "Harga per lembar fotocopy: Rp. $harga,-<br>";
echo "Total biaya fotocopy: Rp. $total,-";
?>
