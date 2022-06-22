
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
            <li  class="active"><a href="kayitformu.php">Kayıt Gir</a></li>
            <li><a href="listele.php">Kayıtları Listele</a></li>
            <li><a href="silmelistesi.php">Kayıt Sil</a></li>
            <li><a href="guncellelistesi.php">Kayıt Güncelle</a></li>
          </ul>
        </div>
      </nav>
      


</body>
</html>

<html>
<meta http-equiv="Content-Type"
content="text/html; charset=UTF-8" />
<body>
<form action="kaydet.php" method="POST">
Adı : <input type="text" name="ad" /> <br />
Soyadı: <input type="text" name="soyad" /> <br />
randevu tarihi : <input type="date" name="tarih" /> <br />
randevu saati : <input type="time" name="saat" /> <br />
model: <input type="text" name="model" /> <br />
hizmet : <input type="text" name="hizmet" /> <br />
<input type="submit" value="KAYDET"/>
</form>
</body>
</html>