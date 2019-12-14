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
                  <h4 class="page-title">One To Many <small>Messge Details</small></h4>
              </div>
          </div>
        </div>
         <div class="container-fluid">
            <div class="card">
              <h5 class="card-title"></h5>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                          <th>Sr.No.</th>
                          <th>Date/Time</th>
                          <th>Messge</th>
                          <th>Gender</th>
                          <th>Marital</th>
                          <th>Referral</th>
                          <th>State</th>
                          <th>City</th>
                          <th>Pincode</th>
                          <th>Qualification</th>
                          <th>Subject</th>
                          <th>Specializations</th>
                          <th>Jobs</th>
                          <th>Payment</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $x = 1; foreach ($messages as $key){ ?>
                        <tr>
                          <td><?php echo $x++; ?></td>
                          <td><a href="<?php echo base_url();?>Chat/user_message/<?php echo $key->id;?>"><?php echo change_date_format_dmy($key->created_date_time);?>/ <?php echo date("g:i A", strtotime($key->created_date_time));?></a></td>
                          <td><?php echo $key->message_for_all; ?></td>
                          <td><?php echo $key->gender; ?></td>
                          <td><?php echo $key->marital; ?></td>
                          <td><?php echo $key->referral; ?></td>
                          <td><?php echo $key->state; ?></td>
                          <td><?php echo $key->city; ?></td>
                          <td><?php echo $key->pincode; ?></td>
                          <td><?php echo $key->last_qualification; ?></td>
                          <td><?php echo $key->subject; ?></td>
                          <td><?php echo $key->specializations; ?></td>
                          <td><?php echo $key->jobs; ?></td>
                          <td><?php echo $key->payment; ?></td>
                          
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
      function edit_company_modal(id)
      {
        $.ajax({
          url: base_url+"Company/edit_company_modal", 
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
