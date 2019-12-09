<doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/mdb.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/article.css">

<title>EasyQuete</title>
  </head>
<body>
    
                                                                         <!--header-->
                                                                              <?php
                                                                    include("includes/header.php")
                                                                                ?>
 
     



<div class="container-fluid">
  <div class="col-12">
    <div class="row">
      <div class="col-4">
          <div class="container my-5 py-5 z-depth">


    <!--Section: Content-->
    <section class="tri">

      <p class="text-center font-weight-bold">Filtre</p>


      <!--Grid row-->
      <div class="row d-flex justify-content-center">

        <!--Grid column-->
        <div class="col-lg-5 col-md-5 col-sm-12 border p-4">

          <!-- Filter panel -->
          <div class="mb-5">
            <h5 class="font-weight-bold mb-3">Order by</h5>

            <div class="divider-small mb-3"></div>

            <ul class="list-unstyled link-black">
              <li class="mb-2">
                <a href="" class="active">Défault</a>
              </li>
              <li class="mb-2">
                <a href="" class="">Popularité</a>
              </li>
              <li class="mb-2">
                <a href="" class="">Avis</a>
              </li>
              <li class="mb-2">
                <a href="" class="">Prix: décroissant</a>
              </li>
              <li class="mb-2">
                <a href="" class="">Prix: croissant</a>
              </li>
            </ul>
          </div>
          <!-- Filter panel -->

          <!-- Filter panel -->
          <div class="mb-5">

            <h5 class="font-weight-bold mb-3">Categorie</h5>

            <div class="divider-small mb-3"></div>

            <div class="form-check pl-0 mb-2">
              <input type="radio" class="form-check-input" id="materialGroupExample1" name="groupOfMaterialRadios">
              <label class="form-check-label" for="materialGroupExample1">All</label>
            </div>

            <div class="form-check pl-0 mb-2">
              <input type="radio" class="form-check-input" id="materialGroupExample2" name="groupOfMaterialRadios"
                checked>
              <label class="form-check-label" for="materialGroupExample2">Laptops</label>
            </div>

            <div class="form-check pl-0 mb-2">
              <input type="radio" class="form-check-input" id="materialGroupExample3" name="groupOfMaterialRadios">
              <label class="form-check-label" for="materialGroupExample3">Smartphones</label>
            </div>

            <div class="form-check pl-0 mb-2">
              <input type="radio" class="form-check-input" id="materialGroupExample4" name="groupOfMaterialRadios">
              <label class="form-check-label" for="materialGroupExample4">Tablets</label>
            </div>

          </div>
          <!-- Filter panel -->

          <!-- Filter panel -->
          <div class="mb-5">

            <h5 class="font-weight-bold mb-3">Prix</h5>

            <div class="divider-small mb-3"></div>

            <form class="range-field">
              <input type="range" min="0" max="500"/>
            </form>

            <div class="row justify-content-center">

              <!-- Grid column -->
              <div class="col-md-6 text-left">
                <p class="dark-grey-text"><strong id="resellerEarnings">0$</strong></p>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-6 text-right">
                <p class="dark-grey-text"><strong id="clientPrice">500$</strong></p>
              </div>
              <!-- Grid column -->
            </div>

          </div>
          <!-- Filter panel -->

          <!-- Filter panel -->
          <div class="link-black">

            <h5 class="font-weight-bold mb-3">Avis</h5>

            <div class="divider-small mb-3"></div>

            <div class="amber-text fa-sm mb-1">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <a href="" class="ml-2 active">4 and more</a>
            </div>

            <div class="amber-text fa-sm mb-1">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <a href="" class="ml-2">3 - 3,99</a>
            </div>

            <div class="amber-text fa-sm mb-1">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <a href="" class="ml-2">3.00 and less</a>
            </div>

          </div>
          <!-- Filter panel -->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->


    </section>
    <!--Section: Content-->


  </div>
      </div>
      <div class="col-8">
          <div class="container my-5 py-5">


    <!--Section: Content-->
    <section class="text-center">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4">

          <a href="" class="waves-effect waves-light"><img
              src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/14.jpg" class="img-fluid"
              alt=""></a>

          <p class="mb-1"><a href="" class="font-weight-bold black-text">Sony TV-675</a></p>

          <p class="mb-1"><small class="mr-1"><s>$599</s></small><strong>$299</strong></p>

          <button type="button" class="btn btn-indigo btn-rounded btn-sm px-3">Buy Now</button>
          <button type="button" class="btn btn-outline-indigo btn-rounded btn-sm px-3 waves-effect">Details</button>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4">

          <a href="" class="waves-effect waves-light"><img
              src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/13.jpg" class="img-fluid"
              alt=""></a>

          <p class="mb-1"><a href="" class="font-weight-bold black-text">Samsung CT-567</a></p>

          <p class="mb-1"><small class="mr-1"><s>$599</s></small><strong>$299</strong></p>

          <button type="button" class="btn btn-indigo btn-rounded btn-sm px-3">Buy Now</button>
          <button type="button" class="btn btn-outline-indigo btn-rounded btn-sm px-3 waves-effect">Details</button>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4">

          <a href="" class="waves-effect waves-light"><img
              src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/12.jpg" class="img-fluid"
              alt=""></a>

          <p class="mb-1"><a href="" class="font-weight-bold black-text">Dell V-964i</a></p>

          <p class="mb-1"><small class="mr-1"><s>$599</s></small><strong>$299</strong></p>

          <button type="button" class="btn btn-indigo btn-rounded btn-sm px-3">Buy Now</button>
          <button type="button" class="btn btn-outline-indigo btn-rounded btn-sm px-3 waves-effect">Details</button>

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->


    </section>
    <!--Section: Content-->


  </div>
    <div class="container my-5 py-5">


    <!--Section: Content-->
    <section class="text-center">


      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-lg-3 col-md-12 mb-4">

          <a href="" class="waves-effect waves-light"><img
              src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/14.jpg" class="img-fluid"
              alt=""></a>

          <p class="mb-1"><a href="" class="font-weight-bold black-text">Sony TV-675</a></p>

          <p class="mb-1"><small class="mr-1"><s>$599</s></small><strong>$299</strong></p>

          <button type="button" class="btn btn-indigo btn-rounded btn-sm px-3">Buy Now</button>
          <button type="button" class="btn btn-outline-indigo btn-rounded btn-sm px-3 waves-effect">Details</button>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4">

          <a href="" class="waves-effect waves-light"><img
              src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/13.jpg" class="img-fluid"
              alt=""></a>

          <p class="mb-1"><a href="" class="font-weight-bold black-text">Samsung CT-567</a></p>

          <p class="mb-1"><small class="mr-1"><s>$599</s></small><strong>$299</strong></p>

          <button type="button" class="btn btn-indigo btn-rounded btn-sm px-3">Buy Now</button>
          <button type="button" class="btn btn-outline-indigo btn-rounded btn-sm px-3 waves-effect">Details</button>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4">

          <a href="" class="waves-effect waves-light"><img
              src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/12.jpg" class="img-fluid"
              alt=""></a>

          <p class="mb-1"><a href="" class="font-weight-bold black-text">Dell V-964i</a></p>

          <p class="mb-1"><small class="mr-1"><s>$599</s></small><strong>$299</strong></p>

          <button type="button" class="btn btn-indigo btn-rounded btn-sm px-3">Buy Now</button>
          <button type="button" class="btn btn-outline-indigo btn-rounded btn-sm px-3 waves-effect">Details</button>

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->


    </section>
    <!--Section: Content-->


  </div>
    <div class="container my-5 py-5">


    <!--Section: Content-->
    <section class="text-center">


      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-lg-3 col-md-12 mb-4">

          <a href="" class="waves-effect waves-light"><img
              src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/14.jpg" class="img-fluid"
              alt=""></a>

          <p class="mb-1"><a href="" class="font-weight-bold black-text">Sony TV-675</a></p>

          <p class="mb-1"><small class="mr-1"><s>$599</s></small><strong>$299</strong></p>

          <button type="button" class="btn btn-indigo btn-rounded btn-sm px-3">Buy Now</button>
          <button type="button" class="btn btn-outline-indigo btn-rounded btn-sm px-3 waves-effect">Details</button>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4">

          <a href="" class="waves-effect waves-light"><img
              src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/13.jpg" class="img-fluid"
              alt=""></a>

          <p class="mb-1"><a href="" class="font-weight-bold black-text">Samsung CT-567</a></p>

          <p class="mb-1"><small class="mr-1"><s>$599</s></small><strong>$299</strong></p>

          <button type="button" class="btn btn-indigo btn-rounded btn-sm px-3">Buy Now</button>
          <button type="button" class="btn btn-outline-indigo btn-rounded btn-sm px-3 waves-effect">Details</button>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4">

          <a href="" class="waves-effect waves-light"><img
              src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/12.jpg" class="img-fluid"
              alt=""></a>

          <p class="mb-1"><a href="" class="font-weight-bold black-text">Dell V-964i</a></p>

          <p class="mb-1"><small class="mr-1"><s>$599</s></small><strong>$299</strong></p>


          <button type="button" class="btn btn-indigo btn-rounded btn-sm px-3">Buy Now</button>
          <button type="button" class="btn btn-outline-indigo btn-rounded btn-sm px-3 waves-effect">Details</button>

        </div>
        <!--Grid column-->

      </div>

      <!--Grid row-->


    </section>
    <!--Section: Content-->


  </div>
      </div>
    </div>
  </div>
</div>    


<!--pagination-->
<div class="container-fluid">
  <nav class="pages">
        <ul class="pagination pg-red">
          <li class="page-item">
            <a class="page-link" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
              <span class="sr-only">Previous</span>
            </a>
          </li>
          <li class="page-item active"><a class="page-link">1</a></li>
          <li class="page-item"><a class="page-link">2</a></li>
          <li class="page-item"><a class="page-link">3</a></li>
          <li class="page-item"><a class="page-link">4</a></li>
          <li class="page-item"><a class="page-link">5</a></li>
          <li class="page-item">
            <a class="page-link" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
              <span class="sr-only">Next</span>
            </a>
          </li>
        </ul>
    </nav>
</div>
      
  </body>
</html>











    
    




                                                                         <!--Footer-->
                                                                           <?php
                                                                include("includes/footer.php")
                                                                            ?> 




  </body>
</html>










