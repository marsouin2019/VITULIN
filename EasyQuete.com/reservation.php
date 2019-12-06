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
<link rel="stylesheet" href="css/bootstrap.css">
<title>EasyQuete</title>
  </head>
  <body>
    
                                                                           <!--header-->
                                                                           <?php
                                                                    include("includes/header.php")
                                                                            ?>      


<div class="container z-depth-1 p-5 my-5">
<h3 class="font-weight-bold mb-4 pb-2">Votre réservation</h3> 
<p>pour le date/heure.</p>

  <!-- Section: Block Content -->
  <section>

    <!-- Shopping Cart table -->
    <div class="table-responsive">
      <table class="table product-table table-cart-v-1">
        <!-- Table head -->
        <thead>
          <tr>
            <th>Articles</th>
            <th class="font-weight-bold">
              <strong>Produits</strong>
            </th>
            <th class="font-weight-bold">
              <strong>Couleurs</strong>
            </th>
            <th></th>
            <th class="font-weight-bold">
              <strong>Prix</strong>
            </th>
            <th class="font-weight-bold">
              <strong>Quantités</strong>
            </th>
            <!--
            <th class="font-weight-bold">
              <strong>Amount</strong>
            </th>-->
            <th></th>
          </tr>
        </thead>
        <!-- Table head -->
        <!-- Table body -->
        <tbody>
          <!-- First row -->
          <tr>
            <th scope="row">
              <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/13.jpg" alt=""
                class="img-fluid z-depth-0">
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
            <td class="text-center text-md-left">
              <span class="qty">1 </span>
              
            </td>
            <td class="font-weight-bold">
              <strong>$800</strong>
            </td>
            
          </tr>
          <!-- First row -->
          <!-- Second row -->
          <tr>
            <th scope="row">
              <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/6.jpg" alt=""
                class="img-fluid z-depth-0">
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
            <td class="text-center text-md-left">
              <span class="qty">3 </span>
              
            </td>
            <td class="font-weight-bold">
              <strong>$600</strong>
            </td>
            
          </tr>
          <!-- Second row -->
          <!-- Third row -->
          <tr>
            <th scope="row">
              <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/1.jpg" alt=""
                class="img-fluid z-depth-0">
            </th>
            <td>
              <h5 class="mt-3">
                <strong>iPad Pro</strong>
              </h5>
              <p class="text-muted">by FifeSteps</p>
            </td>
            <td>Gold</td>
            <td></td>
            <td>$600</td>
            <td class="text-center text-md-left">
              <span class="qty">2 </span>
             
            </td>
            <td class="font-weight-bold">
              <strong>$1200</strong>
            </td>
            <td>
             
            </td>
          </tr>
          <tr>
            <th scope="row">
              <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/13.jpg" alt=""
                class="img-fluid z-depth-0">
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
            <td class="text-center text-md-left">
              <span class="qty">1 </span>
              
            </td>
            <td class="font-weight-bold">
              <strong>$800</strong>
            </td>
            
          </tr>
          <!-- First row -->
          <!-- Second row -->
          <tr>

          <tr>
            <th scope="row">
              <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/13.jpg" alt=""
                class="img-fluid z-depth-0">
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
            <td class="text-center text-md-left">
              <span class="qty">1 </span>
              
            </td>
            <td class="font-weight-bold">
              <strong>$800</strong>
            </td>
            
          </tr>
          <!-- First row -->
          <!-- Second row -->
          <tr>

          <!-- Third row -->
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
                <strong></strong>
              </h4>
            </td>
            <!--
            <td colspan="3" class="text-right">
              <button type="button" class="btn btn-primary btn-rounded">Complete purchase
                <i class="fas fa-angle-right right"></i>
              </button>
            </td>-->
          </tr>
          <!-- Fourth row 
        </tbody>
        <!-- Table body -->
      </table>
    </div>
    <!-- Shopping Cart table -->

  </section>
  <!-- Section: Block Content -->

</div>

<div><a href="total_reservation.php"><button type="button" class="btn blue-gradient btn-block btn-rounded z-depth-1a">Revenir a vos réservations</button></a></div>

                                                                             <!--Footer-->
     
                                                                             <?php
                                                                   include("includes/footer.php")
                                                                                  ?> 

</body>
</html>