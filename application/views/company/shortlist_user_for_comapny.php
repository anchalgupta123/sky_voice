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
                  <h4 class="page-title">  Shortlisted Resume </h4>
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
                            <th>Sr No.</th>
                            <th>User Name</th>
                            <th>User Mobile No.</th>
                            <th>User Email id </th>
                            <th>Job Profile</th>
                            <th>Qulifi.</th>
                            <th>Applying Date</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $x=1; foreach ($company_shortlist_resume as $key){ ?>
                          <tr>
                            <td><?php echo $x++; ?></td>
                            <td><?php echo $key->name; ?></td>
                            <td><?php echo $key->mobile; ?></td>
                            <td><?php echo $key->email_id; ?></td>
                            <td><?php echo $key->job_profile; ?></td>
                            <td><?php echo $key->qualification; ?></td>
                            <td><?php echo date('d-m-y',strtotime($key->created_date_time)); ?></td>
                            <td><button style="font-weight: bold;font-size: 13px;" onclick="show_user_detail_modal_by_company(<?php echo $key->user_id; ?>); " class="btn btn-xs btn-info">view Complete<br> User Information</button>
                              <button style="font-weight: bold;font-size: 13px;color:black;margin-top: 2px;" onclick="show_user_placement_modal_by_company(<?php echo $key->id; ?>); " class="btn btn-xs btn-warning">user placement</button>
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
      function show_user_detail_modal_by_company(id) {
        $.ajax({
          url: base_url+"Company_dashboard/modal_user_details", 
          type : "POST",
          data: {id : id},
          success: function(result)
          {
            console.log(result);
              $('#modal_report').html(result);
              $('#modal_report').modal('show');
          }
        });
      }
      function show_user_placement_modal_by_company(id)
      {
        $.ajax({
          url: base_url+"Company_dashboard/view_placement_resume_user", 
          type : "POST",
          data: {id : id},
          success: function(result)
          {
            console.log(result);
              $('#modal_report').html(result);
              $('#modal_report').modal('show');
          }
        });
      }
    </script>
  </body>
</html>
