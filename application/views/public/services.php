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
                <h2>Services</h2>
                <p>
                  SKYVOICE Associates was established with a mission to provide world class Executive Search and Consultancy services to our clients to help them enhance their competitiveness through quality human capital. At the same time we aim to help candidates achieve their career objectives. We have a highly motivated team of HR consultants who with their professional skills and proven expertise who can handle national and international clients. Currently, India has huge job opportunity in the Banking as well as the Government sector. Further, as we all know, Government and Banking jobs are well paying jobs with lot of advantages like job security and other perks. Many students are focusing on the Banking and Government sector to shape their future.
                </p>
                <p>
                  If you are planning to appear for various competitive exams, the first step is to know about the date of the exam. For that, skyvoice is focussed on providing the informations regarding the prospects.
                </p>

                <p>
                  Skyvoice Associates is also an informative platfrom where the students enrolled in our application will get detailed information of the various competetive and entrance exmas that are beig held in Pan India and in international spectrum. Various segments which are covered in our spectrum includes.
                </p>
                <ul>
                  <li>Engineering and technology</li>
                  <li>Medical and nursing</li>
                  <li>Management and administration</li>
                  <li>Arts and commerce</li>
                  <li>Agriculture and Horticulture</li>
                  <li>Law and Legislatures</li>
                  <li>Animal husbandry and veterinary science</li>
                  <li>Professional and industrial training</li>
                </ul>
                <br>
                <h4>OUR SERVICES</h4>
                <div class="accordion-panel">
                  <dl class="accordion">
                    <dt><i class="plus-icon"></i> Placements </dt>
                    <dd>
                      <div class="content">
                        <p>Skyvoice.co.in is India’s foremost Online Placement Portal with an user freindly appliation, servicing to multifarious job seekers as well as recruiters in India. When it comes to searching jobs in India, the name skyvoice.co.in serves as a preferred Indian Jobs Site. The reputed players of the modern corporate world frequently browse through the portal to hire professionals from different industrial segments. Skyvoice Associates is a stepping-stone to a rich career opportunity, no matter you are a novice or experienced.</p>
                      </div>
                    </dd>
                    <dt>Payroll <i class="plus-icon"></i></dt>
                    <dd>
                      <div class="content">
                        <p>We understand the significance of error-free payroll in any business organisation. Skyvoice.co.in hold massive experience in Payroll management and strive hard to absorb employers-related responsibilities so that you can focus on your business. Whether an amateur or a large business entrepreneur our excellent payroll service can assist your business in payroll management thereby reducing costs.</p>
                      </div>
                    </dd>
                    <dt>Outsourcing <i class="plus-icon"></i></dt>
                    <dd>
                      <div class="content">
                        <p>Outsource your non-core tasks and get access to specialized skills and services. Save on money, time and infrastructure. Give your business the competitive advantage.<br>
                        Outsourcing brings a host of advantages<br><br>

                        Save big! Take advantage of the cost benefits<br><br>

                        Get access to specialised services<br><br>

                        Reduce time to delivery, benefit from time zone advantages<br><br>

                        Scale operations up or down without the hassle of hiring and training<br><br>

                        Improved customer satisfaction due to high quality & fast delivery<br><br>

                        See an increase in your business.</p>
                      </div>
                    </dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- #services -->
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