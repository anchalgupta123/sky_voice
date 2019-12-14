<!DOCTYPE html >
<html lang = "en">
<head>
<?php $this->load->view('bars/head', array('title' => 'Search Users')); ?>
<link href="<?php echo base_url();?>assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/extra-libs/multicheck/multicheck.css">
</head>
<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <!-- sidebar menu -->
      <?php $this->load->view('bars/side_bar');?>
      <!-- /sidebar menu -->
      <!-- top navigation -->
      <?php $this->load->view('bars/header'); ?>
      <!-- /top navigation -->
      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Search Users</h2>
                  <div class="clearfix"></div>
                </div>
                <?php echo form_open(); ?>
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="fname">Name:</label>
                      <input type="text" name="fname" id="fname" class="form-control" value="
                        <?php echo set_value('fname'); ?>"                                                       placeholder="Name"/>
                        <div class="text-danger">
                          <?php echo form_error('fname'); ?>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="email">Email ID:</label>
                        <input type="text" name="email" id="email" class="form-control" value="
                          <?php echo set_value('email'); ?>"                                                       placeholder="Email ID"/>
                          <div class="text-danger">
                            <?php echo form_error('email'); ?>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="mobile">Mobile:</label>
                          <input type="text" name="mobile" id="mobile" class="form-control" value="
                            <?php echo set_value('mobile'); ?>" placeholder="Mobile Number" />
                            <div class="text-danger">
                              <?php echo form_error('mobile'); ?>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="gender">Gender:</label>
                            <select name="gender" id="gender" class="form-control">
                              <option value="">Select Gender</option>
                              <option value="Male" 
                                <?php echo (set_value('gender') == 'Male'? 'selected="selected"' : ''); ?>  >Male
                              </option>
                              <option value="Female" 
                                <?php echo (set_value('gender') == 'Female'? 'selected="selected"' : ''); ?> >Female
                              </option>
                            </select>
                            <div class="text-danger">
                              <?php echo form_error('gender'); ?>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="martial">Martial Status:</label>
                            <select name="martial" id="martial" class="form-control">
                              <option value="">Select Martial Status</option>
                              <option value="single" 
                                <?php echo (set_value('martial') == 'single'? 'selected="selected"' : ''); ?> >Single
                              </option>
                              <option value="Married" 
                                <?php echo (set_value('martial') == 'Married'? 'selected="selected"' : ''); ?> >Married
                              </option>
                              <option value="Divorced" 
                                <?php echo (set_value('martial') == 'Divorced'? 'selected="selected"' : ''); ?> >Divorced
                              </option>
                            </select>
                            <div class="text-danger">
                              <?php echo form_error('martial'); ?>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="martial">Referral Code:</label>
                            <select name="referral" id="referral" class="form-control">
                              <option value="">Referral Code</option>
                              <option value="Yes" 
                                <?php echo (set_value('referral') == 'Yes'? 'selected="selected"' : ''); ?>  >Yes
                              </option>
                              <option value="No" 
                                <?php echo (set_value('referral') == 'No'? 'selected="selected"' : ''); ?>  >No
                              </option>
                            </select>
                            <div class="text-danger">
                              <?php echo form_error('referral'); ?>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="state">State:</label>
                            <select name="state" id="state" class="form-control">
                              <option value="">Select State</option>
                              <option value="Madhya Pradesh" 
                                <?php echo (set_value('state') == 'Madhya Pradesh'? 'selected="selected"' : ''); ?> >Madhya Pradesh
                              </option>
                            </select>
                            <div class="text-danger">
                              <?php echo form_error('state'); ?>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="city">City:</label>
                            <select name="city" id="city" class="form-control">
                              <option value="">Select City</option>
                             <?php 
	                            $this->db->distinct();
	                            $this->db->select('city');
                								$query = $this->db->get('citizen_master');
                								foreach ($query->result() as $row)
                								{
                							?>
                							<option value = "<?php echo $row->city; ?>">
                                              <?php echo $row->city; ?>
                                              </option>
                                            <?php
                								}
                							?>
                              <!--<option value="Indore" 
                              <?php echo (set_value('city') == 'Indore'? 'selected="selected"' : ''); ?> >Indore</option> -->
                            </select>
                            <div class="text-danger">
                              <?php echo form_error('city'); ?>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="pincode">Pin Code:</label>
                            <input type="text" name="pincode" id="pincode" class="form-control" value="
                              <?php echo set_value('pincode'); ?>"                                                       placeholder="PIN code"/>
                              <div class="text-danger">
                                <?php echo form_error('pincode'); ?>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <label for="last_qualification">Last Qualification:</label>
                              <select name="last_qualification" id="last_qualification" class="form-control">
                                <option value="">Select Last Qualification</option>
                                <option value="10th" 
                                  <?php echo (set_value('last_qualification') == '10th'? 'selected="selected"' : ''); ?> >10th
                                </option>
                                <option value="12th" 
                                  <?php echo (set_value('last_qualification') == '12th'? 'selected="selected"' : ''); ?>>12th
                                </option>
                                <option value="Diploma" 
                                  <?php echo (set_value('last_qualification') == 'Diploma'? 'selected="selected"' : ''); ?>>Diploma
                                </option>
                                <option value="Graduate" 
                                  <?php echo (set_value('last_qualification') == 'Graduate'? 'selected="selected"' : ''); ?>>Graduate
                                </option>
                                <option value="Post Graduate" 
                                  <?php echo (set_value('last_qualification') == 'Post Graduate'? 'selected="selected"' : ''); ?>>Post Graduate
                                </option>
                                <option value="Other" 
                                  <?php echo (set_value('last_qualification') == 'Other'? 'selected="selected"' : ''); ?>>Other
                                </option>
                              </select>
                              <div class="text-danger">
                                <?php echo form_error('last_qualification'); ?>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <label for="subject">Subject / Stream:</label>
                              <input type="text" name="subject" id="subject" class="form-control" value="
                                <?php echo set_value('subject'); ?>"                                                       placeholder="Subject / Stream"/>
                                <div class="text-danger">
                                  <?php echo form_error('subject'); ?>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="jobs">Type of Job:</label>
                                <input type="text" name="jobs" id="jobs" class="form-control" value="
                                  <?php echo set_value('jobs'); ?>"                                                       placeholder="Type of job looking for"/>
                                  <div class="text-danger">
                                    <?php echo form_error('jobs'); ?>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label for="age">Age:</label>
                                  <select name="age" id="age" class="form-control">
                                    <option value="">Select Age</option>
                                    <?php                                                        $current_year = (int) (date('Y'));                                                        $preVal = set_value('age');                                                        for($i=10; $i<=80; $i++) {                                                            $val = $current_year - $i;                                                    ?>
                                    <option value="
                                      <?php echo $val; ?>" 
                                      <?php echo ($preVal == $val? 'selected="selected"' : ''); ?> >
                                      <?php echo $i .' Years'; ?>
                                    </option>
                                    <?php } ?>
                                  </select>
                                  <div class="text-danger">
                                    <?php echo form_error('age'); ?>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label for="payment">Payment Status:</label>
                                  <select name="payment" id="payment" class="form-control">
                                    <option value="">Select Payment Status</option>
                                    <option value="1" 
                                      <?php echo (set_value('payment') == '1'? 'selected="selected"' : ''); ?> >Done
                                    </option>
                                    <option value="0" 
                                      <?php echo (set_value('payment') == '0'? 'selected="selected"' : ''); ?> >Not Done
                                    </option>
                                  </select>
                                  <div class="text-danger">
                                    <?php echo form_error('payment'); ?>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12 text-right" style="margin-top: 10px;">
                                <div class="form-group">
                                  <button   id="advance_filter" class="btn btn-primary">
                                    <i                                                            class="fa fa-search"></i> Search Users                                                
                                  </button>
                                  <a href="
                                    <?php echo base_url('users/search'); ?>" class="btn btn-default">Clear Search
                                  </a>
                                  <button class="btn btn-primary" id="export_users">
                                    <i class="fa fa-download"></i> export users
                                  </button>
                                </div>
                              </div>
                            </div>
                            <?php echo form_close(); ?>
                          </div>
                        </div>
                      </div>
                      <!-- @TODO another row for result -->
                      <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <div class="x_panel">
                            <div class="x_title">
                              <h2>
                                <?php echo $view_type; ?>
                              </h2>
                              <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                              <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                    <th>Name</th>
                                    <th>Gender</th>
                                    <th>Age</th>
                                    <th>Mobile</th>
                                    <th>Marital status</th>
                                    <th>Email Id</th>
                                    <th>Payment</th>
                                    <th>Postcode</th>
                                    <th>Referer</th>
                                    <th>Status</th>
                                  </tr>
                                </thead>
                                <tbody></tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /page content -->
                  <!-- footer content -->
                  <?php $this->load->view('bars/footer'); ?>
                  <!-- /footer content -->
                </div>
              </div>
              <!-- jQuery -->
              <?php $this->load->view('bars/js'); ?>
<!-- ========== DATA TABLES JS ========== -->
     <link href="<?php echo base_url();?>assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/extra-libs/multicheck/multicheck.css">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/libs/select2/dist/css/select2.min.css">
 <!-- ========== DATA TABLES JS ========== -->
<script type="text/javascript">
  $(document).ready(function() {
    $('#zero_config').DataTable();
  }); 
</script>
<script type = "application/javascript" >
var oTable;
var gender = '';
var m_status = '';
var referral = '';
var state = '';
var city = '';
var pincode = '';
var qual = '';
var stream = '';
var jobs = '';
var payments = '';
var API_HOST = "<?php echo base_url();?>";
$(function() {
    $('#advance_filter').on('click', function() {
        gender = $('#gender option:selected').val();
        m_status = $('#martial option:selected').val();
        referral = $('#referral option:selected').val();
        state = $('#state option:selected').val();
        city = $('#city option:selected').val();
        pincode = $('#pincode').val();
        stream = $('#subject').val();
        jobs = $('#looking_job').val();
        qual = $('#last_qualification option:selected').val();
        payments = $('#payment option:selected').val();
        transaction.loadUsersTransaction();
        //alert(gender);
    });
    $('#export_users').on('click', function() {
        gender = $('#gender option:selected').val();
        m_status = $('#martial option:selected').val();
        referral = $('#referral option:selected').val();
        state = $('#state option:selected').val();
        city = $('#city option:selected').val();
        pincode = $('#pincode').val();
        stream = $('#subject').val();
        jobs = $('#looking_job').val();
        qual = $('#last_qualification option:selected').val();
        payments = $('#payment option:selected').val();
        transaction.loadUsersExcel();
    });
    var transaction = {
        persistChecked: function() {},
        loadUsersTransaction: function() {
            oTable = $('#zero_config').dataTable({
                "bProcessing": true,
                "bServerSide": true,
                "bDestroy": true,
                "sAjaxSource": API_HOST + 'Users/filter_users',
                "fnServerParams": function(aoData) {
                    aoData.push(
                    {
                        "name": "status",
                        "value": "1"
                    },{
                        "name": "gender",
                        "value": gender
                    }, {
                        "name": "m_status",
                        "value": m_status
                    }, {
                        "name": "referral",
                        "value": referral
                    }, {
                        "name": "state",
                        "value": state
                    }, {
                        "name": "city",
                        "value": city
                    }, {
                        "name": "pincode",
                        "value": pincode
                    }, {
                        "name": "qualification",
                        "value": qual
                    }, {
                        "name": "stream",
                        "value": stream
                    }, {
                        "name": "jobs",
                        "value": jobs
                    }, {
                        "name": "payments",
                        "value": payments
                    });
                },
                // "bJQueryUI": true,
                // "sPaginationType": "full_numbers",
                // "iDisplayLength": 10,
                // "oLanguage": {
                //     "sProcessing": ''
                // },
                // 'bAutoWidth': true,
                // //"aoColumns": aoColumns,          
                // "order": [
                //     [0, 'desc']
                // ],
                "fnDrawCallback": function() {
                    transaction.persistChecked()
                },
                'fnServerData': function(sSource, aoData, fnCallback) {
                    $.ajax({
                        'dataType': 'json',
                        'type': 'POST',
                        'url': sSource,
                        'data': aoData,
                        'success': fnCallback,
                        'async': true
                    });
                }
            });
            $('#sample_2_processing').fadeOut(3000);
        },
        loadUsersExcel: function() {
            $.ajax({
                url: API_HOST + 'Users/filter_users_exports',
                data: {
                    gender: gender,
                    m_status: m_status,
                    referral: referral,
                    state: state,
                    city: city,
                    pincode: pincode,
                    qual: qual,
                    stream: stream,
                    jobs: jobs,
                    payments: payments
                },
                success: function(response) {
                    var res = JSON.parse(response);
                    window.location.href = res.file;
                }
            });
        }
    };
    transaction.loadUsersTransaction();
}); 
</script>
</body>
</html>