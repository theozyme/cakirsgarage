<?php
include("mysqlconnect.php");
extract($_POST);


echo "<html>";
echo "<meta http-equiv='Content-Type'";
echo "content='text/html; charset=UTF-8' />";
echo "Girdiginiz bilgiler:</br>";
echo "Adi :$ad </br>";
echo "Soyadi:$soyad</br>";
echo "randevu_tarihi :$tarih</br>";
echo "randevu_saati :$saat</br>";
echo "model :$model</br>";
echo "hizmet :$hizmet</br>";


$sql = "INSERT INTO müşteri".
"(ad,soyad,tarih,saat,model,hizmet)".
"VALUES ('$ad','$soyad', '$tarih', '$saat','$model','$hizmet')";


$cevap = mysqli_query( $baglanti,$sql);
if(!$cevap){
echo '<br>Hata:' . mysqli_error($baglanti);
}
else
{
echo "Veritabanina eklendi.";
echo "<br/><a href='index.php'> Geri Dön</a>";
}
echo "</html>";
mysqli_close($baglanti);
?>