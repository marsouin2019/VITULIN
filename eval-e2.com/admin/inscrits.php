<?php 
session_start();

//print_r($_SERVER);

//$url = "http://".$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']);




if(isset($_SESSION["prenom"]) == "cxvcxv"){

} else {
    $nomPage = "Inscrits";
    include("includes/header.php");  
    include("includes/content.php");
    include("includes/footer.php"); 
}

    
?>