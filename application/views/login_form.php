<!DOCTYPE html>
<html lang="en">
    
<head>
    
<?php $this->load->view('bars/head',array('title'=>'Login'));?>
    </head>
    <body>
        <div id="loginbox">            
            <form id="form1">
				 <div class="control-group normal_text"> <h3>Login</h3></div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="text" placeholder="Username" required="" id="email" />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" placeholder="Password" id="password" />
                        </div>
                    </div>
                </div>
                <div >
                   <!-- <span style="padding-left: 40%;" align="center"><a type="submit" href="javascript:void(0);" id="btn_submit" class="btn btn-success" /> Login</a></span> -->
                  <button class="btn btn-info submit" type="submit" href="javascript:void(0);" id="btn_submit">Log in</button>
                </div>
            </form>
            <div class="control-group normal_text"> <h3>Admin Skyvoice</h3></div>
            <form id="form2">
              <div id="otp_details">
                
              </div>
            </form>

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
