
    

                                                                             <!--header-->
                                                                             <?php
                                                                    include("includes/header.php")
                                                                             ?>



    <!-- form paiement-->

    <div class="container mt-5">


            <!--Section: Content-->
            <section class="dark-grey-text">
          
                <div class="card">
                <div class="card-body">
          
                  <!--Grid row-->
                  <div class="row">
          
                    <!--Grid column-->
                    <div class="col-lg-8">
          
                      <!-- Pills navs -->
                      <ul class="nav md-pills nav-justified pills-primary font-weight-bold">
                        <li class="nav-item">
                          <a class="nav-link active" data-toggle="tab" href="#tabCheckoutBilling123" role="tab">Adresse Facturation </a>
                        </li>
                        
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#tabCheckoutPayment123" role="tab">Paiement</a>
                        </li>
                      </ul>
          
                      <!-- Pills panels -->
                      <div class="tab-content pt-4">
          
                        <!--Panel 1-->
                        <div class="tab-pane fade in show active" id="tabCheckoutBilling123" role="tabpanel">
          
                          <!--Card content-->
                          <form>
          
                            <!--Grid row-->
                            <div class="row">
          
                              <!--Grid column-->
                              <div class="col-md-6 mb-4">
          
                                <!--firstName-->
                                <label for="firstName" class="">Nom</label>
                                <input type="text" id="firstName" class="form-control">
          
                              </div>
                              <!--Grid column-->
          
                              <!--Grid column-->
                              <div class="col-md-6 mb-2">
          
                                <!--lastName-->
                                <label for="lastName" class="">Prénom</label>
                                <input type="text" id="lastName" class="form-control">
          
                              </div>
                              <!--Grid column-->
          
                            </div>
                            <!--Grid row-->
          
                            <!--Téléphone-->
                            <label for="address" class="">Téléphone</label>
                            <input type="text" id="address" class="form-control mb-4" placeholder="1234 Main St">
          
                    
                            <!--email-->
                            <label for="email" class="">Email</label>
                            <input type="text" id="email" class="form-control mb-4" placeholder="youremail@example.com">
          
                            <!--address-->
                            <label for="address" class="">Adresse</label>
                            <input type="text" id="address" class="form-control mb-4" placeholder="1234 Main St">
          
                            <!--address-2-->
                            <label for="address-2" class="">Adresse complémentaire</label>
                            <input type="text" id="address-2" class="form-control mb-4" placeholder="Apartment or suite">
          
                            <!--Grid row-->
                            <div class="row">
          
                              <!--Grid column-->
                              <div class="col-lg-4 col-md-6 mb-4">
          
                                    <label for="pay">pays</label>
                                    <input type="text" class="form-control" id="zip" placeholder="" required>
                                    <div class="invalid-feedback">
                                            pays required.
                                    </div>
              
                                  </div>
                              <!--Grid column-->
          
                              <!--Grid column-->
                              <div class="col-lg-4 col-md-6 mb-4">
          
                                    <label for="commune">Commune</label>
                                    <input type="text" class="form-control" id="zip" placeholder="" required>
                                    <div class="invalid-feedback">
                                            Commune required.
                                    </div>
              
                                  </div>
                              <!--Grid column-->
          
                              <!--Grid column-->
                              <div class="col-lg-4 col-md-6 mb-4">
          
                                <label for="zip">Code postale</label>
                                <input type="text" class="form-control" id="zip" placeholder="" required>
                                <div class="invalid-feedback">
                                        Code postale required.
                                </div>
          
                              </div>
                              <!--Grid column-->
          
                            </div>
                            <!--Grid row-->
          
                            <hr>
          
                            <div class="mb-1">
                              <input type="checkbox" class="form-check-input filled-in" id="chekboxRules">
                              <label class="form-check-label" for="chekboxRules">J'accepte les termes et conditions</label>
                            </div>
                            <div class="mb-1">
                              <input type="checkbox" class="form-check-input filled-in" id="safeTheInfo">
                              <label class="form-check-label" for="safeTheInfo">Sauvegarder ces informations pour la prochaine fois

                                </label>
                            </div>
                            <div class="mb-1">
                              <input type="checkbox" class="form-check-input filled-in" id="subscribeNewsletter">
                              <label class="form-check-label" for="subscribeNewsletter">Abonnez-vous à la newsletter

                                </label>
                            </div>
          
                            <hr>
          
                            <button class="btn btn-primary btn-lg btn-block" type="submit">Etape suivante</button>
          
                          </form>
          
                        </div>
                        <!--/.Panel 1-->
          
                        <!--Panel 2-->
                        <div class="tab-pane fade" id="tabCheckoutAddons123" role="tabpanel">
          
                          <!--Grid row-->
                          <div class="row">
          
                            <!--Grid column-->
                            <div class="col-md-5 mb-4">
          
                              <img src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" class="img-fluid z-depth-1-half"
                                alt="Second sample image">
          
                            </div>
                            <!--Grid column-->
          
                            <!--Grid column-->
                            <div class="col-md-7 mb-4">
          
                              <h5 class="mb-3 h5">Additional premium support</h5>
          
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, ea ut aperiam corrupti,
                                dolorem.</p>
          
                              <!--Name-->
                              <select class="mdb-select colorful-select dropdown-info">
                                <option value="" disabled>Choose a period of time</option>
                                <option value="1" selected>+6 months : 200$</option>
                                <option value="2">+12 months: 400$</option>
                                <option value="3">+18 months: 800$</option>
                                <option value="4">+24 months: 1200$</option>
                              </select>
          
                              <button type="button" class="btn btn-primary btn-md">Add premium support to the cart</button>
          
                            </div>
                            <!--Grid column-->
          
                          </div>
                          <!--Grid row-->
          
                          <hr class="mb-5">
          
                          <!--Grid row-->
                          <div class="row">
          
                            <!--Grid column-->
                            <div class="col-md-5 mb-4">
          
                              <img src="https://mdbootstrap.com/img/Photos/Others/images/44.jpg" class="img-fluid z-depth-1-half"
                                alt="Second sample image">
          
                            </div>
                            <!--Grid column-->
          
                            <!--Grid column-->
                            <div class="col-md-7 mb-4">
          
                              <h5 class="mb-3 h5">MDB Membership</h5>
          
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, ea ut aperiam corrupti,
                                dolorem.</p>
          
                              <!--Name-->
                              <select class="mdb-select colorful-select dropdown-info">
                                <option value="" disabled>Choose a period of time</option>
                                <option value="1" selected>+6 months : 200$</option>
                                <option value="2">+12 months: 400$</option>
                                <option value="3">+18 months: 800$</option>
                                <option value="4">+24 months: 1200$</option>
                              </select>
          
                              <button type="button" class="btn btn-primary btn-md">Add MDB Membership to the cart</button>
          
                            </div>
                            <!--Grid column-->
          
                          </div>
                          <!--Grid row-->
          
                          <hr class="mb-4">
          
                          <button class="btn btn-primary btn-lg btn-block" type="submit">Next step</button>
          
                        </div>
                        <!--/.Panel 2-->
          
                        <!--Panel 3-->
                        <div class="tab-pane fade" id="tabCheckoutPayment123" role="tabpanel">
          
                          <div class="d-block my-3">
                            <div class="mb-2">
                              <input name="group2" type="radio" class="form-check-input with-gap" id="radioWithGap4" checked
                                required>
                              <label class="form-check-label" for="radioWithGap4">Credit card</label>
                            </div>
                            <div class="mb-2">
                              <input iname="group2" type="radio" class="form-check-input with-gap" id="radioWithGap5"
                                required>
                              <label class="form-check-label" for="radioWithGap5">Debit card</label>
                            </div>
                            <div class="mb-2">
                              <input name="group2" type="radio" class="form-check-input with-gap" id="radioWithGap6" required>
                              <label class="form-check-label" for="radioWithGap6">Paypal</label>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6 mb-3">
                              <label for="cc-name123">Name on card</label>
                              <input type="text" class="form-control" id="cc-name123" placeholder="" required>
                              <small class="text-muted">Full name as displayed on card</small>
                              <div class="invalid-feedback">
                                Name on card is required
                              </div>
                            </div>
                            <div class="col-md-6 mb-3">
                              <label for="cc-number123">Credit card number</label>
                              <input type="text" class="form-control" id="cc-number123" placeholder="" required>
                              <div class="invalid-feedback">
                                Credit card number is required
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-3 mb-3">
                              <label for="cc-expiration123">Expiration</label>
                              <input type="text" class="form-control" id="cc-expiration123" placeholder="" required>
                              <div class="invalid-feedback">
                                Expiration date required
                              </div>
                            </div>
                            <div class="col-md-3 mb-3">
                              <label for="cc-cvv123">CVV</label>
                              <input type="text" class="form-control" id="cc-cvv123" placeholder="" required>
                              <div class="invalid-feedback">
                                Security code required
                              </div>
                            </div>
                          </div>
                          <hr class="mb-4">
          
                          
          
                        </div>
                        <!--/.Panel 3-->
          
                      </div>
                      <!-- Pills panels -->
          
          
                    </div>
                    <!--Grid column-->
          
                    <!--Grid column-->
                    <div class="col-lg-4 mb-4">
          
                      <!-- Boutton paiement-->
<div class="modal fade right" id="ModalDanger" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="t`rue">
  <div class="modal-dialog modal-notify modal-danger modal-side modal-top-right" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <p class="heading">Votre réservation à bien été prise en compte</p>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>

      <!--Body-->
      <div class="modal-body">

        <div class="row">
          <div class="col-3">
            <p></p>
            <p class="text-center"><i class="fas fa-shopping-cart fa-4x"></i></p>
          </div>

          <div class="col-9">
            <p>Votre numéro de commande.</p>
            <h2><span class="badge">v52gs1</span></h2>
          </div>
        </div>
      </div>

      <!--Footer-->
      <div class="modal-footer justify-content-center">
        <a href="index.php" type="button" class="btn btn-danger">Boutique <i class="far fa-gem ml-1 white-text"></i></a>
       
        <a href="total_reservation.php" type="button" class="btn btn-outline-danger waves-effect">Vos réservations <i class="far fa-gem ml-1 white-text"></i></a>
        
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Boutton paiement-->

<div class="text-center">
  <a href="" class="btn btn-default btn-rounded" data-toggle="modal" data-target="#ModalDanger">Paiement</a>
</div>

          
                      <!--Card-->
                      <div class="card z-depth-0 border border-light rounded-0">
          
                        <!--Card content-->
                        <div class="card-body">
                          <h4 class="mb-4 mt-1 h5 text-center font-weight-bold">Résumé</h4>
          
                          <hr>
          
                          <dl class="row">
                            <dd class="col-sm-8">
                              Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                            </dd>
                            <dd class="col-sm-4">
                              $ 2000
                            </dd>
                          </dl>
          
                          <hr>
          
                          <dl class="row">
                            <dd class="col-sm-8">
                              Premium support - 2 years
                            </dd>
                            <dd class="col-sm-4">
                              $ 2000
                            </dd>
                          </dl>
          
                          <hr>
          
                          <dl class="row">
                            <dd class="col-sm-8">
                              MDB Membership - 2 years
                            </dd>
                            <dd class="col-sm-4">
                              $ 2000
                            </dd>
                          </dl>
          
                          <hr>
          
                          <dl class="row">
                            <dt class="col-sm-8">
                              Total
                            </dt>
                            <dt class="col-sm-4">
                              $ 2000
                            </dt>
                          </dl>
                        </div>
          
                      </div>
                      <!--/.Card-->
          
          
          
                    </div>
                    <!--Grid column-->
          
                  </div>
                  <!--Grid row-->
          
                </div>
              </div>
          
            </section>
            <!--Section: Content-->
          
          
          </div>













          

                                                                      <!--Footer-->

                                                                          <?php
                                                               include("includes/footer.php")
                                                                           ?> 


    
 









