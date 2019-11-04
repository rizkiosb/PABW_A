<?php
$nilai = array(70, 50, 90, 87, 66, 59, 90, 80, 50, 95, 98, 70, 87, 90, 100);
for ($i = 0; $i < 15; $i++) {
    $sum = $nilai + $sum;
    $J++;
}
echo "nilai sum : $sum<br>";
$rata_rata = $sum / $J;
echo "Nilai rata-rata : $rata_rata ";
