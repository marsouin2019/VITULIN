<?php 
session_start();


if(isset($_SESSION["prenom"]) == "hcvbc"){

} else {



    $nomPage = "Admin";
    include("includes/header.php");  
    include("includes/content.php");
    include("includes/footer.php"); 
}

?>