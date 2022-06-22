<?php

include("mysqlconnect.php");

$sql = "SELECT * FROM müşteri WHERE musteri_id=".$_GET['id'];

$cevap = mysqli_query($baglanti,$sql);
      
if(!$cevap ){
    echo '<br>Hata:' . mysqli_error($baglanti);
}


$gelen=mysqli_fetch_array($cevap);
?>
<html>
<body>
<form action="guncelkaydet.php?id=<?php echo $_GET['id'] ?>" 
method="POST">
Adı:
<input type="text" name="ad" value="<?php echo $gelen['ad']?>" />    <br />
Soyadı:
<input type="text" name="soyad" value="<?php echo $gelen['soyad'] ?>" /> <br />
Randevu Tarihi :<input type="date" name="tarih" 
value="<?php echo $gelen['tarih'] ?>" /> <br />
Randevu Saati  : <input type="time" name="saat" 
value="<?php echo $gelen['saat'] ?>" />  <br />
model  : <input type="text" name="model" 
value="<?php echo $gelen['model'] ?>" />  <br />
hizmet  : <input type="text" name="hizmet" 
value="<?php echo $gelen['hizmet'] ?>" />  <br />
<input type="submit" value="KAYDET"/>
</form>
</body>
</html>
