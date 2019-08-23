<?php 
  $nama_satu ="Alya Luthfiyyah Nabilla";
  $hobby_satu ="Nonton Film";
  $umur_satu = 16;
  $tinggi_badan_satu = 154;

  $nama_dua ="Febbi Febiola Agiska";
  $hobby_dua ="Baca Wattpad";
  $umur_dua = 16;
  $tinggi_badan_dua = 155;

  $nama_tiga ="Muhammad irvan";
  $hobby_tiga ="Denger musik";
  $umur_tiga = 18;
  $tinggi_badan_tiga = 160;

  $rata_rata = ($tinggi_badan_satu + $tinggi_badan_dua + $tinggi_badan_tiga ) / 3;
 
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title >Tugas PWPB</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/carousel/">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">


    <style>
     .container{
      margin-top: 120px;
     }
     .profile{
      width: 150px;
      height: 150px;
      border-radius: 50%;
      object-fit: cover;
     }
     div.home{
      color:#7EF9FF;
      font-family: sans-serif;
      font-size:25px;
      font-weight:400;
      list-style: none;
     }
     .home ul{
      list-style: none;
     }
     header{
  background-color: #7EF9FF;
  padding: 20px 10px;
  border-radius: 5px;
  border: 1px solid #ffffff;
  margin-bottom: 10px;
}

header h1.judul,
header h3.deskripsi{
  text-align: center; 
}
.menu{
  background-color: #7EF9FF;
  border: 1px solid #ffffff;
  border-radius: 8px; 
  margin-bottom: 10px;
  
}

div.menu ul {
  list-style:none;
  overflow: hidden;
  display: inline-block;
}
div.menu ul li {
  float:left;   
  text-transform:uppercase;
}

div.menu ul li a {
  display:block;  
  padding:0 20px;
  text-decoration:none;
  color:#2c2c2c;
  font-family: sans-serif;
  font-size:13px;
  font-weight:400;
  transition:all 0.3s ease-in-out;
}
div.menu ul li a.hoverover
div.menu ul li a.hoverover   
  cursor: pointer;  
  color:#fff;
}
div.badan{
  background-color: white;
  border-radius: 5px;
  border: 1px solid #ffffff;
  margin-bottom: 10px;
}
div.halaman{
  text-align: center;
  padding: 30px 20px; 
}
    </style>
    <link href="TUGAS PWPB.css" rel="stylesheet">
  </head>
  <body>
    <header>
      <div class="menu">
       <div class="home">
        <ul>
            <li><a href="index.php">Home</a></li>
        </ul>
    <ul>
      <li><a href="tugas_pertama.php">Tugas Satu</a></li>
    </ul>
    <ul>
      <li><a href="tugas_dua.php">Tugas Dua</a></li>
    </ul>
    <ul>
      <li><a href="#">Tugas Tiga</a></li>
    </ul>
    <ul>
      <li><a href="#">Tugas Empat</a></li>
    </ul>
  </div>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
      </ul>
    </div>
  </nav>
</header>

<main role="main">


  <div class="container marketing">
    <div class="row">
      <!-- BIODATA ALYA LUTHFIYYAH NABILLA -->
      <div class="col-lg-4">
        <img class="profile" src="img/alya.jpg">
        <h2>Profile</h2>
        <ul>
          <li>Nama lengkap : <?php echo $nama_satu;?></li>
          <li>Hobby : <?php echo $hobby_satu ;?></li>
          <li>Umur :  <?php echo $umur_satu; ?></li>
          <li>Tinggi badan : <?php echo $tinggi_badan_satu; ?></li>
        </ul>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div>
      <!-- BIODATA FEBBI FEBIOLA AGISKA -->
      <div class="col-lg-4">
        <img class="profile" src="img/febbi.jpg">
        <h2>Profile</h2>
         <ul>
          <li>Nama lengkap : <?php echo $nama_dua; ?></li>
          <li>Hobby : <?php echo $hobby_dua ;?></li>
          <li>Umur : <?php echo $umur_dua; ?></li>
          <li>Tinggi badan : <?php echo $tinggi_badan_dua ;?></li>
        </ul>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div>
      <!-- BIODATA MUHAMMAD IRVAN --> 
      <div class="col-lg-4">
        <img class="profile" src="img/irvan.jpg">
        <h2>Profile</h2>
        <ul>
         <li>Nama lengkap : <?php echo $nama_tiga ;?></li>
          <li>Hobby : <?php echo $hobby_tiga; ?></li>
          <li>Umur : <?php echo $umur_tiga; ?></li>
          <li>Tinggi badan : <?php echo $tinggi_badan_tiga ;?></li>
        </ul>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div>
    </div>
    Rata-rata tinggi kami <?php echo $rata_rata ; ?> cm
  <footer class="container">
    <p class="float-right"><a href="#">Back to top</a></p>
    </footer>
    </div>
</main>
</html>
