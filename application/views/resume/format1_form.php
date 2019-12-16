<!DOCTYPE html>
<html>
<head>
  <title>Form</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/libs/bootstrap/dist/css/bootstrap.min.css">
  <base href="<?php echo base_url();?>">
<style type="text/css">
  .main{
    border:1px solid gray;
    box-shadow: 3px 6px 3px 6px #888888;
    margin-top: 20px;
    margin-bottom: 40px;
  }
  .main2{
     border:1px solid gray;
    box-shadow: 3px 6px 3px 6px #888888;
    margin-top: 20px;
    margin-left: 40px;
    margin-bottom: 40px;

  }
  .card h4{
    color: blue;
  }
  .card{
    margin-bottom: 10px;
  }
  .card button{
    margin-top: 10px;
    margin-bottom: 10px;
    margin-right: 40px;
  }
  .card input{
    height: 50px;
  }
  .my-custom-scrollbar {
  position: relative;
  height: 600px;
  overflow: auto;
  }
  .table-wrapper-scroll-y {
  display: block;
  }
</style>
</head>
<body>
  <?php $this->load->view('public/header');?>
<div class="container">
<div class="row">
<div class="col-md-6 table-wrapper-scroll-y my-custom-scrollbar main">
  <h2 style="margin-bottom: 20px;"><center>Build Resume</center></h2>
  <div id="accordion">
    <div class="card">
      <a class="card-link" data-toggle="collapse" href="#collapsOne">
      <div class="card-header">
          <h4>Contact Details</h4>
      </div>
       </a>
      <div id="collapsOne" class="collapse" data-parent="#accordion">
        <div class="card-body"> 
         <div class="row col-md-12" style="margin-top:20px;">
             <input type="text" id="first_name" name="" placeholder="First Name" style="margin-left: 20px;" class="col-md-5" required>
             <input type="text" id="last_name" name="" placeholder="Last Name" style="margin-left: 30px;" class="col-md-5" required>
          </div>
          <div class="row col-md-12" style="margin-top:20px;">
             <input type="text" id="phone" placeholder="Phone" style="margin-left: 20px;" class="col-md-5" required>
             <input type="text" id="email" placeholder="Email" style="margin-left: 30px;" class="col-md-5" required>
          </div>
          <div class="row col-md-12" style="margin-top:20px;">
             <input type="text" id="address" placeholder="Address" style="margin-left: 20px;" class="col-md-11" required>
          </div>
          <div class="row col-md-12" style="margin-top:20px;">
             <input type="text" id="city" placeholder="city" style="margin-left: 20px;" class="col-md-5" required>
             <input type="text" id="state" placeholder="State" style="margin-left: 30px;" class="col-md-5" required>
          </div>
          <div class="row col-md-12" style="margin-top:20px;">
             <input type="text" id="pincode" placeholder="Zip Code" style="margin-left: 20px;" class="col-md-5" required>
             <input type="text" id="country" placeholder="Country" style="margin-left: 30px;" class="col-md-5" required>
          </div>
          <button type="button" class="btn btn-primary float-right" onclick="add_contact_format1();">Save</button>
        </div>
      </div>
    </div>  
    <div class="card">
      <a class="card-link" data-toggle="collapse" href="#collapseTwo">
      <div class="card-header">
          <h4>Objective</h4>
      </div>
       </a>
      <div id="collapseTwo" class="collapse" data-parent="#accordion">
        <div class="card-body">	
          <textarea type="text" name="" id="objective" placeholder="Enter Your Objective" class="col-md-12"></textarea>
          <button type="button" class="btn btn-primary float-right" onclick="add_objective_format1();">Save</button>
        </div>
      </div>
    </div>  
    <div class="card">
      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
      <div class="card-header">
         <h4>Education</h4>
      </div>
      </a>
      <div id="collapseThree" class="collapse" data-parent="#accordion">
        <div class="card-body">
          <div class="row col-md-12" style="margin-top:20px;">
             <input type="text" name="" id="degree_name" placeholder="Diploma,Degree" style="margin-left: 20px;" class="col-md-5">
             <input type="text" name="" id="school_name" placeholder="School Name" style="margin-left: 30px;" class="col-md-5">
          </div>
          <div class="row col-md-12" style="margin-top:20px;">
            <select class=" col-md-5" id="qualification" style="margin-left: 20px;">
              <option>Post Graduate</option>
              <option>Graduate</option>
              <option>12th</option>
              <option>10th</option>
            </select>
             <input type="text" name="" id="location" placeholder="Location" style="margin-left: 30px;" class="col-md-5">
          </div>
          <div class="row col-md-12" style="margin-top:20px;">
             <select class=" col-md-5" id="e_month" style="margin-left: 20px;height:50px;" data-toggle="collapse">
              <option>December</option>
              <option>November</option>
              <option>October</option>
              <option>September</option>
            </select>
            <select class=" col-md-5" id="e_year" style="margin-left: 30px;" data-toggle="collapse">
              <option>2014</option>
              <option>2015</option>
              <option>2016</option>
              <option>2017</option>
              <option>2018</option>
              <option>2019</option>
            </select>
          </div>
             <button type="button" class="btn btn-primary float-right" onclick="add_education_format1();" style="margin-bottom: 20px;">Save</button>
        </div>
      </div>
    </div>
    <div class="card">
      <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
      <div class="card-header">
         <h4>Employment History</h4>
      </div>
    </a>
      <div id="collapseFour" class="collapse" data-parent="#accordion">
        <div class="card-body">
          <div class="row col-md-12" style="margin-top:20px;">
             <input type="text" name="" placeholder="Job Title" style="margin-left: 20px;" class="col-md-5">
             <input type="text" name="" placeholder="Company Name" style="margin-left: 30px;" class="col-md-5">
          </div>
          <div class="row col-md-12" style="margin-top:20px;">
             <input type="text" name="" placeholder="Location" style="margin-left: 20px;" class="col-md-12">
          </div>
          <div class="row col-md-12" style="margin-top:20px;">
             <label class="col-md-2" style="margin-left: 10px;">From:</label>
             <select class=" col-md-4" style="margin-left: 20px;height:50px;" data-toggle="collapse">
              <option>December</option>
              <option>November</option>
              <option>October</option>
              <option>September</option>
            </select>
            <select class=" col-md-4" style="margin-left: 30px;" data-toggle="collapse">
              <option>2014</option>
              <option>2015</option>
              <option>2016</option>
              <option>2017</option>
              <option>2018</option>
              <option>2019</option>
            </select>
          </div> 
          <div class="row col-md-12" style="margin-top:20px;">
             <label class="col-md-2" style="margin-left: 10px;">To:</label>
             <select class=" col-md-4" style="margin-left: 20px;height:50px;" data-toggle="collapse">
              <option>December</option>
              <option>November</option>
              <option>October</option>
              <option>September</option>
            </select>
            <select class=" col-md-4" style="margin-left: 30px;" data-toggle="collapse">
              <option>2014</option>
              <option>2015</option>
              <option>2016</option>
              <option>2017</option>
              <option>2018</option>
              <option>2019</option>
            </select>
          </div>
          <button type="button" class="btn btn-primary float-right" style="margin-bottom: 20px;">Save</button>
        </div>
      </div>
    </div>
    <div class="card">
      <a class="collapsed card-link" data-toggle="collapse" href="#collapseFive">
      <div class="card-header">
         <h4>Hobbies & Interests</h4>
      </div>
    </a>
      <div id="collapseFive" class="collapse" data-parent="#accordion">
        <div class="card-body">
          <input type="text" name="" placeholder="Hobbies" style="margin-left: 20px;" class="col-md-11">
        </div>
        <button type="button" class="btn btn-primary float-right" style="margin-bottom: 20px;">Save</button>
      </div>
    </div>
   <a class="collapsed card-link" data-toggle="collapse" href="#collapseSix">
    <div class="card">
      <div class="card-header">
         <h4>Professional Skills</h4>
      </div>
      <div id="collapseSix" class="collapse" data-parent="#accordion">
        <div class="card-body">
          <input type="text" name="" placeholder="Skills" style="margin-left: 20px;" class="col-md-11">
        </div>
        <button type="button" class="btn btn-primary float-right" style="margin-bottom: 20px;">Save</button>
      </div>
    </div>
   </a>
    <div class="card">
      <a class="collapsed card-link" data-toggle="collapse" href="#collapseSeven">
      <div class="card-header">
         <h4>Language</h4>
      </div>
    </a>
      <div id="collapseSeven" class="collapse" data-parent="#accordion">
        <div class="card-body">
          <input type="text" name="" placeholder="Language" style="margin-left: 20px;" class="col-md-11">
        </div>
        <button type="button" class="btn btn-primary float-right" style="margin-bottom: 20px;">Save</button>
      </div>
    </div>

    <div class="card">
      <a class="collapsed card-link" data-toggle="collapse" href="#collapseEight">
      <div class="card-header">
         <h4>Reference</h4>
      </div>
     </a>
      <div id="collapseEight" class="collapse" data-parent="#accordion">
        <div class="card-body">
          <div class="row col-md-12" style="margin-top:20px;">
             <input type="text" name="" placeholder="Name" style="margin-left: 20px;" class="col-md-5">
             <input type="text" name="" placeholder="relationship" style="margin-left: 30px;" class="col-md-5">
          </div>
          <div class="row col-md-12" style="margin-top:20px;">
             <input type="text" name="" placeholder="Company" style="margin-left: 20px;" class="col-md-5">
             <input type="text" name="" placeholder="Email" style="margin-left: 30px;" class="col-md-5">
          </div>
          <div class="row col-md-12" style="margin-top:20px;">
             <input type="text" name="" placeholder="phone" style="margin-left: 20px;" class="col-md-5">
             <input type="text" name="" placeholder="Address" style="margin-left: 30px;" class="col-md-5">
          </div>
          <button type="button" class="btn btn-primary float-right" style="margin-bottom: 20px;">Save</button>
        </div>
      </div>
    </div>
  </div>
</div>
     <div class="col-md-5 table-wrapper-scroll-y my-custom-scrollbar main2">
        
      </div>
    </div>
</div>   
<?php $this->load->view('public/footer');?>
<script type="text/javascript" src="<?php echo base_url();?>assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript">
  function add_contact_format1()
{ 
    first_name = $('#first_name').val();
    last_name = $('#last_name').val();
    phone = $('#phone').val();
    email = $('#email').val();
    address = $('#address').val();
    city = $('#city').val();
    state  = $('#state').val();
    pincode  = $('#pincode').val();
    country  = $('#country').val();
    

    var formData = new FormData();
    formData.append('first_name',first_name);
    formData.append('last_name',last_name);
    formData.append('phone',phone);
    formData.append('email',email);
    formData.append('address',address);
    formData.append('city',city);
    formData.append('state',state);
    formData.append('pincode',pincode);
    formData.append('country',country);
    //alert('this is alertt');
    $.ajax({
        // url: "https://localhost/sky_voice/Category/add_contact_form",
        url: base_url+"Home/add_contact_form",  
        type : "POST",
        data: formData,
        processData:false,
        contentType:false,  
        success: function(result)
        { 
            if (result == 'Valid') 
            {
                alert('Contact Added successfully!');
                location.reload();
            }
        }
    });
}

function add_objective_format1()
{ 
    objective = $('#objective').val();

    var formData = new FormData();
    formData.append('objective',objective);
    //alert('this is alertt');
    $.ajax({
        // url: "https://localhost/sky_voice/Category/add_contact_form",
        url: base_url+"Home/add_objective_form",  
        type : "POST",
        data: formData,
        processData:false,
        contentType:false,  
        success: function(result)
        { 
            if (result == 'Valid') 
            {
                alert('Objective Added successfully!');
                location.reload();
            }
        }
    });
}
function add_education_format1()
{ 
    degree_name = $('#degree_name').val();
    school_name = $('#school_name').val();
    qualification = $('#qualification').val();
    location = $('#location').val();
    e_month = $('#degree_name').val();
    e_year = $('#degree_name').val();

    var formData = new FormData();
    formData.append('degree_name',degree_name);
    formData.append('school_name',school_name);
    formData.append('qualification',qualification);
    formData.append('location',location);
    formData.append('e_month',e_month);
    formData.append('e_year',e_year);

    //alert('this is alertt');
    $.ajax({
        // url: "https://localhost/sky_voice/Category/add_contact_form",
        url: base_url+"Home/add_eductaion_form",  
        type : "POST",
        data: formData,
        processData:false,
        contentType:false,  
        success: function(result)
        { 
            if (result == 'Valid') 
            {
                alert('education Added successfully!');
                location.reload();
            }
        }
    });
}
</script>
</body>
</html>
