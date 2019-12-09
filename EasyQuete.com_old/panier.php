<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
<link rel="stylesheet" href="css/mdb.css">
<link rel="stylesheet" href="css/index.css">
<title>EasyQuete</title>
  </head>
  <body>
    
                                                                           <!--header-->
                                                                           <?php
                                                                    include("includes/header.php")
                                                                            ?>      
                                                                            
                                                                            

<!--panier -->

    <div class="container my-5 py-3 z-depth-1 rounded">


      <!--Section: Content-->
      <section class="dark-grey-text">
    
        <!-- Shopping Cart table -->
        <div class="table-responsive">
    
          <table class="table product-table mb-0">
    
            <!-- Table head -->
            <thead class="mdb-color lighten-5">
              <tr>
                <th></th>
                <th class="font-weight-bold">
                  <strong>Produits</strong>
                </th>
                <th class="font-weight-bold">
                  <strong>Couleur</strong>
                </th>
                <th></th>
                <th class="font-weight-bold">
                  <strong>Prix Unitaire</strong>
                </th>
                <th class="font-weight-bold">
                  <strong>Quantités</strong>
                </th>
                <th class="font-weight-bold">
                  <strong>Prix</strong>
                </th>
                <th></th>
              </tr>
            </thead>
            <!-- /.Table head -->
    
            <!-- Table body -->
            <tbody>
    
              <!-- First row -->
              <tr>
                <th scope="row">
                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/13.jpg" alt="" class="img-fluid z-depth-0">
                </th>
                <td>
                  <h5 class="mt-3">
                    <strong>iPhone</strong>
                  </h5>
                  <p class="text-muted">Apple</p>
                </td>
                <td>White</td>
                <td></td>
                <td>$800</td>
                <td>
                  <input type="number" value="2" aria-label="Search" class="form-control" style="width: 100px">
                </td>
                <td class="font-weight-bold">
                  <strong>$800</strong>
                </td>
                <td>
                  <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top"
                    title="Remove item">X
                  </button>
                </td>
              </tr>
              <!-- /.First row -->
    
              <!-- Second row -->
              <tr>
                <th scope="row">
                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/6.jpg" alt="" class="img-fluid z-depth-0">
                </th>
                <td>
                  <h5 class="mt-3">
                    <strong>Headphones</strong>
                  </h5>
                  <p class="text-muted">Sony</p>
                </td>
                <td>Red</td>
                <td></td>
                <td>$200</td>
                <td>
                  <input type="number" value="2" aria-label="Search" class="form-control" style="width: 100px">
                </td>
                <td class="font-weight-bold">
                  <strong>$600</strong>
                </td>
                <td>
                  <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top"
                    title="Remove item">X
                  </button>
                </td>
              </tr>
              <!-- /.Second row -->
    
              <!-- Third row -->
              <tr>
                <th scope="row">
                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/1.jpg" alt="" class="img-fluid z-depth-0">
                </th>
                <td>
                  <h5 class="mt-3">
                    <strong>iPad Pro</strong>
                  </h5>
                  <p class="text-muted">Apple</p>
                </td>
                <td>Gold</td>
                <td></td>
                <td>$600</td>
                <td>
                  <input type="number" value="2" aria-label="Search" class="form-control" style="width: 100px">
                </td>
                <td class="font-weight-bold">
                  <strong>$1200</strong>
                </td>
                <td>
                  <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top"
                    title="Remove item">X
                  </button>
                </td>
              </tr>
              <!-- /.Third row -->
    
              <!-- Fourth row -->
              <tr>
                <td colspan="3"></td>
                <td>
                  <h4 class="mt-2">
                    <strong>Total</strong>
                  </h4>
                </td>
                <td class="text-right">
                  <h4 class="mt-2">
                    <strong>€</strong>
                  </h4>
                </td>
                <td colspan="3" class="text-right">
                 <a href="total_reservation.php"> <button type="button" class="btn btn-primary btn-rounded">Terminer Votre Réservation</button> </a>
                    
                  
                </td>
              </tr>
              <!-- Fourth row -->
    
            </tbody>
            <!-- /.Table body -->
    
          </table>
    
        </div>
        <!-- /.Shopping Cart table -->
    
      </section>
      <!--Section: Content-->
    
    
    </div>

                                                                             <!--Footer-->
     
                                                                                 <?php
                                                                   include("includes/footer.php")
                                                                                  ?> 



</body>
</html>



















































