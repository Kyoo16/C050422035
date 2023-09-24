<?php
$nilai = 45;

if ($nilai >= 90 && $nilai <=100) {
    echo "Grade : A";
    echo "<br/>Keterangan : Baik Sekali";
} elseif ($nilai >= 76 && $nilai <=89) {
    echo "Grade : B";
    echo "<br/>Keterangan : Baik";
} elseif ($nilai >= 60 && $nilai <=75) {
    echo "Grade : C";
    echo "<br/>Keterangan : Cukup";
} elseif ($nilai >= 50 && $nilai <=59) {
    echo "Grade : D";
    echo "<br/>Keterangan : Hampir Cukup";
} elseif ($nilai >= 0 && $nilai <=49)  {
    echo "Grade : E";
    echo "<br/>Keterangan : Kurang";
} else {
    echo "Nilai yang anda masukkan tidak valid";
}
?>
