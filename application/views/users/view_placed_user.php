<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
     <link href="<?php echo base_url();?>assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/extra-libs/multicheck/multicheck.css">
    <?php $this->load->view('bars/head',array('title'=>'Placed Users'));?>
  </head>
  <body>
    <div id="main-wrapper">
      <?php $this->load->view('bars/header');?>
      <?php $this->load->view('bars/side_bar');?>
      <div class="page-wrapper">
        <div class="page-breadcrumb">
          <div class="row">
              <div class="col-12 d-flex no-block align-items-center">
                  <h4 class="page-title">Users Placed</h4>
              </div>
          </div>
        </div>
         <div class="container-fluid">
            <div class="card">
              <div class="card-body">
                  <h5 class="card-title"></h5>
                  <div class="table-responsive">
                      <table id="zero_config" class="table table-striped table-bordered">
                          <thead>
                        <tr>
                          <th>User Name</th>
                          <th>Mobile</th>
                          <th>Email Id</th>
                          <th>Company Name</th>
                          <th>HR Name</th>
                          <th>CTC(M/Y)</th>
                          <th>Company Location</th>
                          <th>Date of Joining</th>
                          <th>Designation</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($users as $key){ ?>
                        <tr>
                          <td><?php echo $key->user_name; ?></td>
                          <td><?php echo $key->mobile; ?></td>
                          <td><?php echo $key->email_id; ?></td>
                          <td><?php echo $key->company_name; ?></td>
                          <td><?php echo $key->hr_name; ?></td>
                          <td><?php echo $key->ctc; ?></td>
                          <td><?php echo $key->company_location; ?></td>
                          <td><?php echo change_date_format_dmy($key->date_of_joining); ?></td>
                          <td><?php echo $key->designation; ?></td>
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
      function show_user_detail_modal(id) {
        $.ajax({
          url: base_url+"Users/modal_user_details", 
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

      function update_placement_user_modal(id,name)
      {
        $.ajax({
          url: base_url+"Users/modal_update_placement_user", 
          type : "POST",
          data: {id : id,name :name},
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
