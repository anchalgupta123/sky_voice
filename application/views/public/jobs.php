<?php $this->load->view('public/header');?>
  <style type="text/css">
    .block-27 ul {
  padding: 0;
  margin: 0; }
  .block-27 ul li {
    display: inline-block;
    margin-bottom: 4px;
    font-weight: 400; }
    .block-27 ul li a, .block-27 ul li span {
      color: #5dd28e;
      text-align: center;
      display: inline-block;
      width: 40px;
      height: 40px;
      line-height: 40px;
      border-radius: 50%;
      border: 1px solid #cccccc; }
    .block-27 ul li.active a, .block-27 ul li.active span {
      background: #5dd28e;
      color: #fff;
      border: 1px solid transparent; }
  </style>
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
                <h2>Jobs</h2>
        
        <!-- <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Recently Added Jobs</span>
            <h3 class="mb-4"><span>Recent</span> Jobs</h3>
          </div>
        </div> -->
        <!-- <div class="row">
           <?php foreach($posts as $key){ ?>
          <div class="col-md-12 ftco-animate" style="background-color: #f8f9fa;">
            <div class="job-post-item  p-4 d-block d-md-flex align-items-center">
              <a href=" ">
                <div class="mb-4 mb-md-0 mr-5">
                  <div class="job-post-item-header d-flex align-items-center">
                    <h3 class="mr-3 text-black h3" style="color: #484848;"><?php echo $key['job_profile']; ?></h3>                    
                  </div>
                  <div class="job_post_sub_heading">
                    <h5 style="color: #484848;">Suffa bakers pvt ltd - Indore, Madhya Pradesh</h5>
                  </div>
                  <div class="job-post-item-body d-block d-md-flex" style="color:#0069d9;">
                    <div class="mr-3"><i class="fa fa-list" aria-hidden="true"></i> information technology</div>
                    <div><i class="fa fa-map-marker" aria-hidden="true"></i> <span> Indore</span></div>
                  </div>
                </div>
              </a>
              <div class="ml-auto d-flex">
                <a href="job-single.html" class="btn btn-primary py-2 mr-1">Apply Job</a>
              </div>
            </div>
          </div>
           <?php }?>
        </div>
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <a class="btn btn-primary" href="<?php echo base_url(); ?>Home/jobs">See More</a>
            </div>
          </div>
        </div> -->
      
            <section class="ftco-section bg-light">
      <div class="container">
        <!-- <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Recently Added Jobs</span>
            <h2 class="mb-4"><span>Recent</span> Jobs</h2>
          </div>
        </div> -->
        <div class="row">
         <?php foreach($company_all_job_post as $key){ ?>
          <div class="col-md-12 ftco-animate">
            
            <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">
               
              <div class="mb-4 mb-md-0 mr-5">
                <div class="job-post-item-header d-flex align-items-center">
                  <h3 class="mr-3 text-black h3"><?php echo $key['job_profile']; ?></h3>                    
                </div>
                <div class="job_post_sub_heading">
                  <h5><?php echo $key['job_description'] ?></h5>
                </div>
                <div class="job-post-item-body d-block d-md-flex" style="color:#0069d9;">
                  <div class="mr-3"><i class="fa fa-list" aria-hidden="true"></i> <?php echo $key['job_catgory']; ?> </div>
                  <div><i class="fa fa-map-marker" aria-hidden="true"></i> <span><?php echo $key['job_location']; ?></span></div>
                </div>
              </div>
            
              <div class="ml-auto d-flex">
                <a href="<?php echo base_url(); ?>Home/job_details/<?php echo $key['id']; ?>" class="btn btn-primary py-2 mr-1">Apply Job</a>
              </div>
            </div>
          </div><!-- end -->
            <?php }?>
        </div>
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <?php echo $this->pagination->create_links(); ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- #services -->
  </main>

<?php $this->load->view('public/footer');?>

