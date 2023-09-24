<?php 
$pegawai = array("lina", "arni", "jona", "punjabi", "marcus", "marlin");
echo "<strong>Sebelum diurutkan</strong><br />";
foreach ($pegawai as $data => $nama) {
    echo "$data: $nama"."<br />";
}

// 1. Menambahkan elemen baru ke dalam array
array_push($pegawai, "nina");
echo "<strong>Setelah menambahkan elemen baru</strong><br />";
foreach ($pegawai as $data => $nama) {
    echo "$data: $nama"."<br />";
}

// 2. Menghapus elemen terakhir dari array
array_pop($pegawai);
echo "<strong>Setelah menghapus elemen terakhir</strong><br />";
foreach ($pegawai as $data => $nama) {
    echo "$data: $nama"."<br />";
}

// 3. Mengambil elemen pertama dari array
$elemen_pertama = array_shift($pegawai);
echo "<strong>Elemen pertama yang diambil:</strong> $elemen_pertama<br />";
echo "<strong>Setelah mengambil elemen pertama</strong><br />";
foreach ($pegawai as $data => $nama) {
    echo "$data: $nama"."<br />";
}

// 4. Menambahkan elemen baru di awal array
array_unshift($pegawai, "dina");
echo "<strong>Setelah menambahkan elemen di awal array</strong><br />";
foreach ($pegawai as $data => $nama) {
    echo "$data: $nama"."<br />";
}

// 5. Mencari indeks dari elemen tertentu dalam array
$indeks = array_search("jona", $pegawai);
if ($indeks !== false) {
    echo "<strong>Indeks dari 'jona' dalam array:</strong> $indeks<br />";
} else {
    echo "<strong>'jona' tidak ditemukan dalam array.</strong><br />";
}
?>
