<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
     <link href="<?php echo base_url();?>assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/extra-libs/multicheck/multicheck.css">
    <?php $this->load->view('bars/head',array('title'=>'More Details'));?>
  </head>
  <body>
    <div id="main-wrapper">
      <?php $this->load->view('bars/header');?>
      <?php $this->load->view('bars/side_bar');?>
      <div class="page-wrapper">
        <div class="page-breadcrumb">
          <div class="row">
              <div class="col-12 d-flex no-block align-items-center">
                  <h4 class="page-title"> User All Details </h4>
              </div>
          </div>
        </div>
         <div class="container-fluid">
            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                                 <!-- Tabs -->
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#jobs" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Jobs</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#premium_job" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Premium Jobs</span></a> </li>
                                 <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#Quiz" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Quiz</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#user_feedback" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">User Feedback</span></a> </li>
                                 <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#user_placement" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">User Placement</span></a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content tabcontent-border">
                              
                                <div class="tab-pane active" id="jobs" role="tabpanel">
                                  <div class="p-15">
                                    <div class="table-responsive">
                                        <table id="zero_config2" class="table table-striped table-bordered">
                                        <thead>
                                          <tr>
                                            <th>Sr No.</th>
                                            <th>Name</th>
                                            <th>Profile</th>
                                            <th>Salary</th>
                                            <th>Date</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <?php $x=1; foreach ($free_jobs as $key){ ?>
                                          <tr>
                                            <td><?php echo $x++; ?></td>
                                            <td><?php echo $key->company_name; ?></td>
                                            <td><?php echo $key->job_profile; ?></td>
                                            <td><?php echo $key->salary; ?></td>
                                            <td><?php echo change_date_format_dmy($key->created_date_time); ?></td>
                                          </tr>
                                          <?php } ?>

                                        </tbody>
                                        </table>
                                    </div>
                                </div>
                              </div>
                                <div class="tab-pane  p-2" id="premium_job" role="tabpanel">
                                    <div class="p-2">
                                        <div class="table-responsive">
                                        <table id="zero_config3" class="table table-striped table-bordered">
                                        <thead>
                                          <tr>
                                            <th>Sr No.</th>
                                            <th>Name</th>
                                            <th>Profile</th>
                                            <th>Salary</th>
                                            <th>Date</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <?php $x=1; foreach ($premium_jobs as $key){ ?>
                                          <tr>
                                            <td><?php echo $x++; ?></td>
                                            <td><?php echo $key->company_name; ?></td>
                                            <td><?php echo $key->job_profile; ?></td>
                                            <td><?php echo $key->salary; ?></td>
                                            <td><?php echo change_date_format_dmy($key->created_date_time); ?></td>
                                          </tr>
                                          <?php } ?>

                                        </tbody>
                                        </table>
                                    </div>
                                    </div>
                                </div>
                                <div class="tab-pane  p-20" id="Quiz" role="tabpanel">
                                    <div class="p-20">
                                        <img src="../../assets/images/background/img4.jpg" class="img-fluid">
                                        <p class="m-t-10">And is full of waffle to It has multiple paragraphs and is full of waffle to pad out the comment. Usually, you just wish these sorts of comments would come to an end.multiple paragraphs and is full of waffle to pad out the comment..</p>
                                    </div>
                                </div>
                                <div class="tab-pane p-10" id="user_feedback" role="tabpanel">
                                    <div class="p-10">
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
                                <div class="tab-pane  p-10" id="user_placement" role="tabpanel">
                                    <div class="p-10">
                                       <div class="table-responsive">
                                        <table id="zero_config4" class="table table-striped table-bordered">
                                        <thead>
                                          <tr>
                                            <th>Sr No.</th>
                                            <th>Name</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>Qualifi.</th>
                                            <th>city</th>
                                            <th>state</th>
                                            <th>Date</th>
                                            <th>User Placement </th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <?php 
                                        // print_r($feedback);
                                        
                                            $x=1;
                                              ?>
                                          <tr>
                                            <td><?php echo $x; ?></td>
                                            <td><?php echo $users->name; ?></td>
                                            <td><?php echo $users->mobile; ?></td>
                                            <td><?php echo $users->email_id; ?></td>
                                            <td><?php echo $users->qualification; ?></td>
                                            <td><?php echo $users->city; ?></td>
                                            <td><?php echo $users->state; ?></td>
                                            <td><?php echo change_date_format_dmy($users->created_date_time); ?></td>
                                            <td><?php if ($users->iss_placed == 0){ ?>
                                            <a class="btn btn-danger btn-xs" href="javascript:void(0);" onclick="update_placement_user_modal('<?php  echo $users->id;?>','<?php  echo $users->name; ?>');" title="User Not Placed"><i class="fa fa-exclamation"></i></a>
                                          <?php } else { ?>
                                            <a class="btn btn-primary btn-xs" href="javascript:void(0);" title="User Placed"><i class="fa fa-check"></i></a>
                                          <?php }?></td>
                                          </tr>
                                        

                                        </tbody>
                                        </table>
                                    </div>
                                       
                                    </div>
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
     <script>
        $('#zero_config2').DataTable();
    </script>
    <script>
        $('#zero_config3').DataTable();
    </script>
    <script>
        $('#zero_config4').DataTable();
    </script>
    <script type="text/javascript">
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
