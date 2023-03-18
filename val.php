<?php
    include("conn.php") ;
    $ID = $_GET['id'];
    // session_start() ;
    // $user_id = $_SESSION['user_id'];
    // $query = mysqli_query($conn , "SELECT * FROM profile where Id = $user_id") ;
    // $data = mysqli_fetch_array($query) ; "
    
    $up = mysqli_query($conn , "SELECT * FROM prods WHERE Id=$ID");
    $data = mysqli_fetch_assoc($up);
    

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
    <link rel="stylesheet" href="css/val1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;0,500;1,300&display=swap" rel="stylesheet">
    <title>DihiaBrand | Confermation</title>
            <style>
                input{
                    display: none;

                }
                @media screen and (max-width:991px) {
                    .btns {
                        margin-left: 5cm;
                        background-color: red !important;
                        position:relative !important ;
                        width:50% !important
                    }
      
                }

            </style>
</head>
<body class="text-center" style="font-family: 'Josefin Sans', sans-serif;"> 
 
<nav class="navbar navbar-expand-lg bg-body-tertiary d-flex">
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


    <div class="row d-flex justify-content-center align-items-center h-100 p-1 w-100">

        <h3 class="text-dark mt-5"> Confirmatioin D'Achat </h3>

<form action="insrtcmnds.php" method="post" class="col-lg-8 p-0">
        <div class="main  p-3 w-100"> 

                <div class="row">
            <!-- card -->
            <div class="col-lg-6 d-flex justify-content-center mb-3">
                <div class="w-75">
                    <input type="text" name="id" value="<?php echo $ID?>">
                    <input type="text" name="name" value="<?php echo $data['Name'] ?>">
                    <input type="text" name="price" value="<?php echo $data['Price'] ?>">
                    <input type="text" name="images" value="<?php echo $data['Images'] ?>"><br>
                                
                    <div class='card text-center mt-0 pt-0 h-100 mb-3'>
                        <img src='<?php echo $data['Images'] ?>' class='card-img-top' style='height:5cm ;'>
                        <div class='card-body'>
                            <h5  style=' font-weight:bold' class='card-title text-dark'><?php echo ucfirst($data['Name']) ?></h5>               
                            <p style=' font-weight:bold' class='card-text text-success'><?php echo $data['Price'] ?> DA</p>
                        </div>
                    </div> 
                </div>
            </div>
            <!-- /card -->
            <!-- form -->
            <div class="col-lg-6 mt-3">
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="Nom" id="floatingInput" required placeholder="name@example.com">
                        <label for="floatingInput"><i class="fa-solid fa-user"></i>Nom</label>
                      </div>

                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="Prenom" id="floatingInput" required placeholder="name@example.com">
                        <label for="floatingInput"><i class="fa-regular fa-user"></i>Prenom</label>
                      </div>

                      <div class="form-floating mb-3">
                        <input type="email" class="form-control" name="Mail" id="floatingInput" required placeholder="name@example.com">
                        <label for="floatingInput"><i class="fa-regular fa-envelope"></i>Email address</label>
                      </div>

                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="Phone" id="floatingInput" required placeholder="name@example.com">
                        <label for="floatingInput"><i class="fa-solid fa-phone"></i>Téléphone</label>
                      </div>

                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">Ton Message</label>
                        <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
            </div>
            <!-- /form -->
            </div>

<!-- btns -->
            <div class="d-lg-flex justify-content-center mt-3 me-0 text-center ms-5">
                <div class="row w-100 d-lg-flex justify-content-center text-end btns1 position-relative">
                    <button  name="add" type="submit" class="btn btn-success m-1 fw-bold col-lg-5 me-0">Confirem</button><br>
                    <a class="btn btn-info m-1 fw-bold col-lg-5 me-0" href="prods.php"> Routeur </a>
                </div>
            </div>
        </div>
    </div>




</form>

<!-- S-footer -->
<footer class="row border-top w-100 p-3 text-light mt-5" style="">
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
      <!-- <li class="nav-item mb-2"><a href="#" class="nav-link p-0  text-light">About</a></li> -->
    </ul>
  </div>
</footer>
<!-- E-Footer -->
                    
    
    

    <script src="js/all.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>