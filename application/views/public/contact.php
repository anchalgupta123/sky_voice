<?php $this->load->view('public/header');?>
  
  <main id="main">
    <section id="banner_img">
      <div class="contact_page">
        <!-- <h3>Our Collaborations</h3> -->
      </div>
    </section>
    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Contact Us</h2>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>SH-18, HIG Colony Opposite, Mangal City Mall, Vijaynagar, Indore (Madhya Pradesh) – 452010</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:0731-4053017">0731-4053017</a></p>
              <p><a href="tel:8770615331">8770615331</a></p>
              <p><a href="tel:9425628541">9425628541</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@skyvoice.co.in">info@skyvoice.co.in </a><br><a href="mailto:hr@skyvoice.co.in">hr@skyvoice.co.in </a></p>
            </div>
          </div>

        </div>
      </div>

      <div class="container mb-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14717.384244045421!2d75.8965096!3d22.7525351!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x31cf363c9ed22a70!2sSkyVoice+Associates!5e0!3m2!1sen!2sin!4v1556086672444!5m2!1sen!2sin" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

      <div class="container">
        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form id="contact_form3">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="contact_name" placeholder="First Name">
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="text" class="form-control" name="email" id="contact_last_name" placeholder="Last Name" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="contact_mail" placeholder="E-Mail">
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="text" class="form-control number mobile_no_digit" name="email" id="contact_mobile" placeholder="Phone" >
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <input type="text" name="name" class="form-control" id="contact_subject" placeholder="Subject">
                <div class="validation"></div>
              </div>
              
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message" id="contact_message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit" id="btn_contact3">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->
  </main>

<?php $this->load->view('public/footer');?>

<script type="text/javascript">
  $( "#contact_form3" ).submit(function( event ) {
      contact_name = $('#contact_name').val();
      contact_last_name = $('#contact_last_name').val();
      contact_mail = $('#contact_mail').val();
      contact_mobile = $('#contact_mobile').val();
      contact_subject = $('#contact_subject').val();
      contact_message = $('#contact_message').val();


      var formData = new FormData();
      formData.append('name',contact_name);
      formData.append('last_name',contact_last_name);
      formData.append('mail',contact_mail);
      formData.append('mobile',contact_mobile);
      formData.append('subject',contact_subject);
      formData.append('message',contact_message);

      $('#btn_contact3').attr('disabled',true);

      $.ajax({
          url: base_url+"Home/send_mail_contact3", 
          type : "POST",
          data: formData,
          processData:false,
          contentType:false,  
          success: function(result)
          {
              $('#preloader').hide();   
              // console.log(result);
              if (result == 'Message sent!') 
              {
                alert('Your details has been submitted successfully!');
                $('#name').val('');
                $('#mobile').val('');
                $('#email').val('');
                $('#subject').val('');
                $('#message').val('');
              }
              else
              {
                alert('Error');
              }
              $('#btn_contact3').attr('disabled',false);
          }
      });
    event.preventDefault();
  });
</script>