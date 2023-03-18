<?php

    include('conn.php');

        if(isset($_POST['add'])){
        $id = $_POST['id'] ;
        $name = $_POST['name'];
        $price = $_POST['price'];
        $img = $_POST['images'];
        $insert = "INSERT INTO buy_pro (Name , Price) VALUE ('$name' , '$price')";
        mysqli_query($conn , $insert);
        header('location:profile.php') ;
    }

    
?>