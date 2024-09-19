<?php

// Menggunakan Return dalam Fungsi
function jumlahkan($a, $b) {
    $hasil = $a + $b;
    return $hasil;
}

echo jumlahkan(5, 10); // Output: 15
echo "<hr>";

// Penggunaan Return untuk Mengakhiri Fungsi
function cekUmur($umur) {
    if ($umur < 18) {
        return "Maaf, kamu belum cukup umur.";
    }
    return "Selamat, kamu boleh masuk.";
}

echo cekUmur(16); // Output: Maaf, kamu belum cukup umur.
echo "<hr>";

// Return Tanpa Nilai
function salam($jam) {
    if ($jam < 0 || $jam > 24) {
        return; // Keluar dari fungsi jika input jam tidak valid
    }
    if ($jam < 12) {
        return "Selamat pagi!";
    } else {
        return "Selamat siang!";
    }
}

echo salam(25); // Tidak ada output
echo salam(10); // Output: Selamat pagi!