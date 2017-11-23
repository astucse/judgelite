
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
        <h4 class="modal-title">Login To ASTUICPC</h4>
      </div>
      <div class="modal-body">
          <form method="post" action='' name="login_form">
              <p><input type="text" class="span3" name="eid" id="email" placeholder="Email"></p>
              <p><input type="password" class="span3" name="passwd" placeholder="Password"></p>
              <p><button type="submit" class="btn btn-primary">Sign in</button>
                <a href="#">Forgot Password?</a>
              </p>
            </form>
      </div>
      <div class="modal-footer">
          New To astuicpc?
          <a href="<?= base_url('register'); ?>" class="btn btn-primary">Register</a>
      </div>
    </div>

  </div>
</div>





























		
			<div class="jumbotron"><h1>Signup Carefully</h1>
				<div class="form-group">


					<?= form_open('register/signup'); ?>

					<h4>Full Name</h4>
                    <?= form_input('fullname', '', array('class'=>'form-control', 'placeholder'=>'Username', 'data-validation'=>'required')); ?>
                    
                    <h4>ID</h4>
                    <?= form_input('id', '', array('class'=>'form-control', 'placeholder'=>'id', 'data-validation'=>'required')); ?>

                    <h4>Gender</h4>
                    <?php
                    $options = array(
                            'M'         => 'Male',
                            'F'           => 'Female'
                    );
                    
                    echo form_dropdown('Gender', $options, 'large');
                    ?>
                    
                    <h4>Email</h4>
					<?= form_input('email', '', array('class'=>'form-control', 'placeholder'=>'email', 'data-validation'=>'required')); ?>

                    <h4>Password</h4>
					<?= form_password('password', '', array('class'=>'form-control', 'placeholder'=>'Password', 'data-validation'=>'required')); ?>


					<div class="divider"></div>
					<?= form_submit('submit','Signup',array('class'=>'btn btn-primary pull-right')); ?>

					<?= form_close(); ?>



					
				</div>
				<a href="<?=base_url('login')?>">Already registered?</a>
			</div>
			
	


      



































      


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
  