<!DOCTYPE html>
<html dir="ltr">

<head>
   
    
   
   <?php $this->load->view('bars/head',array('title'=>'Login'));?>
  
</head>

<body>
    <div class="main-wrapper">
        
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark">
            <div class="auth-box bg-dark border-top border-secondary">
                <div>
                    <div class="text-center p-t-20 p-b-20">
                        <span class="db"><img src="<?php echo base_url();?>assets/images/logo.png" alt="logo" /></span>
                    </div>
                    <!-- Form -->
                    <form id="form1">
                        <div class="row p-b-30">
                            <div class="col-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="ti-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1"  id="email" required="">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-warning text-white" id="basic-addon2"><i class="ti-pencil"></i></span>
                                    </div>
                                    <input type="password" class="form-control form-control-lg" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" id="password"  required="">
                                </div>
                            </div>
                        </div>
                        <div class="row border-top border-secondary">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="p-t-20">
                                        <!-- <button  class="btn btn-success float-center" type="submit">Login</button> -->
                                        <button class="btn btn-default submit" type="submit" href="javascript:void(0);" id="btn_submit">Log in</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="text-center p-t-20 p-b-20">
                        <h2 style="color:white;">Admin Skyvoice</h2>
                    </div>
                    <form id="form2">
                      <div id="otp_details">
                        
                      </div>
                    </form>
                </div>
                
            </div>
        </div>
      
    </div>
   
  <?php $this->load->view('bars/js');?>
    <script type="text/javascript">
            $( "#form1" ).submit(function( event ) {
              login();
              event.preventDefault();
            });
            $( "#form2" ).submit(function( event ) {
      re_login();
      event.preventDefault();
    });
        </script>
    

</body>

</html>