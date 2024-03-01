<?php

$lintang_tempat = -6.8;
$bujur_tempat = 110.833;
$bujur_tolok = 7;
$tinggi_tempat = 150;
$tanggal = 12;
$bulan = 3;
$tahun = 2024;

$api = "https://imsakiyah.digitalstoreku.my.id/debug/api.php?lat=$lintang_tempat&long=$bujur_tempat&gmt=$bujur_tolok&alt=$tinggi_tempat&d=$tanggal&m=$bulan&y=$tahun";

$data = file_get_contents($api);

$json = json_decode($data);

print_r($data);

?>
