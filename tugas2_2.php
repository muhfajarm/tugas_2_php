<?php

echo "Jual = 80000<br>";
echo "Beli = 50000<br>";
echo "Keuntungan = ?<br>";

$jual = 80000;
$beli = 50000;

// untung = jual - beli
$untung = $jual - $beli;

// untung (%) = (untung / beli) * 100
$untung = ($untung / $beli) * 100;

echo "Jawaban : $untung%";
