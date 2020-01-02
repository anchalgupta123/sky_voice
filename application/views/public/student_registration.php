<?php $this->load->view('public/header');?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>frontend_assets/css/util.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>frontend_assets/css/main.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
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
                <h2>Student Registration</h2>
              </div>
            </div>
            <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <form  class="login100-form validate-form p-l-55 p-r-55 p-t-120">
          <span class="login100-form-title">
            Registration
          </span>

          <div class=" wrap-input100 validate-input m-b-16 row" >
            <input class="input100" id="user_name" type="text" value=""   placeholder="Full Name">
            <input class="input100 m-l-35" id="father_name" type="text" value=""   placeholder="Father Name">
            <span id="show_error" class="emsg1 hidden"></span>
          </div>
          
          <div class="wrap-input100 validate-input m-b-16 row" data-validate = "Please enter password">
           <input class="input100" id="mobile_no" value="" maxlength="10" onkeypress='validate(event)' type="text"  placeholder="Mobile No."> 
           <select class="input100 m-l-35" id="gender"  style="border: none;outline: 0px;white-space: nowrap;text-overflow: ellipsis;overflow: hidden;appearance: none; " >
              <option >-select gender -</option>
             <option value="Male" >Male</option>
             <option value="Female" >Female</option>
             <option value="Other" >Other</option>

           </select>
            <span id="show_error" class="emsg2 hidden"></span>
          </div>
           <div class=" wrap-input100 validate-input m-b-16 row" >
            <input class="input100" id="dupdateob" type="date"  value=""  placeholder="date of birth">
           <!-- <input type="text" id="date_of_joining" name="" class="form-control mydatepicker" autocomplete="off"> -->
            <select class="input100 m-l-35" id="marital_status" style="border: none;outline: 0px;white-space: nowrap;text-overflow: ellipsis;overflow: hidden;appearance: none; " >
              <option >-Select Marital Status -</option>
             <option value="Married" >Married</option>
             <option value="Single" >Single</option>
             <option value="Divorce" >Divorce</option>

           </select>
            
          </div>
           <div class=" wrap-input100 validate-input m-b-16 row" >
            <input class="input100" id="address" type="text" value=""   placeholder="Address">
            <input class="input100 m-l-35" id="zipcode" type="text" value=""   placeholder="Zipcode">
            
          </div>
          <div class=" wrap-input100 validate-input m-b-16 row" >
            <input class="input100" id="city" type="text" value=""   placeholder="City">
            <input class="input100 m-l-35" id="state" type="text" value=""   placeholder="State">
           
          </div>
          <div class=" wrap-input100 validate-input m-b-16 row" >
            <input class="input100" id="p_address" type="text" value=""   placeholder="Permanent Address">
          <!--   <input class="input100 m-l-35" id="user_name" type="text" value=""   placeholder=""> -->
            <select class="input100 m-l-35" id="qualification" onchange="change_qualification();"  value="" style="border: none;outline: 0px; " >
              <option >-Select Qualification -</option>
             <option value="10th">10th
                    </option>
                    <option value="12th">12th
                    </option>
                    <option value="Diploma">Diploma
                    </option>
                    <option value="Graduate">Graduate
                    </option>
                    <option value="Post Graduate">Post Graduate
                    </option>
                    <option value="Other">Other
                    </option>

           </select>
            
          </div>

          <div class=" wrap-input100 validate-input m-b-16 row" >
            <select id="subject" class="input100 " onchange="change_last_subject();"  value="select gender" style="border: none;outline: 0px;white-space: nowrap;text-overflow: ellipsis;overflow: hidden;appearance: none; " >
              <option value="" >-Select Subject -</option>

           </select>
            <select id="specializations" class="input100 m-l-35"  value="select gender" style="border: none;outline: 0px;white-space: nowrap;text-overflow: ellipsis;overflow: hidden;appearance: none; " >
              <option value="" >-Select Specialization -</option>

           </select>
            
          </div>

          <div class=" wrap-input100 validate-input m-b-16 row" >
            
            <select class="input100 " id="type_of_job"  value="select gender" style="border: none;outline: 0px;white-space: nowrap;text-overflow: ellipsis;overflow: hidden;appearance: none; " >
              <option >-Select Type of Job -</option>
             <option value="All" >All</option>
             <option value="Government" >Government</option>
             <option value="Private" >Private</option>
             <option value="Entrance Exam" >Entrance Exam</option>
             <option value="Government,Private">Government,Private</option>
             <option value="Government,Entrance Exam">Government,Entrance Exam</option>
             <option value="Private,Entrance Exam">Private,Entrance Exam</option>

           </select>
           <input class="input100 m-l-35" id="current_status" type="text" value=""   placeholder="Current Status">
           
          </div>
           <div class=" wrap-input100 validate-input m-b-16 row" >
            
            <select class="input100 " id="id_proof" value="select gender" style="border: none;outline: 0px;white-space: nowrap;text-overflow: ellipsis;overflow: hidden;appearance: none; " >
              <option >-Select Identity -</option>
              <option value="Aadhaar Card">Aadhaar Card</option>
              <option value="PanCard">Pan Card</option>
              <option value="Voter ID">Voter Id</option>
          </select>
           <input class="input100 m-l-35" id="id_number" type="text" value=""   placeholder="Id Number">
           
          </div>
          <div class="wrap-input100 validate-input m-b-16 row" data-validate = "Please enter password">
            <input class="email input100"  value="" id="e_mail" type="email" placeholder="E-mail">
            
            <input class="input100 m-l-35"  id="password" maxlength="8" minlength="8" value="" type="password" placeholder="Password" value="">
            <span id="show_error" class="emsg3 hidden"></span>
          </div>
          <div class="wrap-input100 validate-input" data-validate = "Please enter password">
            <input class="name input100 m-l-160 m-t-40"  id="confirm_pass" maxlength="8" minlength="8" type="password"  value="" placeholder="Confirm Password" value="">
            <span id="show_error" class="emsg hidden"></span>
          </div>
          
          <div class="container-login100-form-btn p-t-40 m-l-150">
            <button  id="sign_btn" type="button" onclick="student_register();" class="login100-form-btn">
              Sign up 
            </button>
          </div>
          <div id="membership_div" class=" wrap-input100 validate-input m-b-16 m-t-20  row" style="display: none;" >
           
          <label>Select Membership:-</label>
            <select class="input100 m-l-35" id="membership" onchange="change_qualification();"  value="" style="border: none;outline: 0px; " >
              <option >-Select Membership -</option>
            <option value="free" >Free</option>
            <option value="primium">Primimum</option>

           </select>
           <input class="name input100 m-l-160 m-t-40"  id="user_id"  type="hidden"  value="">
            <div class="container-login100-form-btn2 m-l-20 ">
            <button  type="button" onclick="update_student_membership();" class="login100-form-btn">
              Apply Now
            </button>
          </div>
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
 <script src="<?php echo base_url();?>assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
   <!--  <script src="<?php echo base_url();?>assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="<?php echo base_url();?>assets/libs/select2/dist/js/select2.min.js"></script>  -->
 <script type="text/javascript">
   $(document).scrollTop('50');
window.scrollBy(0,400);   
 </script>   
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

function change_qualification()
{
    $('#subject option').remove();
    last_qualification = $('#qualification').val();
    if (last_qualification == '10th') 
    {
       document.getElementById('subject').disabled = true;
    }
    if (last_qualification == '12th') 
    { document.getElementById('subject').disabled = false;
        $('#subject').append('<option value="">-Select-</option><option>Maths</option><option>Biology</option><option>Commerce</option><option>Arts</option><option>Others</option>');
    }
    else if (last_qualification == 'Graduate')
    {
      document.getElementById('subject').disabled = false;
        $('#subject').append('<option value="">-Select-</option><option>BE/BTech</option><option>BSc</option><option>BCom</option><option>BCA</option><option>BBA</option><option>BA</option><option>Others</option>');

    }
    else if (last_qualification == 'Post Graduate')
    {
      document.getElementById('subject').disabled = false;
        $('#subject').append('<option value="">-Select-</option><option>ME/MTech</option><option>MSc</option><option>MCom</option><option>MCA</option><option>MBA</option><option>MA</option><option>Others</option>');
    }
    else if (last_qualification == 'Diploma')
    {
      document.getElementById('subject').disabled = false;
        $('#subject').append('<option value="">-Select-</option><option>ITI</option><option>Polytechnic</option><option>Paramedical</option><option>Others</option>');
    }
    else
    {
        $('#subject').append('<option value="">-Select-</option>');
    }
}
function change_last_subject()
{
    $('#specializations option').remove();
    subject = $('#subject').val();
    if (subject == 'ITI') 
    {
        $('#specializations').append('<option value="">-Select-</option><option>Computer</option><option>Civil</option><option>Mechanical</option><option>Electrician</option><option>Plumber</option><option>Surveyor</option><option>Electrical</option><option>Machine Tools</option><option>Welder</option><option>Fireman</option><option>Cookery</option><option>Paint Technology</option><option>Other</option>');
    }
    else if (subject == 'Polytechnic')
    {
        $('#specializations').append('<option value="">-Select-</option><option>Computer Science</option><option>Infomation Technology</option><option>Civil</option><option>Mechanical</option><option>Electrical</option><option>Electronics and Communication</option><option>EEE</option><option>Chemical</option><option>Bio Technology</option><option>Aeronautical</option><option>Architecture</option><option>Agriculture</option><option>Bio Medical</option><option>Marine Technology</option><option>Mining Technology</option><option>Leather Technology</option><option>Textile Technology</option><option>Petroleun Technology</option><option>Plastic Technology</option><option>Ruber Technology</option><option>Others</option>');

    }
    else if (subject == 'Paramedical')
    {
        data_specification = ['DLMT','DHFM','DOA','DOT','Health Inspector','Sanitary Inspector','Other'];
        $('#specializations').append('<option value="">-Select-</option>');
        for (var i = 0; i < data_specification.length; i++) {
            $('#specializations').append('<option>'+data_specification[i]+'</option>');
        }
    }
    else if (subject == 'BE/BTech')
    {
        data_specification = ['Computer Science','Infomation Technology','Civil','Mechanical','Electrical','Electronics and Communication','EEE','Chemical','Industrial','Ceramic','Bio Technology','Aeronautical','Agriculture','Bio Medical','Marine','Mining','Silk & Textile','Others'];
        $('#specializations').append('<option value="">-Select-</option>');
        for (var i = 0; i < data_specification.length; i++) {
            $('#specializations').append('<option>'+data_specification[i]+'</option>');
        }
    }
    else if (subject == 'BSc')
    {
        data_specification = ['PCM','MEC','CBZ','CPZ','Applied Mathematics','Horticulture','Computer Science','Home Science','Bio Chemistry','Micro Biology','Bio Technology','Others'];
        $('#specializations').append('<option value="">-Select-</option>');
        for (var i = 0; i < data_specification.length; i++) {
            $('#specializations').append('<option>'+data_specification[i]+'</option>');
        }
    }
    else if (subject == 'BCom')
    {
        data_specification = ['Regular','Computer','Bank Management','Tex Process','Others'];
        $('#specializations').append('<option value="">-Select-</option>');
        for (var i = 0; i < data_specification.length; i++) {
            $('#specializations').append('<option>'+data_specification[i]+'</option>');
        }
    }
    else if (subject == 'BCom')
    {
        data_specification = ['Finance','Marketing','HR','International Businesss','Others'];
        $('#specializations').append('<option value="">-Select-</option>');
        for (var i = 0; i < data_specification.length; i++) {
            $('#specializations').append('<option>'+data_specification[i]+'</option>');
        }
    }
    else if (subject == 'BA')
    {
        data_specification = ['HEP','HTP','Linguistics','Economics','Psychology','Fine Arts','Political Science','Sociology','Library Science','Others'];
        $('#specializations').append('<option value="">-Select-</option>');
        for (var i = 0; i < data_specification.length; i++) {
            $('#specializations').append('<option>'+data_specification[i]+'</option>');
        }
    }
    else if (subject == 'ME/MTech')
    {
        data_specification = ['Computer Science','Infomation Technology','Civil','Mechanical','Electrical','Electronics and Communication','EEE','Chemical','Industrial','Ceramic','Bio Technology','Aeronautical','Agriculture','Bio Medical','Marine','Mining','Silk & Textile','Others'];
        $('#specializations').append('<option value="">-Select-</option>');
        for (var i = 0; i < data_specification.length; i++) {
            $('#specializations').append('<option>'+data_specification[i]+'</option>');
        }
    }
    else if (subject == 'MSc')
    {
        data_specification = ['Chemistry','Mathematics','Botany','Zoology','Physics','Home Science','Anthropology','Psychology','Bio Chemistry','Bio Technology','Micro Biology','Virology','Computers','Others'];
        $('#specializations').append('<option value="">-Select-</option>');
        for (var i = 0; i < data_specification.length; i++) {
            $('#specializations').append('<option>'+data_specification[i]+'</option>');
        }
    }
    else if (subject == 'MA')
    {
        data_specification = ['HEP','HTP','Linguistics','Economics','Psychology','Fine Arts','Political Science','Sociology','Library Science','Others'];
        $('#specializations').append('<option value="">-Select-</option>');
        for (var i = 0; i < data_specification.length; i++) {
            $('#specializations').append('<option>'+data_specification[i]+'</option>');
        }
    }
    else if (subject == 'MBA')
    {
        data_specification = ['Finance','Marketing','HR','International Businesss','Others'];
        $('#specializations').append('<option value="">-Select-</option>');
        for (var i = 0; i < data_specification.length; i++) {
            $('#specializations').append('<option>'+data_specification[i]+'</option>');
        }
    }
    else if (subject == 'MCom')
    {
        data_specification = ['Regular','Computer','Bank Management','Tex Process','Others'];
        $('#specializations').append('<option value="">-Select-</option>');
        for (var i = 0; i < data_specification.length; i++) {
            $('#specializations').append('<option>'+data_specification[i]+'</option>');
        }
    }
    else
    {
        $('#specializations').append('<option value="">-Select-</option>');
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
    father_name=$('#father_name').val();
    gender =$('#gender').val();
    dupdateob=$('#dupdateob').val();
    marital_status =$('#marital_status').val();
    address =$('#address').val();
    zipcode=$('#zipcode').val();
    city=$('#city').val();
    state=$('#state').val();
    p_address=$('#p_address').val();
    qualification=$('#qualification').val();
    subject=$('#subject').val();
    specializations=$('#specializations').val();
    type_of_job=$('#type_of_job').val();
    id_proof=$('#id_proof').val();
    id_number=$('#id_number').val();
    current_status=$('#current_status').val();
    
    if (user_name=='') {
      $('.emsg1').removeClass('hidden');
      $('.emsg1').html("Plese enter your name");
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
    formData.append('father_name',father_name);
    formData.append('gender',gender);
    formData.append('dupdateob',dupdateob);
    formData.append('marital_status',marital_status);
    formData.append('address',address);
    formData.append('zipcode',zipcode);
    formData.append('city',city);
    formData.append('state',state);
    formData.append('p_address',p_address);
    formData.append('qualification',qualification);
    formData.append('subject',subject);
    formData.append('specializations',specializations);
    formData.append('type_of_job',type_of_job);
    formData.append('id_proof',id_proof);
    formData.append('id_number',id_number);
    formData.append('current_status',current_status);
    //alert('this is alertt');
    // console.log(dob);
    $.ajax({
        // url: "https://localhost/sky_voice/Category/add_contact_form",
        url: base_url+"Home/student_register_form",  
        type : "POST",
        data: formData,
        processData:false,
        contentType:false,  
        success: function(result)
        { 
        
            if (result.length!=0) 
            {
              $('#user_id').val(''+result+'');

              // alert('register success');
             $('#membership_div').show();
             document.getElementById('sign_btn').disabled=true;
            }
        }
    });

}
}
function update_student_membership()
{
  membership_val=$('#membership').val();
  user_id=$('#user_id').val();
  if (membership_val=='free')
   {
    $.ajax({
        // url: "https://localhost/sky_voice/Category/add_contact_form",
        url: base_url+"Home/update_student_membership",  
        type : "POST",
        data: {user_id:user_id},
        success: function(result)
        { 
        if (result == 'Valid') 
            {
            window.location.href=base_url+"Home/studentLogIn";
            }
        }
    });

   }
   if (membership_val=='primium')
   {
    alert('this is free membership');
   }
}
 jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        var quill = new Quill('#editor', {
            theme: 'snow'
        });
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