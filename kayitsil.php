<?php

include("mysqlconnect.php");

$sql = "DELETE FROM müşteri WHERE musteri_id=".$_GET['id'];

$cevap = mysqli_query($baglanti,$sql);
       
if(!$cevap )
{
    echo '<br>Hata:' . mysqli_error($baglanti);
}
else
{
    echo "Kayıt Silindi!</br>";
    echo " <a href='silmelistesi.php'> Listele</a>\n";
}
echo "<br/><a href='index.php'> Geri Dön</a>";

mysqli_close($baglanti);
?>
