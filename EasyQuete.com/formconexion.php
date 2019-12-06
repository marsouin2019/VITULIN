 
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
     <link rel="stylesheet" href="css/index.css">
     <link rel="stylesheet" href="css/mdb.min.css">
     <title>Document</title>
 </head>
 <body>
    
                                                                            <!--header-->
                                                                                <?php
                                                                    include("includes/header.php")
                                                                                ?>


  <div class="container my-5 py-5 z-depth-1">

 
    <!--Section: Content-->
    <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">


      <!--Grid row-->
      <div class="row d-flex justify-content-center">

        <!--Grid column-->
        <div class="col-md-6">

          <!-- Default form register -->
          <form class="text-center" action="traitement.php" method="POST" id="frmRegister">

            <p class="h4 mb-4">Sign up</p>

           
            <!-- E-mail -->
            <input type="email" name="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail">

            <!-- Password -->
            <input type="password" name="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Password"
              aria-describedby="defaultRegisterFormPasswordHelpBlock">
            <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
              At least 8 characters and 1 digit
            </small>

           

            <!-- Sign up button -->
            <button class="btn btn-info my-4 btn-block" name="frmForm" value="frmLogin" type="submit">Sign in</button>

            <!-- Social register -->
            <p>or sign up with:</p>

            <div class="col">
              <img src="img/instagram.png" alt="" srcset="" height="45px">
              <img src="img/watsaap.png" alt="" srcset="" height="50px">
              <img src="img/twiter.png" alt="" srcset="" height="50px">
              <img src="img/Facebook2.png" alt="" srcset="" height="50px">
            </div>

            <hr>

           

          </form>
          <!-- Default form register -->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->


    </section>
    <!--Section: Content-->


  </div>


                                                                          <!--Footer-->

                                                                              <?php
                                                                 include("includes/footer.php");
                                                                              ?>



 </body>

 </html>
 
 



