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
                  <h4 class="page-title"> Company Profile </h4>
              </div>
          </div>
        </div>
        <div class="container-fluid">
             <div class="card">
                <form class="form-horizontal">
                    <div class="card-body">
                        <h2 class="card-title" style="text-align: center;">Company Info</h2>
                        <div class="form-group row" style="margin-top: 20px;">
                            <label for="lname" class="col-sm-2 text-right control-label col-form-label">Company Name:-</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="c_name" value="<?php echo $singel_company->company_name;?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-2 text-right control-label col-form-label">HR Name:-</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="hr_name" value="<?php echo $singel_company->hr_name;?>" >
                            </div>
                            <label for="lname" class="col-sm-2 text-right control-label col-form-label">HR Email:-</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="hr_email" value="<?php echo $singel_company->hr_email;?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-2 text-right control-label col-form-label">E-mail:-</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="email" value="<?php echo $singel_company->email;?>">
                            </div>
                            <label for="lname" class="col-sm-2 text-right control-label col-form-label">Mobile No.1:-</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="mobile_no" value="<?php echo $singel_company->mobile_no;?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-4 text-right control-label col-form-label">No.of Currently Working Employee:-</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" id="no_of_emp" value="<?php echo $singel_company->no_of_curr_emp;?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-2 text-right control-label col-form-label">Business Category:-</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="buss_category" value="<?php echo $singel_company->business_category;?>">
                            </div>
                            <label for="lname" class="col-sm-2 text-right control-label col-form-label">Mobile No.2:-</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="mobile_no2" value="<?php echo $singel_company->mobile_no2;?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-2 text-right control-label col-form-label">Address:-</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="update_address" value="<?php echo $singel_company->address;?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-2 text-right control-label col-form-label">Zip Code:-</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="update_zip_code" value="<?php echo $singel_company->zip_code;?>">
                            </div>
                            <label for="lname" class="col-sm-2 text-right control-label col-form-label">City:-</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="update_city" value="<?php echo $singel_company->city;?>">
                            </div>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="button"  style="float: right;" onclick="update_company_profile();" class="btn btn-default ">Submit</button>
                        </div>
                    </div>
                </form>
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
