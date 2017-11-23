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
            <h4>Round 12 Season 1</h4>
            <div class="follow-ava">
              <img src="assets/img/test.png" alt="">
            </div>
            <h6>League 2</h6>
          </div>
          <div class="col-lg-4 col-sm-4 follow-info">
            <p>Hello! This is ASTUCUP.</p>
            <p>If you are interested in ....</p>
          </div>
          <div class="col-lg-2 col-sm-6 follow-info weather-category">
            <ul>
              <li class="active">
                  <i class="fa fa-comments fa-2x"> </i><br> 5 Questions Solved
              </li>
            </ul>
          </div>
          <div class="col-lg-2 col-sm-6 follow-info weather-category">
            <ul>
              <li class="active">
                <i class="fa fa-bell fa-2x"> </i><br> 7 Teams Solved
              </li>
            </ul>
          </div>
          <div class="col-lg-2 col-sm-6 follow-info weather-category">
            <ul>
              <li class="active">
                <i class="fa fa-tachometer fa-2x"> </i><br><div id="clock"></div>
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
              <a data-toggle="tab" href="#recent-activity"><i class="icon-home"></i>Questions</a>
            </li>
            <li>
                  <a data-toggle="tab" href="#edit-profile"><i class="icon-home"></i>Submit your Answer</a>
                </li>
            <li>
              <a data-toggle="tab" href="#profile"><i class="icon-user"></i>Test LeaderBoard</a>
            </li>
          </ul>
        </header>










        <div class="panel-body">
          <div class="tab-content">
            <div id="recent-activity" class="tab-pane active">
              <div class="profile-activity">
                  <br>    
                  <button type="button" class="btn btn-primary btn-lg btn-block">Download The Questions in PDF</button>
                      <br>
                      <div class="col-lg-3">
                              <section class="panel">
                                      <header class="panel-heading">
                                        Problem list
                                      </header>
                                      <ul class="nav nav-tabs list-group">
                                        <a class="list-group-item active" data-toggle="tab" href="#q1">A: Attention</a>
                                        <a class="list-group-item "  data-toggle="tab" href="#q2">B: Born this way</a>
                                        <a class="list-group-item" href="javascript:;">C: Candy Paint</a>
                                        <a class="list-group-item" href="javascript:;">D: Despacito</a>
                                        <a class="list-group-item" href="javascript:;">E: </a>
                                        <a class="list-group-item" href="javascript:;">F: </a>
                                      </ul>
                                    </section>
                        
                      </div>
                      <div class="col-lg-8">
                              <div class="tab-content">
                                      <div id="q1" class="tab-pane fade in active">
                                        <h3>A: Attention</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, praesentium enim aspernatur quidem sequi, quos voluptatum fuga cumque excepturi officia neque deleniti cum veniam quas eligendi, assumenda corrupti vero vel! Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem beatae minus eveniet, labore, culpa fuga rerum aut praesentium, est corrupti asperiores veniam. Quod sequi doloribus commodi porro perspiciatis, ipsa fugit.</p>
                                      </div>
                                      <div id="q2" class="tab-pane fade">
                                        <h3>Menu 1</h3>
                                        <p>Some content in menu 1.</p>
                                      </div>
                                      <div id="menu2" class="tab-pane fade">
                                        <h3>Menu 2</h3>
                                        <p>Some content in menu 2.</p>
                                      </div>
                                    </div>
                      </div>

              </div>
            </div>



            <!-- profile -->
            <div id="profile" class="tab-pane">
                  <table class="table table-striped table-advance table-hover">
                          <tbody>
                            <tr>
                              <th><i class="icon_profile"></i> Rank</th>
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
              
                  

                        
                  <!--pre><code class="c++">
                          #include <iostream> <br> using namespace std;
                          </code></pre-->
              <section class="panel">
                      <div class="col-lg-12">
                              <div class="col-lg-8">
                                  <h2>Submissions</h2>
                              <form role="form" class="col-lg-12">
                                      <input type="file" id="exampleInputFile" class="col-lg-3">
                                      <select class="col-lg-3">
                                              <option>Question 1</option>
                                              <option>Question 2</option>
                                              <option>Question 3</option>
                                      </select>
                                      <select class="col-lg-3">
                                              <option>C++</option>
                                              <option>Java</option>
                                              <option>Python</option>
                                      </select>

                                      <button type="submit" class="btn btn-primary col-lg-3">Submit</button>
                              </form>
                              <table class="table table-striped table-advance table-hover ">
                              <tbody>
                                  <tr>
                                  <th><i class="icon_profile"></i> Time</th>
                                  <th><i class="icon_calendar"></i> Problem</th>
                                  <th><i class="icon_mail_alt"></i> Language</th>
                                  <th><i class="icon_cogs"></i> Result</th>
                                  </tr>
                                  <tr>
                                  <td>12:14:57</td>
                                  <td>Problem B</td>
                                  <td>Java</td>
                                  <td>
                                      <span style="color: red">Limit Exceeded</span> 
                                  </td>
                                  </tr>
                                  <tr>
                                  <td>12:14:57</td>
                                  <td>Problem F</td>
                                  <td>C++</td>
                                  <td>
                                      <span style="color: green">Accepted</span> 
                                  </td>
                                  </tr>
                              </tbody>
                              </table>
                              </div>
                              <div class="col-lg-4"  >
                                      <h2>Clarifications</h2>
                                      <h3>Request:</h3>
                                      <form class="form-validate form-horizontal" id="feedback_form" method="get" action="">
                                              
                                              <div class="form-group ">
                                                <label for="ccomment" class="control-label col-lg-2">Feedback</label>
                                                <div class="col-lg-10">
                                                  <textarea class="form-control " id="ccomment" name="comment" required></textarea>
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                  <label for="qqq" class="control-label col-lg-2">Type</label>
                                                  <div class="col-lg-10">
                                                          <select id="qqq" name="qqq">  
                                                                  <option>A</option>
                                                                  <option>B</option>
                                                                  <option>General</option>
                                                          </select>
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                <div class="col-lg-offset-2 col-lg-10">
                                                  <button class="btn btn-primary" type="submit">Send</button>
                                                  <button class="btn btn-default" type="button">Cancel</button>
                                                </div>
                                              </div>
                                      </form>
                                      <h3>Previous:</h3>
                                      <div class="panel-group m-bot20" id="accordion">
                                              <div class="panel panel-default">
                                                <div class="panel-heading">
                                                  <h4 class="panel-title">
                                                                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                                              Problem B: about the data type
                                                                      </a>
                                                                  </h4>
                                                </div>
                                                <div id="collapseOne" class="panel-collapse collapse in">
                                                  <div class="panel-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                                    on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                                    raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="panel panel-default">
                                                <div class="panel-heading">
                                                  <h4 class="panel-title">
                                                                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                                              Problem C: about the data type
                                                                      </a>
                                                                  </h4>
                                                </div>
                                                <div id="collapseTwo" class="panel-collapse collapse">
                                                  <div class="panel-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                                    on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                                    raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <!--collapse end-->
                                
                          
                              </div>
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