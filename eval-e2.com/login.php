<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Full Width Pics - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/full-width-pics.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <?php
  include("includes/navigation.php");
?>

  <!-- Header - set the background image for the header in the line below -->
  <?php
  include("includes/header.php");
  $_SESSION["login"] = "";
  
  print_r($_SESSION);
?>

  <!-- Content section -->
  <section class="py-5">
    <div class="container">
      <h1>Login</h1>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, suscipit, rerum quos facilis repellat architecto commodi officia atque nemo facere eum non illo voluptatem quae delectus odit vel itaque amet.</p>
      <form method="POST" action="traitement.php" id="frmRegister">
  
  <div class="form-group">
    <label for="">Login</label>
    <input type="email" class="form-control" id="frmEmail" aria-describedby="" placeholder="Indiquer email(*)" name="frmemail" required>
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="">Password</label>
    <input type="password" class="form-control" id="frmPass" aria-describedby="" placeholder="Indiquer mot de passe(*)" name="frmPass" required>
    <small id="passwordHelp" class="form-text text-muted">Doit contenir entre 8 et 20 caractères.</small>
  </div>
  <input type="submit" value ="frmLogin" name="frmForm" class="btn btn-primary">

</form> 
 
                <!-- Button trigger modal -->
<div class="container">
    <p class="info"><a href="#" data-target="#exampleModalCenter" data-toggle="modal">Forgot my password</a></p>
</div>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLongTitle">What's My Password?</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>If you have forgotten your password you can reset it here.</p>
                <div class="panel-body">
                  <form action="traitement.php" method="post" name="frmPass" id="frmPass">
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control input-lg" placeholder="E-mail Address" name="frmEmail" type="email" required>
                        </div>
                        <button type="submit" class="btn btn-lg btn-primary btn-block" name="frmForm" value="frmPass">Send My Password</button>
                    </fieldset>
                  </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->
    </div>
  </section>

  <!-- Image Section - set the background image for the header in the line below -->
  <section class="py-5 bg-image-full" style="background-image: url('https://unsplash.it/1900/1080?image=1081');">
    <!-- Put anything you want here! There is just a spacer below for demo purposes! -->
    <div style="height: 200px;"></div>
  </section>

  <!-- Content section -->
  <section class="py-5">
    <div class="container">
      <h1>Section Heading</h1>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, suscipit, rerum quos facilis repellat architecto commodi officia atque nemo facere eum non illo voluptatem quae delectus odit vel itaque amet.</p>
      
    </div>
  </section>

  <?php
  include("includes/footer.php");
?>
