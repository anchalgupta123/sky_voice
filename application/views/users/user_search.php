<!DOCTYPE html >
<html lang = "en">
<head>
<?php $this->load->view('bars/head', array('title' => 'Search Users')); ?>
<link href="<?php echo base_url();?>assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/extra-libs/multicheck/multicheck.css"></head>
<body class="nav-md">
  <div id="main-wrapper">
      <?php $this->load->view('bars/header');?>
      <?php $this->load->view('bars/side_bar');?>

     </div>
  <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Search Users</h4>
                </div>
            </div>
        </div>         
      <div class="container-fluid">
        <div class="card">
          <div class="card-body wizard-content">
            <h6 class="card-subtitle"></h6>
              <div class="row">
                <div class="col-md-3" style="display: none;">
                  <div class="form-group">
                    <label for="fname">Name:</label>
                    <input type="text" name="fname" id="fname" class="form-control" value="" placeholder="Name"/>
                  </div>
                </div>
              <div class="col-md-3" style="display: none;">
                <div class="form-group">
                  <label for="email">Email ID:</label>
                  <input type="text" name="email" id="email" class="form-control" value="" placeholder="Email ID"/>
                      
                </div>
              </div>
              <div class="col-md-3" style="display: none;">
                <div class="form-group">
                  <label for="mobile">Mobile:</label>
                  <input type="text" name="mobile" id="mobile" class="form-control" value="" placeholder="Mobile Number" />
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="gender">Gender:</label>
                  <select name="gender" id="gender" class="form-control">
                    <option value="">Select Gender</option>
                    <option value="Male" >Male
                    </option>
                    <option value="Female">Female
                    </option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="marital">Marital Status:</label>
                  <select name="marital" id="marital" class="form-control">
                    <option value="">Select Marital Status</option>
                    <option value="single" >Single
                    </option>
                    <option value="Married">Married
                    </option>
                    <option value="Divorced">Divorced
                    </option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="state">State:</label>
                  <select name="state" id="state" class="form-control" onchange="change_state();">
                    <option value="">Select State</option>
                    <?php foreach ($states as $key){ ?>
                    <option value="<?php echo $key->stateName; ?>"><?php echo $key->stateName; ?></option>
                    <?php } ?>
                    
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="city">City:</label>
                  <select name="city" id="city" class="form-control">
                    <option value="">Select City</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="pincode">Pin Code:</label>
                  <input type="text" name="pincode" id="pincode" class="form-control" value="" placeholder="PIN code"/>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="last_qualification">Last Qualification:</label>
                  <select name="last_qualification" id="last_qualification" class="form-control" onchange="change_last_qualification();">
                    <option value="">Select Last Qualification</option>
                    <option value="10th">10th
                    </option>
                    <option value="12th">12th
                    </option>
                    <option value="Diploma">Diploma
                    </option>
                    <option value="Graduate">Graduate
                    </option>
                    <option value="Post Graduate">Post Graduate
                    </option>
                    <option value="Other">Other
                    </option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="subject">Subject / Stream:</label>
                  <select id="subject" class="form-control" onchange="change_last_subject();">
                    <option value="">-Select-</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="subject">Specializations:</label>
                  <select type="text" name="specializations" id="specializations" class="form-control" placeholder="Specializations">
                    <option value="">-Select-</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="referral">Referral Code:</label>
                  <select name="referral" id="referral" class="form-control">
                    <option value="">Referral Code</option>
                    <option value="Yes">Yes
                    </option>
                    <option value="No">No
                    </option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="jobs">Type of Job:</label>
                  <select type="text" name="jobs" id="jobs" class="form-control">
                    <option value="">All</option>
                    <option value="Government">Government</option>
                    <option value="Private">Private</option>
                    <option value="Entrance Exam">Entrance Exam</option>
                    <option value="Government,Private">Government,Private</option>
                    <option value="Government,Entrance Exam">Government,Entrance Exam</option>
                    <option value="Private,Entrance Exam">Private,Entrance Exam</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="payment">Payment Status:</label>
                  <select name="payment" id="payment" class="form-control">
                    <option value="">Select Payment Status</option>
                    <option value="1">Done
                    </option>
                    <option value="0">Not Done
                    </option>
                  </select>
                </div>
              </div>
              <div class="col-md-12 text-right" style="margin-top: 10px;">
                <div class="form-group">
                  <button onclick="search_users_by_filter();" class="btn btn-primary">
                    <i class="fa fa-search"></i> Search Users                                                
                  </button>
                  <a href="javascript:void();" class="btn btn-default" onclick="location.reload();">Clear Search
                  </a>
                  <button class="btn btn-primary" id="export_users">
                    <i class="fa fa-download"></i> export users
                  </button>
                </div>
              </div>
            </div>
          </div>
       </div>
      <div class="card">
          <div class="card-body wizard-content">
            <h6 class="card-subtitle"></h6>
            <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <div class="clearfix"></div>
                </div>
                <div class="x_content" id="table_data">
                  
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
   <?php $this->load->view('bars/footer'); ?>
</div>
  <div class="modal" id="modal_report"  tabindex="-1" role="dialog" aria-hidden="true">
      
  </div>
              <!-- jQuery -->
  <?php $this->load->view('bars/js'); ?>
<!-- ========== DATA TABLES JS ========== -->
   <script src="<?php echo base_url();?>assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="<?php echo base_url();?>/assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="<?php echo base_url();?>assets/extra-libs/DataTables/datatables.min.js"></script>
 <!-- ========== DATA TABLES JS ========== -->

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

 </script>
</body>
</html>