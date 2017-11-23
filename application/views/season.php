<?php
$this->viewModel->get_header('default');
?>



<!--main content start-->
<section id="main-content">
      <section class="wrapper">

        <div class="row">
          <!-- profile-widget -->
          <div class="col-lg-12">
            <div class="profile-widget profile-widget-info">
              <div class="panel-body">
                <div class="col-lg-2 col-sm-2">
                  <h4>Season 1</h4>
                  <div class="follow-ava">
                    <img src="assets/img/icpccup.jpg" alt="">
                  </div>
                  <h6>3rd Episode</h6>
                </div>
                <div class="col-lg-4 col-sm-4 follow-info">
                  <p>Hello! This is the first ASTUICPC cup competition.</p>
                  <p>If you are interested in ....</p>
                </div>
                <div class="col-lg-2 col-sm-6 follow-info weather-category">
                  <ul>
                    <li class="active">
                        <i class="fa fa-comments fa-2x"> </i><br> Every Saturday!!!
                    </li>
                  </ul>
                </div>
                <div class="col-lg-2 col-sm-6 follow-info weather-category">
                  <ul>
                    <li class="active">
                      <i class="fa fa-bell fa-2x"> </i><br> 35 Teams
                    </li>
                  </ul>
                </div>
                <div class="col-lg-2 col-sm-6 follow-info weather-category">
                  <ul>
                    <li class="active">
                      <i class="fa fa-tachometer fa-2x"> </i><br>1 Cup
                    </li>
                  </ul>
                </div>


              </div>
            </div>
          </div>
        </div>
        <!-- page start-->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading tab-bg-info">
                <ul class="nav nav-tabs">
                  <li class="active">
                    <a data-toggle="tab" href="#recent-activity"><i class="icon-home"></i>Timeline</a>
                  </li>
                  <li>
                    <a data-toggle="tab" href="#profile"><i class="icon-user"></i>Season LeaderBoard</a>
                  </li>
                  <li class="">
                    <a data-toggle="tab" href="#edit-profile"><i class="icon-envelope"></i>????</a>
                  </li>
                </ul>
              </header>










              <div class="panel-body">
                <div class="tab-content">
                  <div id="recent-activity" class="tab-pane active">
                    <div class="profile-activity">
                            <div id="myTimeline">
                                    <section id="timeline">
                                      <div id="year2016" class="group2016">2016</div>
                                      <article class="animated fadeInUp">
                                        <div class="panel">
                                          <div class="badge">20 Jan</div>
                                          <div class="panel-body">
                                            <img src="../img/qrcode.png" width="150px" class="img-responsive">
                                            <h2>Sample with image</h2>
                                            <p>Lorem ipsum dolor sit amet, nisl lorem.</p>
                                          </div>
                                        </div>
                                      </article>
                                      <div id="year2015" class="group2015">2015</div>
                                      <article class="animated fadeInUp inverted">
                                        <div class="panel">
                                          <div class="badge">29 Mar</div>
                                          <div class="panel-heading">
                                            <h4 class="panel-title">Sample of header</h4>
                                          </div>
                                          <div class="panel-body">
                                            <h1>Lorem ipsum</h1>
                                            <p>Lorem ipsum dolor sit amet, nisl lorem.</p>
                                          </div>
                                          <div class="panel-footer">Sample of footer</div>
                                        </div>
                                      </article>
                                      <article class="animated fadeInUp">
                                        <div class="panel">
                                          <div class="badge">&nbsp;</div>
                                        </div>
                                      </article>
                                      <div class="clearfix" style="float: none;"></div>
                                    </section>
                                  </div>

                    </div>
                  </div>



                  <!-- profile -->
                  <div id="profile" class="tab-pane">
                        <table class="table table-striped table-advance table-hover">
                                <tbody>
                                  <tr>
                                    <th><i class="icon_profile"></i> Team Name</th>
                                    <th><i class="icon_calendar"></i> Members</th>
                                    <th><i class="icon_mail_alt"></i> Total Point</th>
                                    <th><i class="icon_cogs"></i> Action</th>
                                  </tr>
                                  <tr>
                                    <td>Mario Norris</td>
                                    <td>Kibru Demeke<br>Demeke Tadesse<br>Tadesse Hawotto</td>
                                    <td>123</td>
                                    <td>
                                      <div class="btn-group">
                                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                      </div>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                  </div>










                  <!-- edit-profile -->
                  <div id="edit-profile" class="tab-pane">
                    <section class="panel">
                      <div class="panel-body bio-graph-info">
                        <h1> Profile Info</h1>
                        <form class="form-horizontal" role="form">
                          <div class="form-group">
                            <label class="col-lg-2 control-label">First Name</label>
                            <div class="col-lg-6">
                              <input type="text" class="form-control" id="f-name" placeholder=" ">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Last Name</label>
                            <div class="col-lg-6">
                              <input type="text" class="form-control" id="l-name" placeholder=" ">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">About Me</label>
                            <div class="col-lg-10">
                              <textarea name="" id="" class="form-control" cols="30" rows="5"></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Country</label>
                            <div class="col-lg-6">
                              <input type="text" class="form-control" id="c-name" placeholder=" ">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Birthday</label>
                            <div class="col-lg-6">
                              <input type="text" class="form-control" id="b-day" placeholder=" ">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Occupation</label>
                            <div class="col-lg-6">
                              <input type="text" class="form-control" id="occupation" placeholder=" ">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Email</label>
                            <div class="col-lg-6">
                              <input type="text" class="form-control" id="email" placeholder=" ">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Mobile</label>
                            <div class="col-lg-6">
                              <input type="text" class="form-control" id="mobile" placeholder=" ">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Website URL</label>
                            <div class="col-lg-6">
                              <input type="text" class="form-control" id="url" placeholder="http://www.demowebsite.com ">
                            </div>
                          </div>

                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <button type="submit" class="btn btn-primary">Save</button>
                              <button type="button" class="btn btn-danger">Cancel</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </section>
                  </div>




                </div>
              </div>
            </section>
          </div>
        </div>

        <!-- page end-->
      </section>

      


      <?php
    $this->viewModel->get_footer('default');
?>