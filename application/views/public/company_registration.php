<?php $this->load->view('public/header');?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>frontend_assets/css/util.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>frontend_assets/css/main.css">
<base href="<?php echo base_url();?>">
<style type="text/css">
  .emsg{
    color: red;
    font-size: 12px;
}
.emsg1{
    color: red;
    font-size: 12px;
}
.emsg2{
    color: red;
    font-size: 12px;
}
.emsg3{
    color: red;
    font-size: 12px;
}
.emsg4{
    color: red;
    font-size: 12px;
}
.hidden {
     display: none;
}
</style>
  <main id="main">

    <section id="banner_img">
      <div class="team_page">
        <!-- <h3>Our Collaborations</h3> -->
      </div>
    </section>

    <!--==========================
      Clients Section
    ============================-->
    <section id="services">
      <div class="container">
        <div class="about_us_start">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <div class="section-header">
                <h2>Company Registration</h2>
              </div>
            </div>
            <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <form  class="login100-form validate-form p-l-55 p-r-55 p-t-120">
          <span class="login100-form-title">
             Registration
          </span>

          <div class=" wrap-input100 validate-input m-b-16" data-validate="Please enter username">
            <input class=" input100" id="user_name" type="text" value="" placeholder="Company Name">
            <span id="show_error" class="emsg1 hidden"></span>
          </div>
          
          <div class="wrap-input100 validate-input m-b-16" data-validate = "Please enter password">
           <input class="input100" id="mobile_no" value="" maxlength="10" onkeypress='validate(event)' type="text"  placeholder="Mobile No."> 
            <!-- <input class="form-control" type="mobile" name="pass" onkeypress="return isNumber(event)"> -->
            <span id="show_error" class="emsg2 hidden"></span>
          </div>
          <div class="wrap-input100 validate-input m-b-16" data-validate = "Please enter password">
            <input class="email input100"  value="" id="e_mail" type="email" placeholder="E-mail">
            <span id="show_error" class="emsg3 hidden"></span>
          </div>
          <div class="wrap-input100 validate-input m-b-16" data-validate = "Please enter password">
            <input class="input100"  id="password" maxlength="8" minlength="8" value="" type="password" placeholder="Password" value="">
            <span id="show_error" class="emsg4 hidden"></span>
          </div>
          <div class="wrap-input100 validate-input" data-validate = "Please enter password">
            <input class="name input100"  id="confirm_pass" maxlength="8" minlength="8" type="password"  value="" placeholder="Confirm Password" value="">
            <span id="show_error" class="emsg hidden"></span>
          </div>
          
          <div class="container-login100-form-btn p-t-70">
            <button  id="sign_btn" type="button" onclick="student_register();" class="login100-form-btn">
              Sign up 
            </button>
          </div>

          <div class="flex-col-c p-t-50 p-b-40">
            
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
<?php $this->load->view('bars/js');?>
<script type="text/javascript">
$(document).ready(function(){
    var $regexname=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    
    $('.name').on('keypress keydown keyup',function(){
      var password=$('#password').val();
      var confirm_pass=$('#confirm_pass').val();
             if (password !=confirm_pass) {
              document.getElementById("sign_btn").disabled = true;
              // there is a mismatch, hence show the error message
                 $('.emsg').removeClass('hidden');
                 $('.emsg').html("Confirm Password does not match");
                 $('.emsg').show();

             }
           else{
                // else, do not display message
                document.getElementById("sign_btn").disabled = false;
                $('.emsg').addClass('hidden');
               }
         });
    $('.email').on('keypress keydown keyup',function(){
            if (!$(this).val().match($regexname)) {
               document.getElementById("sign_btn").disabled = true;
              //there is a mismatch, hence show the error message
                 $('.emsg3').removeClass('hidden');
                 $('.emsg3').html("plese enter the valid email id");
                 $('.emsg3').show();

             }
           else{
                // else, do not display message
                var email=$('#e_mail').val();
                $.ajax({
                  url: base_url+"Home/check_email_already_exist",  
                  type : "POST",
                  data: {email:email},
                  success: function(result)
                  { 
                      if (result == 'Valid') 
                      {
                        $('.emsg3').removeClass('hidden');
                        $('.emsg3').html("this email id alresdy in use");
                        $('.emsg3').show();
                      }
                      else
                      {
                          document.getElementById("sign_btn").disabled = false;
                          $('.emsg3').addClass('hidden');
                      }
                  }
              });
             
               }
         });
});
function validate(evt) {
  var theEvent = evt || window.event;

  // Handle paste
  if (theEvent.type === 'paste') {
      key = event.clipboardData.getData('text/plain');
  } else {
  // Handle key press
      var key = theEvent.keyCode || theEvent.which;
      key = String.fromCharCode(key);
  }
  var regex = /[0-9]|\./;
  if( !regex.test(key)) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}
</script>
<script type="text/javascript">

  function student_register(){
    user_name = $('#user_name').val();
    mobile_no = $('#mobile_no').val();
    e_mail = $('#e_mail').val();
    password = $('#password').val();
    confirm_pass = $('#confirm_pass').val();
    
    if (user_name=='') {
      $('.emsg1').removeClass('hidden');
      $('.emsg1').html("Plese enter your company name");
      $('.emsg1').show();
    }
    else if (mobile_no=='') {
      $('.emsg2').removeClass('hidden');
      $('.emsg2').html("Plese enter your Mobile No.");
      $('.emsg2').show();
      $('.emsg1').hide();
    }
    else if (e_mail=='') {
      $('.emsg3').removeClass('hidden');
      $('.emsg3').html("Plese enter your email id");
      $('.emsg3').show();
      $('.emsg2').hide();
      $('.emsg1').hide();
    }
    else if (password=='') {
      $('.emsg4').removeClass('hidden');
      $('.emsg4').html("Plese enter your password");
      $('.emsg4').show();
      $('.emsg3').hide();
      $('.emsg2').hide();
      $('.emsg1').hide();
    }
    else if (confirm_pass=='') {
      $('.emsg').removeClass('hidden');
      $('.emsg').html("Plese enter confirm passowrd");
      $('.emsg').show();
      $('.emsg4').hide();
      $('.emsg3').hide();
      $('.emsg2').hide();
      $('.emsg1').hide();
    }
    else{

    var formData = new FormData();
    formData.append('user_name',user_name);
    formData.append('mobile_no',mobile_no);
    formData.append('e_mail',e_mail);
    formData.append('password',password);
    //alert('this is alertt');
    $.ajax({
        // url: "https://localhost/sky_voice/Category/add_contact_form",
        url: base_url+"Home/company_register_form",  
        type : "POST",
        data: formData,
        processData:false,
        contentType:false,  
        success: function(result)
        { 
            if (result == 'Valid') 
            {
             window.location.href=base_url+ "Home/companyLogIn";
            }
        }
    });

}
}
</script>

<!-- this is my name vlidation code-->
<!--
// var $regexname=/^([a-zA-Z]{3,16})$/;

    // $('.name').on('keypress keydown keyup',function(){
    //          if (!$(this).val().match($regexname)) {
    //            document.getElementById("sign_btn").disabled = true;
    //           // there is a mismatch, hence show the error message
    //              $('.emsg').removeClass('hidden');
    //              $('.emsg').html("");
    //              $('.emsg').show();

    //          }
    //        else{
                // else, do not display message
         //        document.getElementById("sign_btn").disabled = false;
         //        $('.emsg').addClass('hidden');
         //       }
         // });-->