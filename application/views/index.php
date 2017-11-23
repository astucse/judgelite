
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="img/favicon.png">

  <title><?=$title?></title>

  <?= link_tag('public/assets/css/bootstrap.min.css'); ?>
  <?= link_tag('public/assets/css/bootstrap-theme.css'); ?>
  <?= link_tag('public/assets/css/elegant-icons-style.css'); ?>
  <?= link_tag('public/assets/css/font-awesome.min.css'); ?>
  <?= link_tag('public/assets/css/style.css'); ?>
  <?= link_tag('public/assets/css/style-responsive.css'); ?>
  <?= link_tag('public/assets/plugins/highlightjs/default.css'); ?>
  
</head>






<body>
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->
    <header class="header dark-bg">


      <!--logo start-->
      <a href="index.html" class="logo">ASTU <span class="lite">ICPC</span></a>
      <!--logo end-->

    

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

            <!-- The season -->
          <li id="task_notificatoin_bar" >
                <a class="btn btn-success" data-toggle="modal" data-target="#loginModal">
                    Signin / Login
                </a>
              </li>
              <!-- End The season-->
          <!-- Hell -->
          
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->






<!-- Modal -->
<div id="loginModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Login  To ASTUICPC</h4>
      </div>
      <div class="modal-body">
            <?= form_open('register/login'); ?>
            <p><?= form_input('id', '', array('class'=>'span3', 'placeholder'=>'ID', 'data-validation'=>'required')); ?></p>
            <p><?= form_password('password', '', array('class'=>'span3', 'placeholder'=>'Password', 'data-validation'=>'required')); ?></p> 
              <p><?= form_submit('submit','Login',array('class'=>'btn btn-primary')); ?>
                <a href="#">Forgot Password?</a>
              </p>
            <?= form_close(); ?>

















      </div>
      <div class="modal-footer">
          New To astuicpc?
          <a href="<?= base_url('register'); ?>" class="btn btn-primary">Register</a>
      </div>
    </div>

  </div>
</div>



























    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">

            <section class="jumbotron jumbotron-fluid container col-lg-12">
                      <div class=" col-lg-3">
                          <img src="assets/img/icpc.png" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
                        </div>
                      <div class=" col-lg-6">
                        <h1 class="display-3">Compete till you die</h1>
                        <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
                      </div>
                      <div class=" col-lg-3">
                          <img src="assets/img/astulogo.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
                        </div>
            </section>
            <div class="container col-lg-12">
                <section class="jumbotron jumbotron-fluid col-lg-6">
                    <h3>League 1 Standing</h3>
                    <table class="table table-striped table-advance table-hover">
                        <tbody>
                          <tr>
                            <th><i class="icon_profile"></i> Rank</th>
                            <th><i class="icon_profile"></i> Team</th>
                            <th><i class="icon_mail_alt"></i> Total Point</th>
                          </tr>
                          <tr>
                              <td>1</td>
                              <td>Mario Norris</td>
                              <td>123</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Hello World</td>
                                <td>321</td>
                              </tr>
                        </tbody>
                      </table>
                  </section>
                  <section class="jumbotron jumbotron-fluid col-lg-6" >
                      <h3>League 2 Standing</h3>
                      <table class="table table-striped table-advance table-hover">
                          <tbody>
                            <tr>
                              <th><i class="icon_profile"></i> Rank</th>
                              <th><i class="icon_profile"></i> Team</th>
                              <th><i class="icon_mail_alt"></i> Total Point</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Mario Norris</td>
                                <td>123</td>
                              </tr>
                              <tr>
                                  <td>2</td>
                                  <td>Hello World</td>
                                  <td>321</td>
                                </tr>
                          </tbody>
                        </table>
                    </section>
            </div>
            <section class="jumbotron jumbotron-fluid container col-lg-12">
                      <div class=" col-lg-3">
                          <img src="assets/img/icpc.png" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
                        </div>
                      <div class=" col-lg-6">
                        <h1 class="display-3">Compete till you die</h1>
                        <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
                      </div>
                      <div class=" col-lg-3">
                          <img src="assets/img/astulogo.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
                        </div>
            </section>
 


        <!-- page end-->
      </section>

      



































      


    </section>
  <!-- container section end -->
  
    <!-- javascripts -->
    <script src="<?=base_url()?>public/assets/js/jquery.js"></script>
    <script src="<?=base_url()?>public/assets/js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="<?=base_url()?>public/assets/js/jquery.scrollTo.min.js"></script>
    <script src="<?=base_url()?>public/assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- jquery validate js -->
    <script type="text/javascript" src="<?=base_url()?>public/assets/js/jquery.validate.min.js"></script>
  
    <!-- custom form validation script for this page-->
    <script src="<?=base_url()?>public/assets/js/form-validation-script.js"></script>
    <!--custome script for all page-->
    <script src="<?=base_url()?>public/assets/js/scripts.js"></script>

    <script src="<?=base_url()?>public/assets/plugins/jquery-albe-timeline/jquery-albe-timeline.min.js"></script>
  
    
  </body>
  
  </html>
  