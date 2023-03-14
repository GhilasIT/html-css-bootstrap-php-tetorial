<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/Logo.jpg">
    <link rel="stylesheet" href="css/ContactUs.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;0,500;1,300&display=swap" rel="stylesheet">
    <title>Dihia Brand | ContactUs</title>
</head>
<body class="position-relative" style="font-family: 'Josefin Sans', sans-serif;">

    <nav class="navbar navbar-expand-lg bg-body-tertiary d-flex position-absolute">
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
                  <a class="nav-link text-white" href="ContqctUs.php">Contact Nous</a>
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
<!-- sh1 -->
    <div class="header1 text-white text-center position-relative"> 
        <div class="d-flex justify-content-center align-items-center"><h1 class="fw-bold">Contactez-nous</h1></div>
    </div>
<!-- eh1 -->

    <div class="container bg-light pt-5 pb-5">
        <h2 class="text-center pb-5 h11 position-relative">Commençons une conversation</h2>
        <div class="row">
            <div class="col-lg-6">
                <h3>Demandez comment nous pouvons vous aider :</h3>
                <h3 class="pt-3"><i class="fa-regular fa-handshake"></i>Points de contact :</h3>
                <div class="rs">
                    <h4 class="pb-3 text-black-50 pt-3" style="padding: 0px !important;">Reseaux Sociaux</h4>
                    <h5><a href="#"><i class="fa-brands fa-facebook"></i> Dihia Brand</a></h5>
                    <h5><a href="#" class="insta"><i class="fa-brands fa-instagram"></i> Dihia Brand</a></h5>

                </div>
            </div>
<!-- sform -->
            <div class="col-lg-6">
                <form action="#" method="post">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" required placeholder="name@example.com">
                        <label for="floatingInput">Nom</label>
                      </div>

                      <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" required placeholder="name@example.com">
                        <label for="floatingInput">Prenom</label>
                      </div>

                      <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" required placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                      </div>

                      <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" required placeholder="name@example.com">
                        <label for="floatingInput">Phone</label>
                      </div>

                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">Ton Message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                </form>
            </div>
<!-- sform -->

        </div>
    </div>

    <!-- S-footer -->
<footer class="row border-top w-100 p-3 bg-dark text-light" style="margin:0px !important ;">
    <div class="col-lg-4 ">
      <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
        <img style=" height: 35%;" src="images/Logo1.png" alt="Logo" srcset="" class="w-50">
      </a>
      <p class=" text-light">&copy; 2023</p>
    </div>
  
  
  
  
    <div class="col-lg-4">
      <h4 class="border-bottom"> Nos Service</h4>
      <ul class="nav flex-column" style="padding-right: 0px !important;">
        <li class="nav-item mb-2"><a href="prods.php" class="nav-link p-0  text-light"> <i class="fa-solid fa-shop"></i> Voir tous nos ventemnt </a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0  text-light"> <i class="fa-solid fa-scissors"></i> Fais Ton propre reve </a></li>
  
      </ul>
    </div>
  
    <div class="col-lg-4 p-0" >
      <h4 class="border-bottom"> Les Reseaux Sosieux</h4>
      <ul class="nav flex-column p-0" style="padding-right: 0px !important; width: 100%; overflow: hidden;">
        <li class="nav-item mb-2 w-100"><a href="#" class="nav-link p-0  text-light"> <i class="fa-brands fa-facebook fs-5"> </i> Facebook</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0  text-light"> <i class="fa-brands fa-instagram fs-5"></i> Instagram</a></li>
        <li class="nav-item mb-2 w-100"><a href="#" class="nav-link p-0  text-light"><i class="fa-regular fa-envelope"></i> Ghilasigh0554@gmail.com</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0  text-light"><i class="fa-brands fa-twitter fs-5"></i> Twiter</a></li>
      </ul>
    </div>
  </footer>
  <!-- E-Footer -->
    <script src="js/all.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>