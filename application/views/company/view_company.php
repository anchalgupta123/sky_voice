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
                      <a href="javascript:void(0);" style="float: right;" class="btn btn-primary" onclick="add_company_modal();"><i class="fa fa-plus"></i> Add Company</a>
                    </h5>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Location</th>
                            <th>HR Name</th>
                            <th>HR Email</th>
                            <th>HR Contact No.</th>
                            <th>Unique ID</th>
                            <th>Category</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($companies as $key){ ?>
                          <tr>
                            <td><?php echo $key->name; ?></td>
                            <td><?php echo $key->company_location; ?></td>
                            <td><?php echo $key->hr_name; ?></td>
                            <td><?php echo $key->hr_email; ?></td>
                            <td><?php echo $key->hr_contact_no; ?></td>
                            <td><?php echo $key->unique_id; ?></td>
                            <td><?php echo $key->category; ?></td>
                            <td><button class="btn btn-xs btn-warning" onclick="edit_company_modal('<?php echo $key->id; ?>');">Edit</button></td>
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
