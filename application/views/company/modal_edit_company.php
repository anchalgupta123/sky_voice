<div class="modal-dialog">
	<div class="modal-content">
		<form id="uploadForm" data-parsley-validate class="form-horizontal form-label-left">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">Update Company</h4>
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="form-group row">
					<label class="control-label col-md-4 col-sm-4 col-xs-12" for="first-name">Company name <span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <input type="text" id="name" required="required" class="form-control datepicker col-md-10 col-xs-12" value="<?php echo $company->name ?>" required>
                    </div>
				</div>	
				<div class="form-group row">
					<label class="control-label col-md-4 col-sm-4 col-xs-12" for="first-name">Location <span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <input type="text" id="company_location" required="required" class="form-control datepicker col-md-10 col-xs-12" value="<?php echo $company->company_location ?>" required>
                    </div>
				</div>
				<div class="form-group row">
					<label class="control-label col-md-4 col-sm-4 col-xs-12" for="first-name">HR Name <span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <input type="text" id="hr_name" required="required" class="form-control datepicker col-md-10 col-xs-12" value="<?php echo $company->hr_name ?>" required>
                    </div>
				</div>
				<div class="form-group row">
					<label class="control-label col-md-4 col-sm-4 col-xs-12" for="first-name">HR Email <span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <input type="text" id="hr_email" required="required" class="form-control datepicker col-md-10 col-xs-12" value="<?php echo $company->hr_email ?>" required>
                    </div>
				</div>
				<div class="form-group row">
					<label class="control-label col-md-4 col-sm-4 col-xs-12" for="first-name">HR Contact Number<span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <input type="text" id="hr_contact_no" required="required" class="form-control datepicker col-md-10 col-xs-12" value="<?php echo $company->hr_contact_no ?>" required>
                    </div>
				</div>
				<div class="form-group row">
					<label class="control-label col-md-4 col-sm-4 col-xs-12" for="first-name"> Unique ID <span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <input type="text" id="unique_id" required="required" class="form-control datepicker col-md-10 col-xs-12" value="<?php echo $company->unique_id ?>" required>
                    </div>
				</div>
				<div class="form-group row">
					<label class="control-label col-md-4 col-sm-4 col-xs-12" for="first-name"> Category <span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <input type="text" id="category" required="required" class="form-control datepicker col-md-10 col-xs-12" value="<?php echo $company->category ?>" required>
                        <input type="hidden" value="<?php echo $company->id; ?>" id="company_id">
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

<script type="text/javascript">
	$(document).ready(function(){  
      	$('#uploadForm').on('submit', function(e){  
  	     	company_id = $('#company_id').val();
  	     	name = $('#name').val();
			company_location = $('#company_location').val();
			hr_name = $('#hr_name').val();
			hr_email = $('#hr_email').val();
			hr_contact_no = $('#hr_contact_no').val();
			unique_id = $('#unique_id').val();
			category = $('#category').val();

			var formData = new FormData();
		    formData.append('company_id',company_id);
		    formData.append('name',name);
		    formData.append('company_location',company_location);
		    formData.append('hr_name',hr_name);
		    formData.append('hr_email',hr_email);
		    formData.append('hr_contact_no',hr_contact_no);
		    formData.append('unique_id',unique_id);
		    formData.append('category',category);

		    $.ajax({
		        url: base_url+"Company/update_company", 
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
</script>					