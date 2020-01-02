<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Skyvoice</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?php echo base_url();?>frontend_assets/img/favicon.png" rel="icon">
  <link href="<?php echo base_url();?>frontend_assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo base_url();?>frontend_assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo base_url();?>frontend_assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>frontend_assets/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>frontend_assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>frontend_assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>frontend_assets/lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="<?php echo base_url();?>frontend_assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">

<style type="text/css">
  <style>
.dropbtn {
  background-color: yellow;
  color: black;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
  z-index: 100;
  /*background-color: #273272;*/

}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
/*   background-color:  #273272;*/
background-color:  #273272;
}

.dropdown-content a {
 color: black;
 margin-top: 10px;
 padding-right: 200px;
  text-decoration: none;
  display: block;
   
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

</style>
  <!-- Main Stylesheet File -->
  <link href="<?php echo base_url();?>frontend_assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Reveal
    Theme URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body id="body">

  <!--==========================
    Top Bar
  ============================-->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="fa fa-envelope-o"></i> <a href="mailto:contact@example.com">info@skyvoice.co.in</a>
        <i class="fa fa-phone"></i> <a href="tel:+918770615331">+91 8770615331</a>
      </div>
      <div class="log float-right">
       <?php $this->login_std_id = $this->session->userdata('login_std_id');
       $login_std_user_name=$this->session->userdata('login_std_user_name');
       $user_name=$this->session->userdata('login_user_name');
       if (!$this->login_std_id) {?>
         <a href="<?php echo base_url();?>Home/studentLogIn"><button type="button" class="btn btn-success">Student Login</button></a>
         <a href="<?php echo base_url();?>Home/companyLogIn"><button type="button" class="btn btn-danger">Company Login</button></a>
        <?php }
        else
          {?>
            <div class="dropdown">
              <a type="button" class="dropbtn"><?php echo  $login_std_user_name;?>&nbsp;&#9662;</a>
              <div class="dropdown-content">
                <a  href="#">My Profile</a>
                <a href="#">My Resume</a>
                <a href="#">Primium Membership</a>
                <a href="#"></a>
                 
              </div>
            </div>
           
            <a href="<?php echo base_url();?>Login/student_logout"><button type="button" class="btn btn-success">Logout</button></a>
          <?php } ?>
       
      </div>
  </div>
  </section>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="<?php echo base_url();?>" class="scrollto"><img src="<?php echo base_url();?>frontend_assets/img/skyvoice.png" id="logo_img"></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="<?php echo base_url();?>Home">HOME</a></li>
          <li><a href="<?php echo base_url();?>about_us">ABOUT US</a></li>
          <li><a href="<?php echo base_url();?>our_collaboration">OUR COLLABORATION</a></li>
          <li><a href="<?php echo base_url();?>jobs">JOBS</a></li>
          <li><a href="<?php echo base_url();?>premium">PREMIUM JOBS</a></li>
          <li><a href="<?php echo base_url();?>resume">RESUME BUILDER</a></li>
          <li><a href="<?php echo base_url();?>quiz">QUIZ</a></li>
          <li><a href="<?php echo base_url();?>contact_us">CONTACT US</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
