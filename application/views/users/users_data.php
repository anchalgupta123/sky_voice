<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
     <link href="<?php echo base_url();?>assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/extra-libs/multicheck/multicheck.css">
    <?php $this->load->view('bars/head',array('title'=>'User Deatils'));?>
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
                                      <th>Dob</th>
                                      <th>Address</th>
                                      <th>Qualification</th>
                                      <th>Subject Stream</th>
                                      <th>Designation</th>
                                      <th>Company</th>
                                      <th>CTC</th>
                                      <th>Current Status</th>
                                      <!--<th>Date</th>-->
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php 
                                    echo "<pre>";
                                    print_r($users);
                                    //if(is_array($users)) {
                                        foreach ($user_detail as $key){ ?>
                                    <tr>
                                      <td><?php echo $key->name; ?></td>
                                      <td><?php echo $key->dob; ?></td>
                                      <td><?php echo $key->address.",".$key->city.",".$key->state.",".$key->p_address; ?></td>
                                      <td><?php echo $key->qualification; ?></td>
                                      <td><?php echo $key->subject_stream; ?></td>
                                      <td><?php echo $this->db->select('*')->where('user_id',$key->user_id)->get('job_experience')->row()->designation; ?></td>
                                      <td><?php echo $this->db->select('*')->where('user_id',$key->user_id)->get('job_experience')->row()->company_name; ?></td>
                                      <td><?php echo $this->db->select('*')->where('user_id',$key->user_id)->get('job_experience')->row()->ctc; ?></td>
                                      <td><?php echo $key->current_status; ?></td>
                                      <!--<td><?php echo date('d/m/Y H:i:s', strtotime($key->created_date_time)); ?></td>-->
                                    </tr>
                                    <?php }  //} ?>

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
