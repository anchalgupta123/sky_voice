
<?php $this->load->view('public/header');?>
<style type="text/css">
 .format img{
  margin-bottom: 30px;
 }
 .containerimg {
  position: relative;
  width: 103%;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color:#656161bd;
  overflow: hidden;
  width: 100%;
  height: 100%;
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  transform: scale(0);
  -webkit-transition: .3s ease;
  transition: .3s ease;
  opacity:0;
}

.containerimg:hover .overlay {
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
  opacity:1;
}

.text {
  color: black;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
.text .btn-primary{
  color: white;
  background-color: #010080;
  border-color:#010080; 
  border-radius: 30px; 
}
.text .btn-primary:hover{
  color: white;
  background-color: #010080;
  border-color:#010080;
  font-weight:600;  
}

</style>  
<main id="main">
    <section id="banner_img">
      <div class="resume_page">
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
                <h2>Resume</h2>
              </div>
              </div>
            </div>
            <div class="container-fluid">
              <div class="row format">
                <div class="col-md-4">
                 <div class="containerimg">
                 <img style="height:410px;width: 350px;border:1px solid gray;" src="<?php echo base_url();?>frontend_assets/img/resume/format111.jpg" class="image">
                  <div class="overlay">
                    <div class="text">
                      <a href="<?php echo base_url();?>home/format"><button type="button" class="btn-primary">Select Templete</button></a>
                    </div>
                  </div>
                </div>
              </div>
           </div>
       </div> 
        </div>
      </div>
    </section>
  </main>

<?php $this->load->view('public/footer');?>
</script>