<div class="modal-dialog">
    <div class="modal-content">
        <form id="uploadForm" data-parsley-validate class="form-horizontal form-label-left">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Update LR Question</h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label class="control-label col-md-4 col-sm-4 col-xs-12" for="first-name">Question <span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <input type="text" id="question1" required="required" class="form-control datepicker col-md-10 col-xs-12" value="<?php echo $lr->question; ?>" required>
                    </div>
                </div>  
                <div class="form-group row">
                    <label class="control-label col-md-4 col-sm-4 col-xs-12" for="first-name"> A <span class="required">*</span><input type="radio" name="a" onclick="set_answer11();">
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <input type="text" id="option11" required="required" class="form-control datepicker col-md-10 col-xs-12" value="<?php echo $lr->option1; ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-4 col-sm-4 col-xs-12" for="first-name"> B <span class="required">*</span><input type="radio" name="a" onclick="set_answer12();">
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <input type="text" id="option22" required="required" class="form-control datepicker col-md-10 col-xs-12" value="<?php echo $lr->option2;?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-4 col-sm-4 col-xs-12" for="first-name"> C <span class="required">*</span><input type="radio" name="a" onclick="set_answer13();">
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <input type="text" id="option33" class="form-control datepicker col-md-10 col-xs-12" value="<?php echo $lr->option3;?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-4 col-sm-4 col-xs-12" for="first-name"> D <span class="required">*</span><input type="radio" name="a" onclick="set_answer14();">
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <input type="text" id="option44" required="required" class="form-control datepicker col-md-10 col-xs-12" value="<?php echo $lr->option4; ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-4 col-sm-4 col-xs-12" for="first-name"> Answer <span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <input type="text" id="answer1" required="required" class="form-control datepicker col-md-10 col-xs-12" value="<?php echo $lr->answer; ?>">
                          <input type="hidden" value="<?php echo $lr->id; ?>" id="lr_id">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-warning" onclick="update_lr_category();">Save</button>    
            </div>
        </form>

    </div>
</div>

<script type="text/javascript">
    function set_answer11() {
        option11=$('#option11').val();
        $('#answer1').val(option11);
      }
    function set_answer12() {
        option22=$('#option22').val();
        $('#answer1').val(option22);
      }
    function set_answer13() {
        option33=$('#option33').val();
        $('#answer1').val(option33);
      }
    function set_answer14() {
        option44=$('#option44').val();
        $('#answer1').val(option44);
      }
</script>                  