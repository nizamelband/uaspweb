<?php 
require 'fungsi.php';
// require 'koneksi.php';
 
  $q= "SELECT * FROM index";
  // $ambilindex = mysqli_query($conn,$q) or die("Query error : " . mysqli_error());
  $ambilindex = mysqli_query($conn,"SELECT * FROM `index` WHERE 1");
  // or die("Query error : " . mysqli_error($ambilindex));
  $data=mysqli_fetch_array($ambilindex);
  $jnav = $data['jnav'];
  $a    = $data['a'];
  $b    = $data['b'];
  $c     = $data['c'];
  $jhead = $data['jhead'];
  $dhead = $data['dhead'];
  $thead = $data['thead'];
  
  ?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- meta -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="asset/style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <title>Index</title>

</head>
<body id="home">

  <!-- navbar -->
  <nav class="navbar-container shadow bg-white">
    <div class="navbar-logo">
      <h3><a href=""><?=$jnav;?></h3>
    </div>
    <div class="navbar-box">
      <ul class="navbar-list">
        <li><a href="#">  <?=$a;?></a></li>
        <li><a href="#">  <?=$b;?></a></li>
        <li><a href="#">  <?=$c;?></a></li>
        <div class="topbar-divider d-none d-sm-block"></div>
          <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1"data-bs-toggle="dropdown" aria-expanded="false">
          <?php 
          $ambilusername = mysqli_query($conn,"select * from login");
          $datau=mysqli_fetch_array($ambilusername);
          $username=$datau['username'];
          ?> 
          <span class="left-divider"> </span>
          <span class="mr-2 d-none d-lg-inline text-user"><?=$username?></span>                     
          <!-- <img class="img-profile rounded-circle"src="img/undraw_profile.svg"> -->
          </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <a class="dropdown-item" href="edit.php">Edit</a>
            <a class="dropdown-item" href="logout.php">Logout</a>
          </ul>
    </div>
      </ul>
    <div class="navbar-toggle">
      <span></span>
    </div>
  </nav>
  <!-- akhir navbar -->

  <!-- header -->
  <section class="header ">
    <div class="header-content">
      <div class="row">
        <div class="col-md-5 my-auto mx-auto" data-aos="fade-right">
          <h2>  <?=$jhead;?></h2>
          <p>
              <?=$dhead;?>
          </p>
          <a href="#" class="button bg-white shadow">  <?=$thead;?></a>
        </div>
        <div class="col-md-5 my-auto mx-auto" >
          <div class="d-flex justify-content align-items-center flex-column">
            <img src="asset/user.png" alt="banner" class="my-auto">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- akhir header -->
  
  <!-- footer -->
  <section class="footer bg-light" id="contact">
    <div class="footer-content">
      <div class="d-flex justify-content-center align-items-center text-center flex-column mx-auto">    
        <small class="d-block text-dark font-weight-light"><b class="font-weight-bold">Dibuat oleh </b>Nizhaambiq Elbanny</small>
      </div>
    </div>
  </section>
  <!-- akhir footer -->

  <!-- javascript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  

</body>
</html>