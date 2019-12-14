<!--==========================
    Footer
  ============================-->
  <div class="footer_set">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="footer_company">
            <h3>Company Address</h3>
            <ul class="contact">
              <li class="address">Regd. Add - House No. 64 C/O Gangadhar Dubey, Behind Anjali Store, Jabalpur Naka, Choupra Khurd Damoh (Madhya Pradesh) - 470661</li>
              <li class="address">Off. Add - SH-18, HIG Colony Opposite, Mangal City Mall, Vijaynagar, Indore (Madhya Pradesh) – 452010</li>
              <li class="phone">Contact Number – 
                <a style="text-decorations:none; color:inherit;" href=" tel:07314053017">0731-4053017</a>, 
                <a style="text-decorations:none; color:inherit;" href=" tel:8770615331">8770615331</a>, 
                <a style="text-decorations:none; color:inherit;" href=" tel:9425628541">9425628541</a>
              </li>
              <li class="email">Email:&nbsp;<a style="text-decorations:none; color:inherit;" href=" mailto:info@skyvoice.co.in">info@skyvoice.co.in</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="footer_company">
            <h3>Our Services</h3>
            <ul class="footer_our_service">
              <li><a href="<?php echo base_url(); ?>Home">Home</a></li>
              <li><a href="<?php echo base_url(); ?>about_us">About Us</a></li>
              <li><a href="<?php echo base_url(); ?>our_collaboration">Our Collaboration</a></li>
              <li><a href="<?php echo base_url(); ?>team">Team</a></li>
              <li><a href="<?php echo base_url(); ?>services">Services</a></li>
              <li><a href="<?php echo base_url(); ?>contact_us">Contact Us</a></li>
              <li><a href="<?php echo base_url(); ?>terms_conditions">Terms & Conditions</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="footer_company">
            <h3>Newsletter</h3>
            <p>Subscribe to our newsletter for discounts, specials, and more! We value your privacy.</p>
            <input type="text" name="" placeholder="Enter Your E-mail" id="newsletter">
            <button class="btn-projects " onclick="save_news_letter();">Submit</button>
          </div>
          <div class="social-links">
            <a href="https://www.facebook.com/skyvoice.co.in/" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="https://www.instagram.com/skyvoice_associates/" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a>
            <a href="https://twitter.com/SkyvoiceA" class="instagram" target="_blank"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
         </div>
        </div>
      </div>
    </div>
  </div>

  <footer id="footer">
    <div class="container">
      <div class="copyright">
        2019 &copy; All Rights Reserved By <strong>SkyVoice</strong> Associates
        
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <button class="left_btn_fixed" onclick="show_modal_enquiry_form();">
    Enquiry Form
  </button>

  <button class="right_btn_fixed" onclick="show_modal_call_form();">
    Request a Callback
  </button>

  <div class="modal fade" id="modal_enquiry_form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <form id="contact_form">
          <div class="modal-header text-center">
            <h4 class="modal-title ">Enquiry Form</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <input type="text" class="form-control" id="name" placeholder="Name" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control number mobile_no_digit" id="mobile" placeholder="Mobile No." required>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" id="email" placeholder="Email" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group">
              <textarea type="text" class="form-control" id="message" placeholder="Message" ></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-default" id="btn_contact">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modal_call_form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <form id="contact_form2">
          <div class="modal-header text-center">
            <h4 class="modal-title ">Request a Call Back</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <input type="text" class="form-control" id="req_name" placeholder="Name" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control mobile_no_digit number" id="req_mobile" placeholder="Mobile No." required>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" id="req_email" placeholder="Email" required>
            </div>
            <div class="form-group">
              <select class="form-control" id="req_subject"required>
                <option value="">Preferable time for callback</option>
                <option>09:00 AM to 12:00 PM</option>
                <option>12:00 PM to 03:00 PM</option>
                <option>03:00 PM to 06:00 PM</option>
                <option>06:00 PM to 09:00 PM</option>
              </select>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit"  class="btn btn-default" id="btn_submit_2">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- JavaScript Libraries -->
  <script src="<?php echo base_url();?>frontend_assets/lib/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>frontend_assets/lib/jquery/jquery-migrate.min.js"></script>
  <script src="<?php echo base_url();?>frontend_assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url();?>frontend_assets/lib/easing/easing.min.js"></script>
  <script src="<?php echo base_url();?>frontend_assets/lib/superfish/hoverIntent.js"></script>
  <script src="<?php echo base_url();?>frontend_assets/lib/superfish/superfish.min.js"></script>
  <script src="<?php echo base_url();?>frontend_assets/lib/wow/wow.min.js"></script>
  <script src="<?php echo base_url();?>frontend_assets/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?php echo base_url();?>frontend_assets/lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="<?php echo base_url();?>frontend_assets/lib/sticky/sticky.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="<?php echo base_url();?>frontend_assets/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="<?php echo base_url();?>frontend_assets/js/main.js"></script>
  <script type="text/javascript">
    $(".number").keydown(function (e) {

        if (event.shiftKey == true) {
            event.preventDefault();
        }

        if ((event.keyCode >= 48 && event.keyCode <= 57) || 
            (event.keyCode >= 96 && event.keyCode <= 105) || 
            event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 37 ||
            event.keyCode == 39 || event.keyCode == 46 || event.keyCode == 190) {

        } else {
            event.preventDefault();
        }

        if($(this).val().indexOf('.') !== -1 && event.keyCode == 190)
            event.preventDefault(); 
        //if a decimal has been added, disable the "."-button
    });

    function charLimit(input, maxChar) {
        var len = $(input).val().length;
        if (len > maxChar) {
            $(input).val($(input).val().substring(0, maxChar));
        }
    }

    $('.mobile_no_digit').keyup(function() {
      charLimit(this, 10);
    });

    base_url = '<?php echo base_url(); ?>';
    function show_modal_enquiry_form() {
      $('#modal_enquiry_form').modal('show');
    }
    function show_modal_call_form()
    {
      $('#modal_call_form').modal('show');
    }
    function send_mail_contact()
    {
      name = $('#name').val();
      mobile = $('#mobile').val();
      email = $('#email').val();
      subject = $('#subject').val();
      message = $('#message').val();


      var formData = new FormData();
      formData.append('name',name);
      formData.append('mobile',mobile);
      formData.append('email',email);
      formData.append('subject',subject);
      formData.append('message',message);

      $('#btn_contact').attr('disabled',true);

      $.ajax({
          url: base_url+"Home/send_mail_contact", 
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
              $('#btn_contact').attr('disabled',false);
              $('#modal_call_form').modal('hide');
          }
      });
    }

    function send_mail_contact2()
    {
      

      req_name = $('#req_name').val();
      req_mobile = $('#req_mobile').val();
      req_email = $('#req_email').val();
      req_subject = $('#req_subject').val();


      var formData = new FormData();
      formData.append('req_name',req_name);
      formData.append('req_mobile',req_mobile);
      formData.append('req_email',req_email);
      formData.append('req_subject',req_subject);

      $('#btn_submit_2').attr('disabled',true);

      $.ajax({
          url: base_url+"Home/send_mail_contact2", 
          type : "POST",
          data: formData,
          processData:false,
          contentType:false,  
          success: function(result)
          {
              $('#preloader').hide();   
              if (result == 'Message sent!') 
              {
                alert('Your details has been submitted successfully!');
                $('#req_name').val('');
                $('#req_mobile').val('');
                $('#req_email').val('');
                $('#req_subject').val('');
              }
              else
              {
                alert('Error');
              }
              $('#btn_submit_2').attr('disabled',false);
              $('#modal_enquiry_form').modal('hide');
          }
      });
    }

    $( "#contact_form" ).submit(function( event ) {
      send_mail_contact();
      event.preventDefault();
    });

    $( "#contact_form2" ).submit(function( event ) {
      send_mail_contact2();
      event.preventDefault();
    });

    function save_news_letter()
    {
      newsletter = $('#newsletter').val();

      $.ajax({
          url: base_url+"Home/save_news_letter", 
          type : "POST",
          data: {newsletter : newsletter},
          success: function(result)
          {
              // $('#preloader').hide();   
              if (result == 'Valid') 
              {
                alert('Your Email Id has been registered successfully!');
                $('#newsletter').val('');
              }
          }
      });
    }
  </script>
</body>
</html>
