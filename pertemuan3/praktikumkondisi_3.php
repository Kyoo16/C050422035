<?php
// Mendapatkan nama bulan saat ini
$bulan_saat_ini = date("F");

// Menggunakan switch-case untuk menentukan jumlah hari
switch ($bulan_saat_ini) {
    case "January":
    case "March":
    case "May":
    case "July":
    case "August":
    case "October":
    case "December":
        $jumlah_hari = 31;
        break;
    case "April":
    case "June":
    case "September":
    case "November":
        $jumlah_hari = 30;
        break;
    case "February":
        // Periksa tahun kabisat atau tidak
        $tahun = date("Y");
        if (($tahun % 4 == 0 && $tahun % 100 != 0) || $tahun % 400 == 0) {
            $jumlah_hari = 29;
        } else {
            $jumlah_hari = 28;
        }
        break;
    default:
        $jumlah_hari = "Tidak valid";
        break;
}

echo "Bulan ini adalah $bulan_saat_ini dan memiliki $jumlah_hari hari.";
?>
