<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
     <link href="<?php echo base_url();?>assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/extra-libs/multicheck/multicheck.css">
    <?php $this->load->view('bars/head',array('title'=>'Verified Users'));?>
  </head>
  <body>
    <div id="main-wrapper">
      <?php $this->load->view('bars/header');?>
      <?php $this->load->view('bars/side_bar');?>
      <div class="page-wrapper">
        <div class="page-breadcrumb">
          <div class="row">
              <div class="col-12 d-flex no-block align-items-center">
                  <h4 class="page-title"><?php echo $view_type; ?><small> Users</small></h4>
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
                                              <th>Name</th>
                                              <th>Gender</th>
                                              <th>Age</th>
                                              <th>Mobile</th>
                                              <th>User Refer Code</th>
                                              <th>Marital status</th>
                                              <th>City</th>
                                              <th>State</th>
                                              <th>Email Id</th>
                                              <th>Payment</th>
                                              <th>Postcode</th>
                                              <th>Qualification</th>
                                              <th>Subject stream</th>
                                              <th>Specializations</th>
                                              <th>Referer</th>
                                              <th>Referer by</th>
                                              <th>ID Card Type</th>
                                              <th>ID Card Number</th>
                                              <th>Action</th>
                                            </tr>
                                        </thead>
                                         <tbody>
                                              <?php if ($view_type == 'Verified' && is_array($users)){ ?>
                                             <?php foreach ($users as $key){ ?>
                                            <tr>
                                              <td><a href="javascript:void(0);" onclick="show_user_detail_modal(<?php echo $key->id; ?>);"><?php echo $key->name; ?></a></td>
                                              <td><?php echo $key->gender; ?></td>
                                              <td><?php echo calculateAge($key->dob); ?></td>
                                              <td><?php echo $key->mobile; ?></td>
                                              <td><?php echo $key->refer_code; ?></td>
                                              <td><?php echo $key->marital_status; ?></td>
                                              <td><?php echo $key->city; ?></td>
                                              <td><?php echo $key->state; ?></td>
                                              <td><?php echo $key->email_id; ?></td>
                                              <td><?php echo ($key->payment_status == NULL || $key->payment_status == '' ? 'N/A' : $key->payment_status == '0' ? 'Not Done' : 'Done'); ?></td>
                                              <td><?php echo $key->p_address; ?></td>
                                              <td><?php echo $key->qualification; ?></td>
                                              <td><?php echo $key->subject_stream; ?></td>
                                              <td><?php echo $key->specializations; ?></td>
                                              <td><?php echo ($key->refer_by == '' ? 'No' : 'Yes'); ?></td>
                                              <td><?php echo $key->refer_by;?></td>
                                              <td><?php echo $key->identity; ?></td>
                                              <td><?php echo $key->id_number; ?></td>
                                                <td>
                                                    <a class="btn btn-info btn-xs" href="<?php echo base_url('users/feedback/'.md5($key->user_id))?>"><i class="fa fa-book"></i></a>
                                                    <?php if ($key->status == 0) { ?>
                                                <a href="javascript:void(0);" class="btn btn-danger btn-xs" onclick="show_modal_update_status('<?php echo $key->user_id;?>','<?php echo $key->name; ?>')"><i class="fa fa-times" aria-hidden="true"></i></a>
                                              <?php } else if ($key->status == 1) { ?>
                                                <a href="javascript:void(0);" class="btn btn-warning btn-xs"><i class="fa fa-check" aria-hidden="true"></i></a>
                                              <?php } ?>
                                            </tr>  
                                            <?php }  } ?>  
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
        /****************************************
         *       Basic Table                   *
         ****************************************/
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
