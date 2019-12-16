     <!--header-->
     <?php
        session_start();
        include("includes/header.php")
    ?>      


<div class="container">
    <div class="row my-2">
        <div class="col-lg-8 order-lg-2">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Profil</a>
                </li>
               
                <li class="nav-item">
                    <a href="" data-target="#message" data-toggle="tab" class="nav-link ">Message</a>
                </li>
                <li class="nav-item">
                    <a href="" data-target="#edit" data-toggle="tab" class="nav-link">Editer</a>
                </li>
            </ul>
            <div class="tab-content py-4">
                <div class="tab-pane active" id="profile">
                    <h5 class="mb-3"><i class="fas fa-user-alt"></i>Profil utilisateur</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <h6>A propos</h6>
                            
                        </div>
                        
                        <div class="col-md-12">
                            <h5 class="mt-2"><span class="fa fa-clock-o ion-clock float-right"></span> Activité récente</h5>
                            <table class="table table-sm table-hover table-striped">
                                <tbody>      
                                <div class="alert alert-info alert-dismissable">
                        <a class="panel-close close" data-dismiss="alert">×</a> This is an <strong>.alert</strong>. Use this to show important messages to the user.
                    </div>      
                    <div class="alert alert-info alert-dismissable">
                        <a class="panel-close close" data-dismiss="alert">×</a> This is an <strong>.alert</strong>. Use this to show important messages to the user.
                    </div>
                    <div class="alert alert-info alert-dismissable">
                        <a class="panel-close close" data-dismiss="alert">×</a> This is an <strong>.alert</strong>. Use this to show important messages to the user.
                    </div>
                    <div class="alert alert-info alert-dismissable">
                        <a class="panel-close close" data-dismiss="alert">×</a> This is an <strong>.alert</strong>. Use this to show important messages to the user.
                    </div>                        
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--/row-->
                </div>
              
                <div class="tab-pane" id="edit">
  <?php
    include("includes/forms/profil.php");
  ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 order-lg-1 text-center">
                
                
                    <!-- Central Modal Medium Success -->
    <div class="modal fade" id="centralModalSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-notify modal-success" role="document">
    
        <!--Content-->
        <div class="modal-content">
        <!--Header-->
        <div class="modal-header">
            <p class="heading lead">Confirmation de la suppression</p>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="white-text">&times;</span>
            </button>
        </div>
         

        <!--Body-->
        <div class="modal-body">
            <div class="text-center">
            <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
            <p>Votre demande de suppression de profil a bien été prise en compte.</p>
            </div>
        </div>

        <!--Footer-->
        <div class="modal-footer justify-content-center">
            
            <a href="index.php" type="button" class="btn btn-success">Boutique</a>
        </div>
        </div>
        <!--/.Content-->
    </div>
    </div>
<!-- Central Modal Medium Success-->

<!-- Button trigger modal -->
<div class="text-center">
  <a href="" class="btn btn-default btn-rounded" type="submit" name="frmForm" value="frmDelete" data-toggle="modal" data-target="#centralModalSuccess">Suppression de votre profil<i class="fas fa-user-slash"></i></a>
</div>

<style>
.btn-default {
    color: 
#fff;
background-color:
    #d00b0b !important;
}
</style>
            </label>
        </div>
    </div>
</div>










































<!--Footer-->
     
<?php
                                                                   include("includes/footer.php")
                                                                                  ?> 