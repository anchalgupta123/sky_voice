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
                          <!-- <?php echo $total_verified +$total_unverified; ?> -->23
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
                          <!-- <?php echo $total_verified; ?> -->23
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
                          <!-- <?php echo $total_unverified; ?> -->23
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
                          <!-- <?php echo $today_payment_completed; ?> -->23
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
                        <!--  <?php echo $total_male; ?> -->23
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
                          <!-- <?php echo $total_female; ?> -->23
                          </div>
                        <h6 class="text-white" style="font-size: 20px;"> Total </br> females</h6>
                    </div>
                </div>
            </div>
          </div>
          <!--  -->
        </div>
      </div>
    </div>
    <?php $this->load->view('bars/footer');?>
    <?php $this->load->view('bars/js');?>
  </body>
</html>
