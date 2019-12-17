<?php $this->load->view('public/header');?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>frontend_assets/css/util.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>frontend_assets/css/main.css">
<base href="<?php echo base_url();?>">
<style type="text/css">
	.emsg{
    color: red;
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
                <h2>Student Registration</h2>
              </div>
            </div>
            <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form id="login_form" class="login100-form validate-form p-l-55 p-r-55 p-t-120">
					<span class="login100-form-title">
						Registration
					</span>

					<div class=" wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class=" input100" id="user_name" type="text" required name="username" placeholder="Full Name">
						<span class="focus-input100"></span>
						
					</div>
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Please enter password">
					 <input class="input100" id="mobile_no" onkeypress='validate(event)' minlength="10" maxlength="10" type="text" name="pass" placeholder="Mobile No."> 
						<!-- <input class="form-control" type="mobile" name="pass" onkeypress="return isNumber(event)"> -->
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Please enter password">
						<input class="input100" id="e_mail" type="email" name="pass" placeholder="E-mail">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Please enter password">
						<input class="input100" required id="password" minlength="8" maxlength="8" type="password" name="pass" placeholder="Password" value="">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="name input100" required id="confirm_pass" minlength="8" maxlength="8" type="password" name="pass" placeholder="Confirm Password" value="">
						<span id="show_error" class="emsg hidden"></span>
					</div>
					
					<div class="container-login100-form-btn p-t-70">
						<button type="button" id="sign_btn" onclick="student_register();" class="login100-form-btn">
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

<script type="text/javascript">
$(document).ready(function(){
    var $regexname=/^([a-zA-Z0-9]{3,16})$/;
    
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
  if( !regex.test(key) ) {
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
    
    var formData = new FormData();
    formData.append('user_name',user_name);
    formData.append('mobile_no',mobile_no);
    formData.append('e_mail',e_mail);
    formData.append('password',password);
    //alert('this is alertt');
    $.ajax({
        // url: "https://localhost/sky_voice/Category/add_contact_form",
        url: base_url+"Home/student_register_form",  
        type : "POST",
        data: formData,
        processData:false,
        contentType:false,  
        success: function(result)
        { 
            if (result == 'Valid') 
            {
                alert('Registration successfully!');
                location.reload();
            }
        }
    });

}
</script>

<!-- this is my name vlidation code-->
<!--
// var $regexname=/^([a-zA-Z]{3,16})$/;

    // $('.name').on('keypress keydown keyup',function(){
    //          if (!$(this).val().match($regexname)) {
    //          	document.getElementById("sign_btn").disabled = true;
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