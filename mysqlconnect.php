<?php
$server = 'sql100.epizy.com';
$user = 'epiz_32016093';
$password = 'nHdUgfl4YWV8';
$database = 'epiz_32016093_cargarage';
$baglanti = mysqli_connect($server,$user,$password,$database);
if (!$baglanti) {
echo "MySQL sunucu ile baglanti kurulamadi! </br>";
echo "HATA: " . mysqli_connect_error();
exit;
}
?>