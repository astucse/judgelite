<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="img/favicon.png">
  
    <title><?=$title ?></title>
  
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
            <li id="task_notificatoin_bar" class="dropdown">
                  <a class="dropdown-toggle" href="thetest.html">
                      The Test
                  </a>
                </li>
                <!-- End The season-->
            <!-- Hell -->
            <li id="task_notificatoin_bar" class="dropdown">
                <a class="dropdown-toggle" href="theseason.html">
                    The season
                    
                </a>
              </li>
              <!-- End Hell-->
              <!-- Hell -->
            <li id="task_notificatoin_bar" class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="myteam.html">
                    Teams
                    
                </a>
              </li>
              <!-- End Hell-->
            
            <!-- user login dropdown start-->
            <li class="dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                              <span class="profile-ava">
                                  <img alt="" src="assets/img/avatar1_small.jpg">
                              </span>
                              <span class="username">{{username}}</span>
                              <b class="caret"></b>
                          </a>
              <ul class="dropdown-menu extended logout">
                <div class="log-arrow-up"></div>
                <li class="eborder-top">
                  <a href="#"><i class="icon_profile"></i> My Profile</a>
                </li>
                <li>
                  <a href="#"><i class="icon_mail_alt"></i> My Inbox</a>
                </li>
                <li>
                  <a href="#"><i class="icon_clock_alt"></i> Timeline</a>
                </li>
                <li>
                  <a href="#"><i class="icon_chat_alt"></i> Chats</a>
                </li>
                <li>
                  <a href="login.html"><i class="icon_key_alt"></i> Log Out</a>
                </li>
                <li>
                  <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
                </li>
                <li>
                  <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
                </li>
              </ul>
            </li>
            <!-- user login dropdown end -->
          </ul>
          <!-- notificatoin dropdown end-->
        </div>
      </header>
      <!--header end-->
