<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
     <link href="<?php echo base_url();?>assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/extra-libs/multicheck/multicheck.css">
   <?php $this->load->view('bars/head',array('title'=>'Company'));?>
  </head>
  <body>
    <div id="main-wrapper">
      <?php $this->load->view('bars/header');?>
    <?php $this->load->view('bars/side_bar');?> 
      <div class="page-wrapper">
        <div class="page-breadcrumb">
          <div class="row">
              <div class="col-12 d-flex no-block align-items-center">
                  <h4 class="page-title"> Company </h4>
              </div>
          </div>
        </div>
         <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table  class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th>Job Profile</th>
                            <th>Job Discri.</th>
                            <th>Expe.</th>
                            <th>Salary</th>
                            <th>Language</th>
                            <th>Qualifi.</th>
                            <th>Job Location</th>
                            <th>Job Category</th>
                            <th>Posted On</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><?php echo $company_job_post->job_profile; ?></td>
                            <td><?php echo $company_job_post->job_profile; ?></td>
                            <td><?php echo $company_job_post->experience; ?></td>
                            <td><?php echo $company_job_post->salary; ?></td>
                            <td><?php echo $company_job_post->language; ?></td>
                            <td><?php echo $company_job_post->qualification; ?></td>
                            <td><?php echo $company_job_post->job_location; ?></td>
                            <td><?php echo $company_job_post->job_catgory; ?></td>
                             <td><?php echo $company_job_post->created_date_time; ?></td>
                          </tr>
                        </tbody>
                    </table>
                  </div>
                 <input type="hidden" name="" id="job_post_id" value="<?php echo $company_job_post->id; ?>">
                 <input type="hidden" name="" id="company_id" value="<?php echo $company_job_post->company_id; ?>">

<label><input type="checkbox" name="" id="select_all">Select All</label> <button class="btn btn-warning" onclick="multiple_resume_send();">Send Resume</button><br><br>
                 <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                          <tr>
                              <th>Sr No.</th>
                              <th>#</th>
                              <th>Name</th>
                              <th>Gender</th>
                              <th>Age</th>
                              <th>Mobile</th>
                              <th>Marital status</th>
                              <th>Email Id</th>
                              <th>Payment</th>
                              <th>Postcode</th>
                              <th>Qualification</th>
                              <th>Subject stream</th>
                              <th>Specializations</th>
                              
                            </tr>
                        </thead>
                        <tbody>
                         
                                <?php $x=1; foreach ($all_primium_user as $key){ ?>
                              <tr>
                                <td><?php echo $x++; ?></td>
                                <td><input type="checkbox" name="" class="user_ids" value="<?php echo $key->id; ?>"></td>
                                <td><?php echo $key->name; ?></td>
                                <td><?php echo $key->gender; ?></td>
                                <td><?php echo calculateAge($key->dob);?></td>
                                <td><?php echo $key->mobile; ?></td>
                                <td><?php echo $key->marital_status; ?></td>
                                <td><?php echo $key->email_id; ?></td>
                               <td><?php echo $key->p_address; ?></td>
                                <td><?php echo ($key->refer_by == '' ? 'No' : 'Yes'); ?></td>
                                <td><?php echo $key->qualification; ?></td>
                                <td><?php echo $key->subject_stream; ?></td>
                                <td><?php echo $key->specializations; ?></td>
                              </tr>  
                              
                              <?php }  ?>
                              
                        </tbody>
                    </table>
                  </div>
                </div>
             </div>
          </div>

       
    </div>

    <?php $this->load->view('bars/footer');?>
       <?php $this->load->view('bars/js');?>
    





    
    <script src="<?php echo base_url();?>assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="<?php echo base_url();?>/assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="<?php echo base_url();?>assets/extra-libs/DataTables/datatables.min.js"></script>
     <script>
        $('#zero_config').DataTable();
    </script>
    <script type="text/javascript">
      $("#select_all").change(function(){
    if ($(this).prop("checked") == true)
    {
      $('.user_ids').prop('checked', true);
    }
    else
    {
      $('.user_ids').prop('checked', false);

    }
  });

  function multiple_resume_send() 
  {
    user_ids = '';
    $( ".user_ids" ).each(function( index ) {
        if ($(this).prop("checked") == true) 
        {
            user_ids = user_ids+ ','+ $(this).val();
        }
    });

    user_ids = user_ids.replace(/^,/, '');
     $('#preloader').show();
    job_post_id=$('#job_post_id').val();
    company_id=$('#company_id').val();

    var formData = new FormData();

    formData.append('job_post_id',job_post_id);
    formData.append('company_id',company_id);
    formData.append('user_ids',user_ids);

    if (user_ids == '') 
    {
      alert('Please select any user for send resume!');
      return false;
    }
    else{
      
      $.ajax({
        url: base_url+"Company/send_multiple_resume_of_perticuler_user", 
        type : "POST",
        data: formData,
        processData:false,
        contentType:false,  
        success: function(result)
        {
            $('#preloader').hide();   

            if (result) 
            {
                // alert('One to many message send!');
                // location.reload();
                window.location.href=base_url+"Company";
            }
            
        }
    });

    
  }
}
    </script>
  </body>
</html>
