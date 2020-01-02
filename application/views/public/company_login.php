<?php $this->load->view('public/header');?>
<base href="<?php echo base_url();?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>frontend_assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>frontend_assets/css/main.css">
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
                <h2>Company Login</h2>
              </div>
            </div>
            <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login1002">
				<form id="login_form" class="login100-form validate-form p-l-55 p-r-55 p-t-120">
					<span class="login100-form-title">
						Sign In
					</span>
					<!-- <span id="error_msg" style="color: red;font-size: 12px;"></span> -->
					<span id="show_error" class="emsg hidden"></span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class="input1002" id="company_login" type="text" name="username" placeholder="E-mail/Mobile No.">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input1002" id="password" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="text-right p-t-13 p-b-23">
						<span class="txt1">
							Forgot
						</span>

						<a href="#" class="txt2">
						 Password?
						</a>
					</div>

					<div class="container-login100-form-btn3">
						<button type="submit" onclick="" class="login100-form-btn">
							Sign in
						</button>
					</div>

					<div class="flex-col-c p-t-50 p-b-40">
						<span class="txt1 p-b-9">
							Don’t have an account?
						</span>

						<a href="<?php echo base_url();?>Home/companyRegistratoin" class="txt3">
							Sign up now
						</a>
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
// 	window.onload = function(){
//     window.scrollTo(0, Number.'50');
// }
$(document).scrollTop('50');
window.scrollBy(0,400);	
</script>
<script type="text/javascript">
      $( "#login_form" ).submit(function( event ) {
        company_login_check();
        event.preventDefault();
      });
    </script>
