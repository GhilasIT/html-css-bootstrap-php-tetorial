<?php
 header( "refresh:5;url=prods.php" );?>
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
    <style>
  .header1{
    width: 100%;
    height: 15cm;
    position: relative !important; 
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #5a43939d;
}

.header1::before{
    content: "";
    background-image: url("../images/alrt.jpg");
    background-size: 100% 15cm;
    position: absolute;
    top: -0px;
    right: 0px;
    bottom: 0px;
    left: 0px;
    opacity: 0.9;
    z-index:  -100 !important;
}
        .alert{
            width:100%;
            height:30vh ;
            text-align:center ;
        }
    </style>
    <title>success</title>
</head>
<body>
<div class="alert alert-success" role="alert">
  <h1>Avec success</h1>
  <h3>nous vous appellerons bientôt</h3>
</div>

<script src="js/all.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>