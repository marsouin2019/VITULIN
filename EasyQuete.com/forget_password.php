 
 
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
 <?php
    session_start();
    include("includes/header.php");
   
    
?>
 <body>
 
                                                                            <!--header-->



  <div class="container my-5 py-5 z-depth-1">

 
    
    <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">


    
      <div class="row d-flex justify-content-center">

      
        <div class="col-md-6">

          
          <form class="text-center" action="traitement.php" method="POST" id="frmRegister">

            <p class="h4 mb-4">Modification de mot de passe</p>

           
            <!-- E-mail -->
            <input type="email" name="email" id="email" class="form-control mb-4" placeholder="E-mail">

            <!-- Password -->
            <input type="password" name="password" id="password" class="form-control" placeholder="Nouveau mot de passe"
              aria-describedby="defaultRegisterFormPasswordHelpBlock">
            <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
              Au moins 8 caractères
            </small>

           

           
            <button class="btn btn-info my-4 btn-block" name="frmReset" value="frmForm" type="submit">Changer de mot de passe</button>

            
            

            <hr>

           

          </form>
          

        </div>
        
      </div>
      


    </section>
   


  </div>


                                                                          <!--Footer-->

                                                                              <?php
                                                                 include("includes/footer.php");
                                                                              ?>



 </body>

 </html>
 
 



