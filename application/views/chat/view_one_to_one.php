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
                  <h4 class="page-title">ONE To ONE <small>Chat</small></h4>
              </div>
          </div>
        </div>
         <div class="container-fluid">
          <div class="col-md-12">
            <div class="card">
              <h5 class="card-title"></h5>
                <div class="card-body">  
                <div class="row">               
                  <div class="col-md-6">
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                              <th>Name</th>
                              <th>Mobile</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php foreach ($users as $key){ ?>
                            <tr>
                              <?php if ($key->message_count == 0){ ?>
                                <td><a href="javascript:void(0);" onclick="show_user_chat('<?php echo $key->user_id; ?>');"><?php echo $key->name; ?></a></td>
                              <?php } else { ?>
                                <td><a href="javascript:void(0);" id="u_<?php echo $key->user_id;?>" style="text-decoration: underline; font-weight: bolder;" onclick="show_user_chat('<?php echo $key->user_id; ?>');"><?php echo $key->name; ?> &nbsp;<span class="badge badge-success"><?php echo $key->message_count; ?></span></a></td>
                              <?php } ?>
                              
                              <td><?php echo $key->mobile; ?></td>
                            </tr> 
                            <?php } ?>
                          </tbody>
                        </table>
                        </div>
                        </div>
                        <div class="col-md-6">
                          <div id="message_box">
                            
                          </div>
                        </div>
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
    $(document).ready(function() {
        $('#datatable2').DataTable({
          "ordering": false,
        });
    } );
    setInterval(function(){ 
      user_id_chat = $('#user_id_chat').val();
      if (user_id_chat != '') 
      {
        check_user_message(user_id_chat);
      }
    }, 3000); 
  </script>
  </body>
</html>
