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
                        <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th>Sr no.</th>
                            <th>Job Profile</th>
                            <th>Job Discri.</th>
                            <th>Expe.</th>
                            <th>Salary</th>
                            <th>Language</th>
                            <th>Qualifi.</th>
                            <th>Job Location</th>
                            <th>Job Category</th>
                            <th>Posted On</th>
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
                            <td>
                              <button class="btn btn-xs btn-info" type="button" style="font-weight: bold;font-size: 13px;"
                              onclick="change_actie_status('<?php echo $key->id; ?>','<?php echo $key->status; ?>');" data-toggle="tooltip" data-placement="top" title="Click to <?php if($key->status==0){echo "Active";}if($key->status==1){echo "Deactive";} ?> ">
                              <?php if($key->status==0){echo "Deactive";}if($key->status==1){echo "Active";} ?>
                              </button>
                             <!--  <button class="btn btn-xs btn-warning" style="color: black;font-weight: bold;font-size: 13px;" onclick="edit_company_modal('<?php echo $key->id; ?>');">Send Resume</button> -->
                             <a href="<?php echo base_url();?>Company/send_multiple_resume?job_post_id=<?php echo $key->id; ?>" class="btn btn-xs btn-warning" style="color: black;font-weight: bold;font-size: 13px;">Send Resume</a>
                            </td>
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
      function  add_company_modal() {
        $.ajax({
          url: base_url+"Company/add_company_modal", 
          type : "POST",
          success: function(result)
          {
              $('#modal_report').html(result);
              $('#modal_report').modal('show');
          }
        });
      }
      function change_actie_status(id,status)
      {
        $.ajax({
          url: base_url+"Company_dashboard/change_actie_status", 
          type : "POST",
          data: {id:id,status:status},
          success: function(result)
          {
             location.reload();
          }
        });
      }
      
    </script>
  </body>
</html>
