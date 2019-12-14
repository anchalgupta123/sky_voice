<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
     <link href="<?php echo base_url();?>assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/extra-libs/multicheck/multicheck.css">
    <?php $this->load->view('bars/head',array('title'=>'LR Category'));?>
  </head>
  <body>
    <div id="main-wrapper">
      <?php $this->load->view('bars/header');?>
      <?php $this->load->view('bars/side_bar');?>
      <div class="page-wrapper">
        <div class="page-breadcrumb">
          <div class="row">
              <div class="col-12 d-flex no-block align-items-center">
                  <h4 class="page-title"> Logical Reasoning Question </h4>
              </div>
              <h5 style="margin-left:40%;">Total Added Questions : <?php echo $lr_count; ?></h5>
          </div>
        </div>
         <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title" style="margin-left:35%;margin-bottom: 5%;"><b>Add Logical Reasoning Questions</b></h5>
                    <div class="form-group row">
                            <label class="col-sm-2 text-right control-label col-form-label" for="first-name">Question <?php echo $lr_count + 1; ?> <span class="required">*</span>
                                      </label>
                            <div class="col-sm-10">
                                <textarea type="text" id="question" required="required" class="form-control datepicker col-md-12 col-xs-12"></textarea>
                            </div>
                          </div>  
                        <div class="form-group row">
                            <label class="col-sm-3 text-right control-label col-form-label" for="first-name">A <span class="required">*</span>
                               &nbsp;<input type="radio" name="a" onclick="set_answer();" id="a"></label>
                            <div class="col-sm-3">
                                <input type="text" id="option1" required="required" class="form-control datepicker col-md-12 col-xs-12"> 
                            </div>
                            <label class="col-sm-2 text-right control-label col-form-label" for="first-name">B  <span class="required">*</span>
                                 &nbsp;<input type="radio" name="a" onclick="set_answer1();" value=""></label>
                            <div class="col-sm-3">
                                <input type="text" id="option2" required="required" class="form-control datepicker col-md-12 col-xs-12"> 
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 text-right control-label col-form-label" for="first-name">C <span class="required">*</span>
                                 &nbsp;<input type="radio" name="a" onclick="set_answer2();"></label>
                            <div class="col-sm-3">
                                <input type="text" id="option3" required="required" class="form-control datepicker col-md-12 col-xs-12"> 
                            </div>
                            <label class="col-sm-2 text-right control-label col-form-label" for="first-name">D  <span class="required">*</span>
                                 &nbsp;<input type="radio" name="a" onclick="set_answer3();" ></label>
                            <div class="col-sm-3">
                                <input type="text" id="option4" required="required" class="form-control datepicker col-md-12 col-xs-12">  
                            </div>
                         </div>
                         <div class="form-group row">
                            <label class="col-sm-4 text-right control-label col-form-label" for="first-name">Answer  <span class="required">*</span>
                                      </label>
                            <div class="col-sm-8">
                                <input type="text" id="answer" required="required" class="form-control datepicker col-md-8 col-xs-12" disabled=""> 
                            </div>
                         </div>
                         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group" style="margin-left: 50%;">
                              <br>
                              <button type="buttons" class="btn btn-primary" onclick="add_lr_question();">Submit</button>
                            </div>
                         </div>
                      </div>
                <div class="container">
                   <h5 class="card-title"><b>View Logical Reasoning Question</b></h5>
                   <hr>
                  <div class="row">
                    <div class="table-responsive">
                      <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th>Question</th>
                            <th>Option1</th>
                            <th>Option2</th>
                            <th>Option3</th>
                            <th>Option4</th>
                            <th>Answer</th>
                            <th>Register Date</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php 
                          if(is_array($lr)) {
                              foreach ($lr as $key){ ?>
                          <tr>
                            <td><?php echo $key->question; ?></td>
                            <td><?php echo $key->option1; ?></td>
                            <td><?php echo $key->option2; ?></td>
                            <td><?php echo $key->option3; ?></td>
                            <td><?php echo $key->option4; ?></td>
                            <td><?php echo $key->answer; ?></td>
                            <td><?php echo change_date_format_dmy($key->created_date_time); ?></td>
                            <td><button class="btn btn-xs btn-warning" onclick="edit_lr_modal('<?php echo $key->id; ?>');">Edit</button> <button class="btn btn-danger btn-xs" onclick="delete_lr_category('<?php echo $key->id;?>');"><i class="fa fa-trash"></i></button></td>
                          </tr>
                          <?php }  } ?>
                        </tbody>
                        </table>
                    </div>
                  </div>
                </div>
            </div>
          </div>
          <?php $this->load->view('bars/footer');?>
          <?php $this->load->view('bars/js');?>
        </div>
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
      function set_answer() {
        option1=$('#option1').val();
        $('#answer').val(option1);
      }
      function set_answer1() {
        option2=$('#option2').val();
        $('#answer').val(option2);
      }
      function set_answer2() {
        option3=$('#option3').val();
        $('#answer').val(option3);
      }
      function set_answer3() {
        option4=$('#option4').val();
        $('#answer').val(option4);
      }
    </script>
    <script type="text/javascript">
      function edit_lr_modal(id)
      {
        $.ajax({
          url: base_url+"Category/edit_lr_modal", 
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