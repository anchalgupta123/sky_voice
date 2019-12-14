<!DOCTYPE html>

<html lang="en">

<head>

    <?php $this->load->view('bars/head', array('title' => 'Search Users')); ?>

    <link href="<?php echo base_url();?>assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/extra-libs/multicheck/multicheck.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/dataTables.bootstrap.min.css">

</head>

<body class="nav-md">

<div class="container body">

    <div class="main_container">

        <!-- sidebar menu -->

        <?php $this->load->view('bars/side_bar'); ?>

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

                                        <input type="text" name="fname" id="fname" class="form-control" value="<?php echo set_value('fname'); ?>"

                                               placeholder="Name">

                                        <div class="text-danger"><?php echo form_error('fname'); ?></div>

                                    </div>

                                </div>

                                <div class="col-md-3">

                                    <div class="form-group">

                                        <label for="email">Email ID:</label>

                                        <input type="text" name="email" id="email" class="form-control" value="<?php echo set_value('email'); ?>"

                                               placeholder="Email ID">

                                        <div class="text-danger"><?php echo form_error('email'); ?></div>



                                    </div>

                                </div>

                                <div class="col-md-3">

                                    <div class="form-group">

                                        <label for="mobile">Mobile:</label>

                                        <input type="text" name="mobile" id="mobile" class="form-control" value="<?php echo set_value('mobile'); ?>"

                                               placeholder="Mobile Number">

                                        <div class="text-danger"><?php echo form_error('mobile'); ?></div>

                                    </div>

                                </div>

                                <div class="col-md-3">

                                    <div class="form-group">

                                        <label for="gender">Gender:</label>

                                        <select name="gender" id="gender" class="form-control">

                                            <option value="">Select Gender</option>

                                            <option value="Male" <?php echo (set_value('gender') == 'Male'? 'selected="selected"' : ''); ?> >Male</option>

                                            <option value="Female" <?php echo (set_value('gender') == 'Female'? 'selected="selected"' : ''); ?>>Female</option>

                                        </select>

                                        <div class="text-danger"><?php echo form_error('gender'); ?></div>

                                    </div>

                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-3">

                                    <div class="form-group">

                                        <label for="martial">Martial Status:</label>

                                        <select name="martial" id="martial" class="form-control">

                                            <option value="">Select Martial Status</option>

                                            <option value="single" <?php echo (set_value('martial') == 'single'? 'selected="selected"' : ''); ?> >Single</option>

                                            <option value="Married" <?php echo (set_value('martial') == 'Married'? 'selected="selected"' : ''); ?> >Married</option>

                                            <option value="Divorced" <?php echo (set_value('martial') == 'Divorced'? 'selected="selected"' : ''); ?> >Divorced</option>

                                        </select>

                                        <div class="text-danger"><?php echo form_error('martial'); ?></div>

                                    </div>

                                </div>

                                <div class="col-md-3">

                                    <div class="form-group">

                                        <label for="martial">Referral Code:</label>

                                        <select name="referral" id="referral" class="form-control">

                                            <option value="">Referral Code</option>

                                            <option value="Yes" <?php echo (set_value('referral') == 'Yes'? 'selected="selected"' : ''); ?>  >Yes</option>

                                            <option value="No" <?php echo (set_value('referral') == 'No'? 'selected="selected"' : ''); ?>  >No</option>

                                        </select>

                                        <div class="text-danger"><?php echo form_error('referral'); ?></div>

                                    </div>

                                </div>

                                <div class="col-md-3">

                                    <div class="form-group">

                                        <label for="state">State:</label>

                                        <select name="state" id="state" class="form-control">

                                            <option value="">Select State</option>

                                            <option value="Madhya Pradesh" <?php echo (set_value('state') == 'Madhya Pradesh'? 'selected="selected"' : ''); ?> >Madhya Pradesh</option>

                                        </select>

                                        <div class="text-danger"><?php echo form_error('state'); ?></div>

                                    </div>

                                </div>

                                <div class="col-md-3">

                                    <div class="form-group">

                                        <label for="city">City:</label>

                                        <select name="city" id="city" class="form-control">

                                            <option value="">Select City</option>

                                            <option value="Indore" <?php echo (set_value('city') == 'Indore'? 'selected="selected"' : ''); ?> >Indore</option>

                                        </select>

                                        <div class="text-danger"><?php echo form_error('city'); ?></div>

                                    </div>

                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-3">

                                    <div class="form-group">

                                        <label for="pincode">Pin Code:</label>

                                        <input type="text" name="pincode" id="pincode" class="form-control" value="<?php echo set_value('pincode'); ?>"

                                               placeholder="PIN code">

                                        <div class="text-danger"><?php echo form_error('pincode'); ?></div>

                                    </div>

                                </div>

                                <div class="col-md-3">

                                    <div class="form-group">

                                        <label for="last_qualification">Last Qualification:</label>

                                        <select name="last_qualification" id="last_qualification" class="form-control">

                                            <option value="">Select Last Qualification</option>

                                            <option value="10th" <?php echo (set_value('last_qualification') == '10th'? 'selected="selected"' : ''); ?> >10th</option>

                                            <option value="12th" <?php echo (set_value('last_qualification') == '12th'? 'selected="selected"' : ''); ?>>12th</option>

                                            <option value="Diploma" <?php echo (set_value('last_qualification') == 'Diploma'? 'selected="selected"' : ''); ?>>Diploma</option>

                                            <option value="Graduate" <?php echo (set_value('last_qualification') == 'Graduate'? 'selected="selected"' : ''); ?>>Graduate</option>

                                            <option value="Post Graduate" <?php echo (set_value('last_qualification') == 'Post Graduate'? 'selected="selected"' : ''); ?>>Post Graduate</option>

                                            <option value="Other" <?php echo (set_value('last_qualification') == 'Other'? 'selected="selected"' : ''); ?>>Other</option>

                                        </select>

                                        <div class="text-danger"><?php echo form_error('last_qualification'); ?></div>

                                    </div>

                                </div>

                                <div class="col-md-3">

                                    <div class="form-group">

                                        <label for="subject">Subject / Stream:</label>

                                        <input type="text" name="subject" id="subject" class="form-control" value="<?php echo set_value('subject'); ?>"

                                               placeholder="Subject / Stream">

                                        <div class="text-danger"><?php echo form_error('subject'); ?></div>

                                    </div>

                                </div>

                                <div class="col-md-3">

                                    <div class="form-group">

                                        <label for="jobs">Type of Job:</label>

                                        <input type="text" name="jobs" id="jobs" class="form-control" value="<?php echo set_value('jobs'); ?>"

                                               placeholder="Type of job looking for">

                                        <div class="text-danger"><?php echo form_error('jobs'); ?></div>

                                    </div>

                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-3">

                                    <div class="form-group">

                                        <label for="age">Age:</label>

                                        <select name="age" id="age" class="form-control">

                                            <option value="">Select Age</option>

                                            <?php

                                            $current_year = (int) (date('Y'));

                                            $preVal = set_value('age');

                                            for($i=10; $i<=80; $i++) {

                                                $val = $current_year - $i;

                                                ?>

                                                <option value="<?php echo $val; ?>" <?php echo ($preVal == $val? 'selected="selected"' : ''); ?> ><?php echo $i .' Years'; ?></option>

                                            <?php } ?>

                                        </select>

                                        <div class="text-danger"><?php echo form_error('age'); ?></div>

                                    </div>

                                </div>

                                <div class="col-md-3">

                                    <div class="form-group">

                                        <label for="payment">Payment Status:</label>

                                        <select name="payment" id="payment" class="form-control">

                                            <option value="">Select Payment Status</option>

                                            <option value="1" <?php echo (set_value('payment') == '1'? 'selected="selected"' : ''); ?> >Done</option>

                                            <option value="0" <?php echo (set_value('payment') == '0'? 'selected="selected"' : ''); ?> >Not Done</option>

                                        </select>

                                        <div class="text-danger"><?php echo form_error('payment'); ?></div>

                                    </div>

                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-12 text-right" style="margin-top: 10px;">

                                    <div class="form-group">

                                        <button type="submit" id="submit" class="btn btn-primary"><i

                                                class="fa fa-search"></i> Search Users

                                        </button>

                                        <?php

                                        if (is_array($users) && count($users) > 0) {

                                            echo '<button type="submit" id="download" name="download" value="download" class="btn btn-success"><i

                                                    class="fa fa-download"></i> Download Results</button>';

                                        }

                                        ?>

                                        <a href="<?php echo base_url('users/search'); ?>" class="btn btn-default">Clear Search</a>

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

                                <h2><?php echo $view_type; ?></h2>

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

                                    <tbody>

                                    <?php if ($view_type == 'Search Results' && is_array($users)) { ?>

                                        <?php foreach ($users as $key) { ?>

                                            <tr>

                                                <td><?php echo $key->name; ?></td>

                                                <td><?php echo $key->gender; ?></td>

                                                <td><?php echo calculateAge($key->dob) . ' Years'; ?></td>

                                                <td><?php echo $key->mobile; ?></td>

                                                <td><?php echo $key->marital_status; ?></td>

                                                <td><?php echo $key->email_id; ?></td>

                                                <td><?php echo($key->payment_status == NULL || $key->payment_status == '' ? 'N/A' : $key->payment_status == '0' ? 'Not Done' : 'Done'); ?></td>

                                                <td><?php echo $key->p_address; ?></td>

                                                <td><?php echo($key->refer_by == '' ? 'No' : 'Yes'); ?></td>

                                                <td>

                                                    <a class="btn btn-info btn-xs"

                                                       href="<?php echo base_url('users/feedback/' . md5($key->id)) ?>"><i

                                                            class="fa fa-book"></i></a>

                                                    <?php if ($key->status == 0) { ?>

                                                        <a href="javascript:void(0);" class="btn btn-danger btn-xs"

                                                           onclick="show_modal_update_status('<?php echo $key->user_id; ?>','<?php echo $key->name; ?>')"><i

                                                                class="fa fa-times" aria-hidden="true"></i></a>

                                                    <?php } else if ($key->status == 1) { ?>

                                                        <a href="javascript:void(0);" class="btn btn-warning btn-xs"><i

                                                                class="fa fa-check" aria-hidden="true"></i></a>

                                                    <?php } ?>



                                                </td>

                                            </tr>

                                        <?php }

                                    } ?>

                                    </tbody>

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
    <script src="<?php echo base_url();?>assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="<?php echo base_url();?>/assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="<?php echo base_url();?>assets/extra-libs/DataTables/datatables.min.js"></script>

<!-- ========== DATA TABLES JS ========== -->
<script>
 $('#zero_config').DataTable();
</script>

</body>

</html>

