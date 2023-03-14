<?php
include("conn.php");
$query = mysqli_query($conn , 'SELECT * FROM prods');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/Logo.jpg">
    <link rel="stylesheet" href="css/ContactUs.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;0,500;1,300&display=swap" rel="stylesheet">
    <title>DihiaBrand | Produits</title>
    <style>
      /* .btn
      {
        border-color: gold !important;
        color: white !important;
        font-weight: bold !important;
        border-width: 2px !important;
        z-index: 10;
        background-color: #ffaff4 !important;
      } */

      .procrd:hover{
        background-color: #ffc10775;
        transition: 0.3s;
      }

      @media screen and (max-width:575px) {
    .card{
                  width:5cm !important;
                  margin:auto;
                }
            }
    </style>
</head>
<body style="font-family: 'Josefin Sans', sans-serif;">
<nav class="navbar navbar-expand-lg bg-body-tertiary d-flex shadow  bg-secondary">
  <div class="container">
    <a class="navbar-brand text-white fw-bold" href="index.php"><img class="image-fluid rounded" style="height: 50px;" src="images/Logo1.png" alt="" srcset=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa-solid fa-bars bar1 text-light"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-white" href="prods.php">Nos Produis</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="ContactUs.php">Contact Nous</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="about.php">Info Sure Nous</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Autre option
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
      
      <form class="d-flex align-self-center align-items-center" role="search">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1" style="background-color: rgba(240, 248, 255, 0.274); border-right-color: transparent !important;">  <i class="fa-solid fa-magnifying-glass text-white"></i></span>
            <input type="text" style="background-color: rgba(240, 248, 255, 0.274); border-left-color: transparent !important;" class="form-control" placeholder="Recherche" aria-label="Username" aria-describedby="basic-addon1">
        </div>
      </form>
    </div>
  </div>
</nav>
    <div class="position-relative container bg-light pt-5" style="top: 2cm">
    <div class="row" style="font-family: 'Josefin Sans', sans-serif;">
      <?php
          while($row = mysqli_fetch_assoc($query)){ 
            echo " 
              <div class='col-lg-2 col-md-4 col'>
                <main>        
                  <div  class='card text-center border border-warning mt-0 mb-5 procrd'>
                      <img src='$row[Images]' class='card-img-top' style='height:5cm ;'>
                      <div class='card-body'>
                          <h5  id='ighmh' style=' font-family:cairo ; font-weight:bold' class='card-title'>$row[Name]</h5>               
                          <p style=' font-family:cairo ; font-weight:bold' class='card-text'>$row[Price] DA</p>
                          <a  style='font-family:cairo' href='val.php?id=$row[Id]' class='btn btn-warning text-light fw-bold'>Acheter</a>                    
                      </div>
                  </div>     
                </main> 
              </div>
          ";  }
      ?>
      </div>
    </div>
    <script src="js/all.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>