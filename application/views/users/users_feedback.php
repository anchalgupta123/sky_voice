<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
     <link href="<?php echo base_url();?>assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/extra-libs/multicheck/multicheck.css">
    <?php $this->load->view('bars/head',array('title'=>'Feedback'));?>
  </head>
  <body>
    <div id="main-wrapper">
      <?php $this->load->view('bars/header');?>
      <?php $this->load->view('bars/side_bar');?>
      <div class="page-wrapper">
        <div class="page-breadcrumb">
          <div class="row">
              <div class="col-12 d-flex no-block align-items-center">
                  <h4 class="page-title"> User Feedback </h4>
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
                                        <th>Email</th>
                                        <th>Message</th>
                                        <th>Date</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <?php 
                                    // print_r($feedback);
                                      if(is_array($feedback)) {
                                          foreach ($feedback as $key){ ?>
                                      <tr>
                                        <td><?php echo $key->name; ?></td>
                                        <td><?php echo $key->email; ?></td>
                                        <td><?php echo $key->message; ?></td>
                                        <td><?php echo change_date_format_dmy($key->date_created); ?></td>
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
        $('#zero_config').DataTable();
    </script>
  </body>
</html>
