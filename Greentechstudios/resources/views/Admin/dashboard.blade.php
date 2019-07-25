@extends('layouts.superlayout')
@section('content')
<!-- page content -->
       
          <!-- top tiles -->
          <?php
              // include('connect.php');
              // $photo_sql = mysql_query("SELECT COUNT(*) FROM photos");
              // $num=mysql_fetch_array($photo_sql);
              // $no_photos=$num[0];
              // $mes_sql = mysql_query("SELECT COUNT(*) FROM messages");
              // $num=mysql_fetch_array($mes_sql);
              // $no_mes=$num[0];
              // $user_sql = mysql_query("SELECT COUNT(*) FROM users WHERE role='Admin'");
              // $num=mysql_fetch_array($user_sql);
              // $no_user=$num[0];
              // $subscribers_sql = mysql_query("SELECT COUNT(*) FROM subscribers");
              // $num=mysql_fetch_array($subscribers_sql);
              // $no_subscribers=$num[0];   
                
              
              ?>
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Photos </span>
              <div class="count purple"><?php //echo $no_photos; ?></div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Comments</span>
              <div class="count green"><?php //echo $no_mes; ?></div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
              <div class="count red"><?php //echo $no_user; ?></div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Subscribers</span>
              <div class="count purple"><?php //echo $no_subscribers; ?></div>
            </div>

            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Number of Email Subscribers</span>
              <div class="count green">2,500</div>
            </div>
          </div>
          <!-- /top tiles -->

          
          <br />

          <div class="row">


            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="x_panel tile fixed_height_320">
                <div class="x_title">
                  <h2>Quick Settings</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div class="dashboard-widget-content">
                    <ul class="quick-list">
                      <li><i class="fa fa-calendar-o"></i><a href="dashboard.php">Settings</a>
                      </li>
                      <li><i class="fa fa-bars"></i><a href="mailsubscribers.php">Subscription</a>
                      </li>
                      <li><i class="fa fa-bar-chart"></i><a href="#">Auto Renewal</a> </li>
                      <li><i class="fa fa-line-chart"></i><a href="#">Achievements</a>
                      </li>
                      <li><i class="fa fa-area-chart"></i><a href="logout.php">Logout</a>
                      </li>
                    </ul>

                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="panel panel-default">
              <div class="panel-heading">
                   View Website 
              </div>
              <div class="panel-body">
                <a href="{{ url('/index') }}" target="new">
                  <button class="btn btn-success" >
                      Click Here To View Your Website
                  </button></a>
                  
                   
              </div>
          </div>
          </div>

          <div class="col-lg-4">
              <div class="panel panel-default">
              <div class="panel-heading">
                   Change Your Password 
              </div>
              <div class="panel-body">
                  <button class="btn btn-warning" data-toggle="modal"  data-target="#newReg">
                      Click Here To Change Password
                  </button><br>
                   
              </div>
      

             
          </div>

          </div>
                    <div class="col-lg-4">
              <div class="panel panel-default">
              <div class="panel-heading">
                   Send Email To Subscribers
              </div>

              <div class="btn-group">
                
                            <a href="mailto:" class="btn btn-primary btn-sm waves-effect waves-light remove-record"><i class="fa fa-reply"></i>&nbsp;Reply</a>
                           
                          </div>
          </div>
          </div>
                   
                   
                    <div class="col-lg-12">
                        <div class="modal fade" id="newReg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H4"> Fill your Credentials</h4>
                                        </div>
                                        <div class="modal-body">
                                        <form role="form" action="dashboard.php" method="post" name="registration" onsubmit="return validateForm()">
                                           
                                        <div class="form-group">
                                            <label>Your Current Email</label>
                                            <input class="form-control" type="email" id='c_email' name="c_email" />
                                            <div style=" color: red;" id="mail_err"></div>
                                        </div>
                                        <div class="form-group">
                                            <label>Your Current Password</label>
                                            <input class="form-control" type="password" id='currentpassword' name="currentpassword" />
                                            <div style=" color: red;" id="currentpassword_err"></div>
                                        </div>
                                       <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" type="password" id='c_password' name="c_password" />
                                            <div style=" color: red;" id="password_err"></div> 
                                        </div>
                                        <div class="form-group">
                                            <label>Retype Password</label>
                                            <input class="form-control" type="password" id='repassword' name="repassword" />
                                            <div style=" color: red;" id="repassword_err"></div>
                                        </div>
                                       
                                   
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary" name="submitpass_reset">Save changes</button>
                                        </div>
                                         </form>
                                    </div>
                                </div>
                            </div>
                    </div>

          </div>
        </div>
        <!-- /page content -->

        @endsection()