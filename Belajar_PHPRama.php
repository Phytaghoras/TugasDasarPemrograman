<?php
// Jumlah uang awal
$uangAwal = 500000; 

// Pengeluaran
$jeruk = 8000*3;
$mangga_apel = 80000+50000;
$rice_cooker = 150000;
$parkir=10000;

// Menghitung jumlah pengeluaran
$totalPengeluaran = $jeruk + $mangga_apel + $rice_cooker + $parkir; 

// Menghitung sisa uang
$sisaUang = $uangAwal - $totalPengeluaran;

echo "Uang Awal: $uangAwal";
echo "<br>";
echo "Total Pengeluaran: $totalPengeluaran";
echo "<br>";
echo "Sisa Uang: $sisaUang";
?>