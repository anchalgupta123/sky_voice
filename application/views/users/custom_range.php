<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
     <?php $this->load->view('bars/head', array('title' => 'Custom Range')); ?>
     <link href="<?php echo base_url();?>assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/extra-libs/multicheck/multicheck.css">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/libs/select2/dist/css/select2.min.css">
   
  </head>
  <body>
    <div id="main-wrapper">
      <?php $this->load->view('bars/header');?>
      <?php $this->load->view('bars/side_bar');?>
     </div>
      <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title"></h4>
                    </div>
                </div>
            </div>           
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body wizard-content">
                        <h4 class="card-title">Custom Range <small>(Date of Registration)
                        </small></h4>
                        <hr>
                        <h6 class="card-subtitle"></h6>
                            <div class="row">
                              <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <div class="form-group">
                                  <label>Select Start Date</label>
                                  <input type="text" class="form-control mydatepicker" name="" id="end_date" autocomplete="off" placeholder="mm/dd/yyyy">
                                </div>
                              </div>
                              <div class="col-md-offset-1 col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <div class="form-group">
                                  <label>Select End Date</label>
                                  <input type="text" class="form-control mydatepicker" name="" id="start_date" autocomplete="off" placeholder="mm/dd/yyyy">
                                </div>
                              </div>
                              <div class="col-xs-4 col-sm-4 col-md-3 col-lg-4">
                                <div class="form-group" style="padding-top: 6px;">
                                  <br>
                                  <button class="btn btn-primary" onclick="show_custom_range();">Submit</button>
                                </div>
                              </div>
                            </div>
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
    
      <?php $this->load->view('bars/footer');?>
     <?php $this->load->view('bars/js');?>
    </div>
    
    <script src="<?php echo base_url();?>assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="<?php echo base_url();?>/assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="<?php echo base_url();?>assets/extra-libs/DataTables/datatables.min.js"></script>
    <script src="<?php echo base_url();?>assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="<?php echo base_url();?>assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="<?php echo base_url();?>assets/libs/select2/dist/js/select2.min.js"></script>
     <script type="text/javascript">
        $('#zero_config').DataTable();
     </script>
     <script type="text/javascript">
     function show_user_detail_modal(id) {
      $.ajax({
        url: base_url+"Users/modal_user_details", 
        type : "POST",
        data: {id : id},
        success: function(result)
        {
            $('#modal_report').html(result);
            $('#modal_report').modal('show');
        }
      });
    }
    function show_custom_range() {
      start_date = $('#start_date').val();
      end_date = $('#end_date').val();
      $.ajax({
        url: base_url+"Users/get_users_list_custom_range", 
        type : "POST",
        data: {start_date:start_date ,end_date: end_date},
        success: function(result)
        {
          $('#table_data').html(result);
        }
      });
    }

     function show_user_detail_modal(id) {
      $.ajax({
        url: base_url+"Users/modal_user_details", 
        type : "POST",
        data: {id : id},
        success: function(result)
        {
            $('#modal_report').html(result);
            $('#modal_report').modal('show');
        }
      });
    }
    function show_custom_range() {
      start_date = $('#start_date').val();
      end_date = $('#end_date').val();
      $.ajax({
        url: base_url+"Users/get_users_list_custom_range", 
        type : "POST",
        data: {start_date:start_date ,end_date: end_date},
        success: function(result)
        {
          $('#table_data').html(result);
        }
      });
    }
  </script>
  <script>
        $(".select2").select2();
        $('.demo').each(function() {
      
        $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                position: $(this).attr('data-position') || 'bottom left',

                change: function(value, opacity) {
                    if (!value) return;
                    if (opacity) value += ', ' + opacity;
                    if (typeof console === 'object') {
                        console.log(value);
                    }
                },
                theme: 'bootstrap'
            });

        });
        /*datwpicker*/
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        var quill = new Quill('#editor', {
            theme: 'snow'
        });

    </script>

  </body>
</html>
