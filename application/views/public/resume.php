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
  background-color:#656161eb;
  overflow: hidden;
  width: 100%;
  height: 100%;
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  transform: scale(0);
  -webkit-transition: .3s ease;
  transition: .3s ease;
}

.containerimg:hover .overlay {
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
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
                 <button type="button" class="btn btn-primary btn-lg" onclick="">BUILD YOUR RESUME</button>
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
                      <a href="<?php echo base_url();?>"><button type="button" class="btn-primary" style="color: black;font-weight:900;">Select Templete</button></a>
                    </div>
                  </div>
                </div>
              </div>
                <div class="col-md-4 ">
                  <div class="containerimg">
                   <img style="height:410px;width: 350px;border:1px solid gray;" src="<?php echo base_url();?>frontend_assets/img/resume/format2.jpg" class="image">
                    <div class="overlay">
                    <div class="text">
                      <a href="<?php echo base_url();?>"><button type="button" class="btn-primary" style="color: black;font-weight:900;">Select Templete</button></a>
                    </div>
                  </div>
                  </div>
                </div> 
                <div class="col-md-4">
                 <div class="containerimg">
                 <img style="height:410px;width: 350px;border:1px solid gray;" src="<?php echo base_url();?>frontend_assets/img/resume/format333.jpg" class="image">
                    <div class="overlay">
                      <div class="text">
                        <a href="<?php echo base_url();?>"><button type="button" class="btn-primary" style="color: black;font-weight:900;">Select Templete</button></a>
                      </div>
                    </div>
                    </div>
                  
                </div> 
                <div class="col-md-4">
                  <div class="containerimg">
                    <img style="height:410px;width: 350px;border:1px solid gray;" src="<?php echo base_url();?>frontend_assets/img/resume/format4.jpg" class="image">
                     <div class="overlay">
                      <div class="text">
                        <a href="<?php echo base_url();?>"><button type="button" class="btn-primary" style="color: black;font-weight:900;">Select Templete</button></a>
                      </div>
                    </div>
                    </div>
                  </div>
                <div class="col-md-4">
                  <div class="containerimg">
                    <img style="height:410px;width: 350px;border:1px solid gray;" src="<?php echo base_url();?>frontend_assets/img/resume/format555.jpg" class="image">
                     <div class="overlay">
                      <div class="text">
                        <a href="<?php echo base_url();?>"><button type="button" class="btn-primary" style="color: black;font-weight:900;">Select Templete</button></a>
                      </div>
                    </div> 
                 </div>
                <div class="col-md-4">
                 <div class="containerimg">
                   <img style="height:410px;width: 350px;border:1px solid gray;" src="<?php echo base_url();?>frontend_assets/img/resume/format666.jpg" class="image">
                     <div class="overlay">
                      <div class="text">
                        <a href="<?php echo base_url();?>"><button type="button" class="btn-primary" style="color: black;font-weight:900;">Select Templete</button></a>
                      </div>
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

<script type="text/javascript">
$(document).ready(function() {

  var bodyEl = $('body'),
    accordionDT = $('.accordion').find('dt'),
    accordionDD = accordionDT.next('dd'),
    parentHeight = accordionDD.height(),
    childHeight = accordionDD.children('.content').outerHeight(true),
    newHeight = parentHeight > 0 ? 0 : childHeight,
    accordionPanel = $('.accordion-panel'),
    buttonsWrapper = accordionPanel.find('.buttons-wrapper'),
    openBtn = accordionPanel.find('.open-btn'),
    closeBtn = accordionPanel.find('.close-btn');

  bodyEl.on('click', function(argument) {
    var totalItems = $('.accordion').children('dt').length;
    var totalItemsOpen = $('.accordion').children('dt.is-open').length;

    if (totalItems == totalItemsOpen) {
      openBtn.addClass('hidden');
      closeBtn.removeClass('hidden');
      buttonsWrapper.addClass('is-open');
    } else {
      openBtn.removeClass('hidden');
      closeBtn.addClass('hidden');
      buttonsWrapper.removeClass('is-open');
    }
  });

  function openAll() {

    openBtn.on('click', function(argument) {

      accordionDD.each(function(argument) {
        var eachNewHeight = $(this).children('.content').outerHeight(true);
        $(this).css({
          height: eachNewHeight
        });
      });
      accordionDT.addClass('is-open');
    });
  }

  function closeAll() {

    closeBtn.on('click', function(argument) {
      accordionDD.css({
        height: 0
      });
      accordionDT.removeClass('is-open');
    });
  }

  function openCloseItem() {
    accordionDT.on('click', function() {

      var el = $(this),
        target = el.next('dd'),
        parentHeight = target.height(),
        childHeight = target.children('.content').outerHeight(true),
        newHeight = parentHeight > 0 ? 0 : childHeight;

      // animate to new height
      target.css({
        height: newHeight
      });

      // remove existing classes & add class to clicked target
      if (!el.hasClass('is-open')) {
        el.addClass('is-open');
      }

      // if we are on clicked target then remove the class
      else {
        el.removeClass('is-open');
      }
    });
  }

  openAll();
  closeAll();
  openCloseItem();
});
</script>