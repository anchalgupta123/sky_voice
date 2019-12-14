<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/libs/select2/dist/css/select2.min.css">
<div class="modal-dialog">
	<div class="modal-content">
		<form id="uploadForm" data-parsley-validate class="form-horizontal form-label-left">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">User Placement</h4>
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="form-group row">
					<label class="col-sm-3 text-right control-label col-form-label" for="first-name">User Name <span class="required">*</span>
                    </label>
                    <div class="col-sm-8">
                        <input type="text" id="name" required="required" value="<?php echo $name; ?>" class="form-control datepicker col-md-12 col-xs-12" disabled>
                        <input type="hidden" value="<?php echo $id;?>" id="user_id" name="">
                    </div>
				</div>	
				<div class="form-group row">
					<label class="col-sm-3 text-right control-label col-form-label" for="first-name">Company Name <span class="required">*</span>
                    </label>
                    <div class="col-sm-8">
                        <select class="form-control" id="company_id" onchange="change_company_name_in_joining();">
                        	<option value="">-Select-</option>
                        	<?php foreach ($company as $key){ ?>
                        	<option value="<?php echo $key->id;?>" c_category="<?php echo $key->category;?>" hr_name="<?php echo $key->hr_name;?>" hr_email="<?php echo $key->hr_email;?>" company_location="<?php echo $key->company_location;?>"><?php echo $key->name; ?></option>
                        	<?php } ?>
                        </select>
                    </div>
				</div>	
				<div class="form-group row">
					<label class="col-sm-3 text-right control-label col-form-label" for="">location <span class="required">*</span>
                    </label>
                    <div class="col-sm-8">
                    	<input type="text" id="company_location" name="" disabled="" class="form-control">
                    </div>
				</div>
				<div class="form-group row">
					<label class="col-sm-3 text-right control-label col-form-label" for="">Category <span class="required">*</span>
                    </label>
                    <div class="col-sm-8">
                    	<input type="text" id="category" name="" disabled="" class="form-control">
                    </div>
				</div>
				<div class="form-group row">
					<label class="col-sm-3 text-right control-label col-form-label" for="">HR Name <span class="required">*</span>
                    </label>
                    <div class="col-sm-8">
                    	<input type="text" id="hr_name" name="" disabled="" class="form-control">
                    </div>
				</div>
				<div class="form-group row">
					<label class="col-sm-3 text-right control-label col-form-label" for="">HR Email <span class="required">*</span>
                    </label>
                    <div class="col-sm-8">
                    	<input type="text" id="hr_email" name="" disabled="" class="form-control">
                    </div>
				</div>
				<div class="form-group row">
					<label class="col-sm-3 text-right control-label col-form-label" for="">CTC (M/Y) <span class="required">*</span>
                    </label>
                    <div class="col-sm-8">
                    	<input type="text" id="ctc_user" name="" class="form-control">
                    </div>
				</div>
				<div class="form-group row">
					<label class="col-sm-3 text-right control-label col-form-label" for="">Date Of Joining <span class="required">*</span>
                    </label>
                    <div class="col-sm-8">
                    	<input type="text" id="date_of_joining" name="" class="form-control mydatepicker" autocomplete="off">
                    </div>
				</div>
				<div class="form-group row">
					<label class="col-sm-3 text-right control-label col-form-label" for="">Designation <span class="required">*</span>
                    </label>
                    <div class="col-sm-8">
                    	<input type="text" id="designation" name="" class="form-control">
                    </div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-warning">Save</button>
				
			</div>
		</form>

	</div>
</div>
<script src="<?php echo base_url();?>assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="<?php echo base_url();?>assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="<?php echo base_url();?>assets/libs/select2/dist/js/select2.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){  
      	$('#uploadForm').on('submit', function(e){  

			user_id = $('#user_id').val();
			company_id = $('#company_id').val();
			ctc_user = $('#ctc_user').val();
			date_of_joining = $('#date_of_joining').val();
			designation = $('#designation').val();

			var formData = new FormData();
		    formData.append('user_id',user_id);
		    formData.append('company_id',company_id);
		    formData.append('ctc_user',ctc_user);
		    formData.append('date_of_joining',date_of_joining);
		    formData.append('designation',designation);

		    $.ajax({
		        url: base_url+"Users/user_placed_info", 
		        type : "POST",
		        data: formData,
		        processData:false,
		        contentType:false,  
		        success: function(result)
		        {
		            $('#preloader').hide();   
		            if (result == 'Valid') 
		            {
		            	location.reload();
		            }
		        }
		    });
		    event.preventDefault();
      	});  
	});

	function change_company_name_in_joining()
	{
		c_category = $('#company_id option:selected').attr('c_category');
		hr_name = $('#company_id option:selected').attr('hr_name');
		hr_email = $('#company_id option:selected').attr('hr_email');
		company_location = $('#company_id option:selected').attr('company_location');


		$('#category').val(c_category);
		$('#hr_name').val(hr_name);
		$('#hr_email').val(hr_email);
		$('#company_location').val(company_location);
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
