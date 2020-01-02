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
              <h5 class="card-title">
                      <a href="javascript:void(0);" style="float: right;" class="btn btn-primary" onclick="post_job_modal();"><i class="fa fa-plus"></i> Post a Job</a>
                    </h5>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th>Sr No.</th>
                            <th>Job Profile</th>
                            <th>Job Description</th>
                            <th>Experience</th>
                            <th>Salary</th>
                            <th>Langu.</th>
                            <th>Qulifi.</th>
                            <th>Job location</th>
                            <th>Job Category</th>
                            <th>Job Posted date time</th>
                             <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $x=1; foreach ($company_job_post as $key){ ?>
                          <tr>
                            <td><?php echo $x++; ?></td>
                            <td><?php echo $key->job_profile; ?></td>
                            <td><?php echo $key->job_profile; ?></td>
                            <td><?php echo $key->experience; ?></td>
                            <td><?php echo $key->salary; ?></td>
                            <td><?php echo $key->language; ?></td>
                            <td><?php echo $key->qualification; ?></td>
                            <td><?php echo $key->job_location; ?></td>
                            <td><?php echo $key->job_catgory; ?></td> 
                            <td><?php echo $key->created_date_time; ?></td>
                            <td><button style="font-weight: bold;font-size: 13px;" class="btn btn-xs btn-info"><?php if($key->status==0){echo "Deactive";}if($key->status==1){echo "Active";} ?></button>
                              <button  style="color: black;font-weight: bold;font-size: 13px;" class="btn btn-xs btn-warning" onclick="resume_sending_modal('<?php echo $key->company_id; ?>');">Edit</button></td>
                          </tr>
                          <?php } ?>
                        </tbody>
                    </table>
                  </div>
                </div>
             </div>
          </div>
       <?php $this->load->view('bars/footer');?>
       <?php $this->load->view('bars/js');?>
    </div>
    <div class="modal" id="modal_report"  tabindex="-1" role="dialog" aria-hidden="true">
      
    </div>
    <script src="<?php echo base_url();?>assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="<?php echo base_url();?>/assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="<?php echo base_url();?>assets/extra-libs/DataTables/datatables.min.js"></script>
     <script>
        $('#zero_config').DataTable();
    </script>
    <script type="text/javascript">
      function post_job_modal(id)
      {
        $.ajax({
          url: base_url+"Company_dashboard/add_post_a_job_modal", 
          type : "POST",
          data :{id : id},
          success: function(result)
          {
              $('#modal_report').html(result);
              $('#modal_report').modal('show');
          }
        });
      }
      function resume_sending_modal(id)
      {
        $.ajax({
          url: base_url+"Company/resume_sending_modal", 
          type : "POST",
          data :{id : id},
          success: function(result)
          {
              $('#modal_report').html(result);
              $('#modal_report').modal('show');
          }
        });
      }
    </script>
  </body>
</html>
