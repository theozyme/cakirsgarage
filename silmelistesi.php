<html>
    <head>
        <title>Cakır's Garage</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
     </head>
<meta http-equiv="Content-Type"
content="text/html; charset=UTF-8" />
<body>
     <div class="jumbotron text-center">
      <h1>Cakır's Garage</h1>
      <p>Otomasyon Sistemi</p>
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">Cakır's Garage</a>
          </div>
          <ul class="nav navbar-nav">
            <li><a href="index.php">Ana Sayfa</a></li>
            <li  ><a href="kayitformu.php">Kayıt Gir</a></li>
            <li ><a href="listele.php">Kayıtları Listele</a></li>
            <li class="active"><a href="silmelistesi.php">Kayıt Sil</a></li>
            <li><a href="guncellelistesi.php">Kayıt Güncelle</a></li>
          </ul>
        </div>
      </nav>


</body>
</html>
<?php

include("mysqlconnect.php");

$sql = "SELECT * FROM müşteri";

$cevap = mysqli_query($baglanti,$sql);
      
if(!$cevap )
{
    echo '<br>Hata:' . mysqli_error($baglanti);
}

echo "<table border=1>";
echo "<tr><th>Müşteri ID</th><th>Adı</th><th>Soyadı</th><th>Tarih</th><th>saat</th><th>model</th><th>hizmet</th></tr>";


while($gelen=mysqli_fetch_array($cevap))
{
    
    echo "<tr><td>".$gelen['musteri_id']."</td>";
    echo "<td>".$gelen['ad']."</td>";
    echo "<td>".$gelen['soyad']."</td>";
    echo "<td>".$gelen['tarih']."</td>";
    echo "<td>".$gelen['saat']."</td>";
    echo "<td>".$gelen['model']."</td>";
    echo "<td>".$gelen['hizmet']."</td>";
  echo "<td><a href=kayitsil.php?id=".$gelen['musteri_id'].">Sil</a></td></tr>";    
}

echo "</table>";

echo "<br/><a href='index.php'> Geri Dön</a>";

mysqli_close($baglanti);
?>

</body>
</html>
