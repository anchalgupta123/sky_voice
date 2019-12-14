<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <?php $this->load->view('bars/head',array('title'=>'Dashboard'));?>
  </head>
  <body>
    <div id="main-wrapper">
      <?php $this->load->view('bars/header');?>
      <?php $this->load->view('bars/side_bar');?>
      <div class="page-wrapper">
        <div class="page-breadcrumb">
          <div class="row">
              <div class="col-12 d-flex no-block align-items-center">
                  <h4 class="page-title">Dashboard</h4>
              </div>
          </div>
        </div>
       
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 col-lg-2 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-cyan text-center">
                        <span class="count_top text-white" style="font-size: 30px;"><i class="fa fa-calendar"></i></span>
                        <div class="count font-light text-white" style="font-size: 25px;">
                          <?php echo $total_verified +$total_unverified; ?>
                          </div>
                        <h6 class="text-white" style="font-size: 20px;"> Total  </br> Signup</h6>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-success text-center">
                          <span class="count_top text-white" style="font-size: 30px;"><i class="fa fa-check"></i></span>
                          <div class="count font-light text-white" style="font-size: 25px;">
                          <?php echo $total_verified; ?>
                          </div>
                        <h6 class="text-white" style="font-size: 20px;"> Verified  </br> Signup</h6>
                    </div>
                </div>
            </div>
             <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-warning text-center">
                        <span class="count_top text-white" style="font-size: 30px;"><i class="fa fa-crosshairs"></i></span>
                        <div class="count font-light text-white" style="font-size: 25px;">
                          <?php echo $total_unverified; ?>
                          </div>
                        <h6 class="text-white" style="font-size: 20px;"> UnVerified Signup</h6>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-danger text-center">
                       <span class="count_top text-white" style="font-size: 30px;"><i class="fa fa-credit-card"></i></span>
                        <div class="count font-light text-white" style="font-size: 25px;">
                          <?php echo $today_payment_completed; ?>
                          </div>
                        <h6 class="text-white" style="font-size: 20px;">  Payment completed</h6>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-info text-center">
                        <span class="count_top text-white" style="font-size: 30px;"><i class="fa fa-male"></i> </span>
                        <div class="count font-light text-white" style="font-size: 25px;">
                         <?php echo $total_male; ?>
                         </div>
                        <h6 class="text-white" style="font-size: 20px;"> Total  </br> males</h6>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-cyan text-center">
                        <span class="count_top text-white" style="font-size: 30px;"><i class="fa fa-female"></i> </span>
                        <div class="count font-light text-white" style="font-size: 25px;">
                          <?php echo $total_female; ?>
                          </div>
                        <h6 class="text-white" style="font-size: 20px;"> Total </br> females</h6>
                    </div>
                </div>
            </div>
          </div>
          <div class="row">
                <div class="col-md-12 text-right ">
                    <a href="javascript:void(0)" class="text-danger" onclick="staticBox('otherStatistics')">Show/Hide Other Statistics</a>
                </div>
          </div>
           <div id="otherStatistics">
              <div class="row alert alert-info bg-cyan text-white" style="margin-bottom: 20px;padding-bottom: 4%;">
                <div class="col-md-12">
                    <h2 style="padding-bottom:1%;">Daily Statistics (<?php echo date('d/m/Y'); ?>) </h2>
                    <div class="row tile_count" style="font-size: 14px;" >
                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count" style="border-right: 2px solid white;">
                            <span class="count_top"><i class="fa fa-calendar"></i> Total signup</span>
                            <div class="count" style="font-size: 38px;"><strong><?php echo $today['total']; ?></strong></div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count" style="border-right: 2px solid white;">
                            <span class="count_top"><i class="fa fa-check"></i> Verified Signup </span>
                            <div class="count" style="font-size: 38px;"><strong><?php echo $today['verified'];; ?></strong></div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count" style="border-right: 2px solid white;">
                            <span class="count_top"><i class="fa fa-crosshairs"></i> UnVerified Signup</span>
                            <div class="count"  style="font-size: 38px;"><strong><?php echo $today['unverified'];; ?></strong></div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count" style="border-right: 2px solid white;">
                            <span class="count_top"><i class="fa fa-credit-card"></i> Payment completed</span>
                            <div class="count"  style="font-size: 38px;"><strong><?php echo $today['payment'];; ?></strong></div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count" style="border-right: 2px solid white;">
                            <span class="count_top"><i class="fa fa-male"></i> Total males</span>
                            <div class="count"  style="font-size: 38px;"><strong><?php echo $today['male'];; ?></strong></div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                            <span class="count_top"><i class="fa fa-female"></i> Total females</span>
                            <div class="count"  style="font-size: 38px;"><strong><?php echo $today['female'];; ?></strong></div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row alert alert-info bg-success text-white" style="margin-bottom: 20px;padding-bottom: 4%;">
                <div class="col-md-12">
                    <h2 style="padding-bottom:1%;">Weekly Statistics (<?php echo get_current_week(); ?>) </h2>
                    <div class="row tile_count">
                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count" style="border-right: 2px solid white;">
                            <span class="count_top"><i class="fa fa-calendar"></i> Total signup</span>
                            <div class="count" style="font-size: 38px;"><strong><?php echo $week['total']; ?></strong></div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count" style="border-right: 2px solid white;" >
                            <span class="count_top"><i class="fa fa-check"></i> Verified Signup </span>
                            <div class="count" style="font-size: 38px;"><strong><?php echo $week['verified'];; ?></strong></div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count" style="border-right: 2px solid white;">
                            <span class="count_top"><i class="fa fa-crosshairs"></i> UnVerified Signup</span>
                            <div class="count" style="font-size: 38px;"><strong><?php echo $week['unverified'];; ?></strong></div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count" style="border-right: 2px solid white;">
                            <span class="count_top"><i class="fa fa-credit-card"></i> Payment completed</span>
                            <div class="count" style="font-size: 38px;"><strong><?php echo $week['payment'];; ?></strong></div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count" style="border-right: 2px solid white;">
                            <span class="count_top"><i class="fa fa-male"></i> Total males</span>
                            <div class="count" style="font-size: 38px;"><strong><?php echo $week['male'];; ?></strong></div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                            <span class="count_top"><i class="fa fa-female"></i> Total females</span>
                            <div class="count" style="font-size: 38px;"><strong><?php echo $week['female'];; ?></strong></div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row alert alert-info bg-warning text-white" style="margin-bottom: 20px;padding-bottom: 4%;">
                <div class="col-md-12">
                    <h2 style="padding-bottom:1%;">Monthly Statistics (<?php echo date('F Y');?>)</h2>
                    <div class="row tile_count">
                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count" style="border-right: 2px solid white;">
                            <span class="count_top"><i class="fa fa-calendar"></i> Total signup</span>
                            <div class="count" style="font-size: 38px;"><strong><?php echo $month['total']; ?></strong></div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count" style="border-right: 2px solid white;">
                            <span class="count_top"><i class="fa fa-check"></i> Verified Signup </span>
                            <div class="count" style="font-size: 38px;"><strong><?php echo $month['verified'];; ?></strong></div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count" style="border-right: 2px solid white;">
                            <span class="count_top"><i class="fa fa-crosshairs"></i> UnVerified Signup</span>
                            <div class="count" style="font-size: 38px;"><strong><?php echo $month['unverified'];; ?></strong></div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count" style="border-right: 2px solid white;">
                            <span class="count_top"><i class="fa fa-credit-card"></i> Payment completed</span>
                            <div class="count" style="font-size: 38px;"><strong><?php echo $month['payment'];; ?></strong></div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count" style="border-right: 2px solid white;">
                            <span class="count_top"><i class="fa fa-male"></i> Total males</span>
                            <div class="count" style="font-size: 38px;"><strong><?php echo $month['male'];; ?></strong></div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                            <span class="count_top"><i class="fa fa-female"></i> Total females</span>
                            <div class="count" style="font-size: 38px;"><strong><?php echo $month['female'];; ?></strong></div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row alert alert-info bg-danger text-white" style="margin-bottom: 20px;padding-bottom: 4%;">
                <div class="col-md-12">
                    <h2 style="padding-bottom: 1%;">Annual Statistics (<?php echo date('Y');?>)</h2>
                    <div class="row tile_count">
                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count" style="border-right: 2px solid white;">
                            <span class="count_top"><i class="fa fa-calendar"></i> Total signup</span>
                            <div class="count" style="font-size: 38px;"><strong><?php echo $year['total']; ?></strong></div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count" style="border-right: 2px solid white;">
                            <span class="count_top"><i class="fa fa-check"></i> Verified Signup </span>
                            <div class="count" style="font-size: 38px;"><strong><?php echo $year['verified'];; ?></strong></div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count" style="border-right: 2px solid white;">
                            <span class="count_top"><i class="fa fa-crosshairs"></i> UnVerified Signup</span>
                            <div class="count" style="font-size: 38px;"><strong><?php echo $year['unverified'];; ?></strong></div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count" style="border-right: 2px solid white;">
                            <span class="count_top"><i class="fa fa-credit-card"></i> Payment completed</span>
                            <div class="count" style="font-size: 38px;"><strong><?php echo $year['payment'];; ?></strong></div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count" style="border-right: 2px solid white;">
                            <span class="count_top"><i class="fa fa-male"></i> Total males</span>
                            <div class="count" style="font-size: 38px;"><strong><?php echo $year['male'];; ?></strong></div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                            <span class="count_top"><i class="fa fa-female"></i> Total females</span>
                            <div class="count" style="font-size: 38px;"><strong><?php echo $year['female'];; ?></strong></div>
                        </div>
                    </div>
                </div>

            </div>
            </div>
        </div>
      </div>
    </div>
    <?php $this->load->view('bars/footer');?>
    <?php $this->load->view('bars/js');?>
  </body>
</html>
