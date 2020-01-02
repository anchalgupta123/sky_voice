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
              <h5 class="card-title">
                      <a href="javascript:void(0);" style="float: right;" class="btn btn-primary" onclick="show_add_company_div();"><i class="fa fa-plus"></i> Add Company</a>
                    </h5>
                    
                    <div id="show_div" style="display: none;" class="card">
                <form class="form-horizontal">
                    <div class="card-body">
                        <h2 class="card-title" style="text-align: center;">Company Info</h2>
                        <div class="form-group row" style="margin-top: 20px;">
                            <label for="lname" class="col-sm-2 text-right control-label col-form-label">Company Name:-</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="c_name" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-2 text-right control-label col-form-label">HR Name:-</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="hr_name" value="" >
                            </div>
                            <label for="lname" class="col-sm-2 text-right control-label col-form-label">HR Email:-</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="hr_email" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                          
                          <label for="lname" class="col-sm-2 text-right control-label col-form-label">HR contact no.:-</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="update_hr_contact_no" value="">
                            </div>
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">No.of Currently Working Employee:-</label>
                            <div class="col-sm-2">
                                <input type="number" class="form-control" id="no_of_emp" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                             <label for="lname" class="col-sm-2 text-right control-label col-form-label">E-mail:-</label>
                            <div class="col-sm-3">
                                <input type="text"  class="form-control" id="email" value="">
                            </div>
                             <label for="lname" class="col-sm-2 text-right control-label col-form-label">Password:-</label>
                            <div class="col-sm-3">
                                <input type="text"  class="form-control" id="password" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-2 text-right control-label col-form-label">Business Category:-</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="buss_category" value="">
                            </div>
                            <label for="lname" class="col-sm-2 text-right control-label col-form-label">Mobile No.:-</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="mobile_no" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-2 text-right control-label col-form-label">Address:-</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="update_address" value="">
                            </div>
                            <label for="lname" class="col-sm-2 text-right control-label col-form-label">Unique Id:-</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="unique_id" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-2 text-right control-label col-form-label">Zip Code:-</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="update_zip_code" value="">
                            </div>
                            <label for="lname" class="col-sm-2 text-right control-label col-form-label">City:-</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="update_city" value="">
                            </div>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="button"  style="float: right;" onclick="insert_company_detail_by_admin();" class="btn btn-default ">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th>Sr No.</th>
                            <th>Name</th>
                            <th>Location</th>
                            <th>HR Name</th>
                            <th>HR Email</th>
                            <th>HR Contact No.</th>
                            <th>Unique ID</th>
                            <th>Category</th>
                            <th>resume visitor</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $x=1; foreach ($companies as $key){ ?>
                          <tr>
                            <td><?php echo $x++; ?></td>
                            <td><?php echo $key->company_name; ?></td>
                            <td><?php echo $key->city; ?></td>
                            <td><?php echo $key->hr_name; ?></td>
                            <td><?php echo $key->hr_email; ?></td>
                            <td><?php echo $key->hr_contact_no; ?></td>
                            <td><?php echo $key->hr_contact_no; ?></td>

                            <td><?php if ($key->unique_id!='')
                             {
                             echo $key->unique_id;
                            } else 
                            {
                              echo "Direct Login";
                            }?></td>
                            <td><?php echo $key->business_category; ?></td>
                            <td>
                              <?php if ($key->unique_id!='') {?>
                           <button class="btn btn-warning" onclick="edit_company_modal('<?php echo $key->id; ?>');">Edit</button>
                            <?php } else 
                            { ?>
                           <a href="<?php echo base_url();?>Company/viewCompanyPostJob?company_id=<?php echo $key->id;?>" class="btn btn-xs btn-default">View Job Post</a>
                           <a href="<?php echo base_url();?>Company/viewCompanyPostJob?company_id=<?php echo $key->id;?>" class="btn btn-xs btn-default"><?php echo $key->resume_count; ?></a>

                           <?php } ?>
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
      function show_add_company_div()
      {
        $('#show_div').toggle();
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
