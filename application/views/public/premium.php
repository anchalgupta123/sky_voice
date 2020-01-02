<?php $this->load->view('public/header');?>
<main id="main">
    <section id="banner_img">
      <div class="service_page">
        <!-- <h3>Our Collaborations</h3> -->
      </div>
    </section>
    <!--==========================
      Clients Section
    ============================-->
    <section id="services">
      <div class="container">
        <div class="about_us_start services_page">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <div class="section-header">
                <h2>Premium Jobs</h2>
                <div class=" col-sm-4 col-md-4 col-lg-4 " style="margin-left: 400px;">
              <div class="box">
                <p>you had not registered yet for premium jobs under paid membership.</p>
                <img src="<?php echo base_url();?>frontend_assets/img/about_us/02.png" style="margin-top: 20px;">
                  <?php $this->login_std_id = $this->session->userdata('login_std_id');
                 if (!$this->login_std_id) {?>
                <div class="ml-auto d-flex">
                <a href="<?php echo base_url();?>Home/studentRegistratoin" class="btn btn-primary py-2 mr-1 " style="margin-left: 90px;margin-top: 40px;">Register Now</a>
              </div>
            <?php }
            else {?>
              <div class="ml-auto d-flex">
                <a href="javascript:void(0)" class="btn btn-primary py-2 mr-1 " style="margin-left: 90px;margin-top: 40px;">Paid Now</a>
              </div>
           <?php }?>
                
              </div>
            </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- #services -->
  </main>

<?php $this->load->view('public/footer');?>

