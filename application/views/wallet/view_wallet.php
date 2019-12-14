<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
     <link href="<?php echo base_url();?>assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/extra-libs/multicheck/multicheck.css">
    <?php $this->load->view('bars/head',array('title'=>'Wallet'));?>
  </head>
  <body>
    <div id="main-wrapper">
      <?php $this->load->view('bars/header');?>
      <?php $this->load->view('bars/side_bar');?>
      <div class="page-wrapper">
        <div class="page-breadcrumb">
          <div class="row">
              <div class="col-12 d-flex no-block align-items-center">
                  <h4 class="page-title"> Wallet Details </h4>
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
                                        <th>Sr No</th>
                                        <th>User Id</th>
                                        <th>Amount</th>
                                        <th>Txn Id</th>
                                        <th>Txn Date</th>
                                        <th>Txn Type</th>
                                        <th>Status</th>
                                        <th>Type of Recharge</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <?php 
                                      if(is_array($wallet)) {
                                         $x = 1; foreach ($wallet as $key){ ?>
                                      <tr>
                                        <td><?php echo $x++;?></td>
                                        <td><?php echo $key->user_id; ?></td>
                                        <td><?php echo $key->amount; ?></td>
                                        <td><?php echo $key->txn_id; ?></td>
                                        <td><?php echo change_date_format_dmy($key->txn_date);?></td>
                                        <td><?php
                                           if($key->txn_type==0)
                                           {
                                            echo "Credit";
                                           }
                                           if($key->txn_type==1)
                                           {
                                            echo "Debit";
                                           }
                                          ?> 
                                        </td>                                        
                                        <td><?php 
                                           if($key->status==0)
                                           {
                                            echo "Pending";
                                           }
                                           if($key->status==1)
                                           {
                                            echo "Success";
                                           }
                                           if($key->status==2)
                                           {
                                            echo "Failed";
                                           }
                                           ?>
                                         </td>
                                        <td><?php echo $key->type_of_recharge; ?></td>
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
