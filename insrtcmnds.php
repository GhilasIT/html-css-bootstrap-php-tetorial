<?php
include('conn.php') ;
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $id     = $_POST['id'] ;
        // 2en form
        $Nom    = ucfirst($_POST["Nom"]); 
        $Prenom = ucfirst($_POST["Prenom"]);
        $Mail   = ucfirst($_POST["Mail"]) ;
        $Phone  = ucfirst($_POST["Phone"]) ;
        $message= ucfirst($_POST["message"]) ;
    
    
        // echo $id ;
        
        $insert = "INSERT INTO commads (Pid , Nom , Prenom , Mail , Phone , message) VALUE ('$id' , '$Nom' , '$Prenom' , '$Mail' , '$Phone' , '$message')";
        mysqli_query($conn , $insert);

        header("location:alert.php");
    
    }else{
        header("location:prods.php");
    }
?>