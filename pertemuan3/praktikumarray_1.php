<?php
// Membuat array asosiatif
$data = array(
    "nama" => "Muhammad Zaki",
    "umur" => 18,
    "pekerjaan" => "Mahasiswa",
    "kota" => "Banjarmasin"
);

// Menampilkan data sebelum diurutkan
echo "<strong>Data Sebelum Diurutkan:</strong><br>";
foreach ($data as $key => $value) {
    echo "$key: $value<br>";
}

// Mengurutkan berdasarkan nilai (ascending) dan menampilkan hasilnya
asort($data);
echo "<br><strong>Data Setelah Diurutkan (asort):</strong><br>";
foreach ($data as $key => $value) {
    echo "$key: $value<br>";
}

// Mengurutkan berdasarkan kunci (ascending) dan menampilkan hasilnya
ksort($data);
echo "<br><strong>Data Setelah Diurutkan (ksort):</strong><br>";
foreach ($data as $key => $value) {
    echo "$key: $value<br>";
}

// Mengurutkan berdasarkan nilai (descending) dan menampilkan hasilnya
arsort($data);
echo "<br><strong>Data Setelah Diurutkan (arsort):</strong><br>";
foreach ($data as $key => $value) {
    echo "$key: $value<br>";
}

// Mengurutkan berdasarkan kunci (descending) dan menampilkan hasilnya
krsort($data);
echo "<br><strong>Data Setelah Diurutkan (krsort):</strong><br>";
foreach ($data as $key => $value) {
    echo "$key: $value<br>";
}
?>
