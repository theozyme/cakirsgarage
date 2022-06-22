<?php
include("mysqlconnect.php");
extract($_POST);
$sql ="UPDATE müşteri ".
      "SET ad='$ad',soyad='$soyad',tarih='$tarih',saat='$saat',model='$model',hizmet='$hizmet' ".
      "WHERE musteri_id=".$_GET['id'];

$cevap = mysqli_query( $baglanti,$sql);     
if(!$cevap){
    echo '<br>Hata:' . mysqli_error($baglanti);
}
else{
    echo "Kayıt Güncellendi.";
    echo " <br><a href='listele.php'> Listele</a>\n";
}


mysqli_close($baglanti);
?>
