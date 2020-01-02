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
                <h2>Jobs Details</h2>
                <div class="col-md-12 col-lg-8 mb-5">          
                <form action="#" class="p-5 bg-white">
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <h3><?php echo $job->job_profile; ?></h3>
                </div>
              </div>
              <div class="row form-group mb-5">
                <div class="col-md-12 mb-3 mb-md-0">
                  <h4><?php echo $job->experience ; ?></h4>
                  <div class="job-post-item-body d-block d-md-flex">
                    <div class="mr-3"><i class="fa fa-list" aria-hidden="true"></i> <?php echo $job->job_catgory; ?></div>
                    <div><i class="fa fa-map-marker" aria-hidden="true"></i> <span><?php echo $job->job_location; ?></span></div>
                  </div>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12"><h3>Job Description</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <?php echo $job->job_description; ?>
                </div>
              </div>
            </form>
          </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- #services -->
  </main>

<?php $this->load->view('public/footer');?>

