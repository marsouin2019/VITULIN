<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="css/mdb.min.css">
    <link rel="stylesheet" href="css/index.css">
    
    <title>EasyQuete Inscription</title>
  </head>
  <body>


                                                                            <!--header-->
<?php
    session_start();

    include("includes/header.php");
    $_SESSION = array();
    
?>



<div class="container">
    <div class="col-12">
<!-- Default form register -->
<?php
include("includes/forms/inscription.php");

?>

    </div>
</div>





                                                                                  <!--Footer-->

<?php
    include("includes/footer.php")
?> 


  </body>

</html>
