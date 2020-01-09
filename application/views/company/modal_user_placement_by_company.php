<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

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
					<label class="col-sm-4 text-right control-label col-form-label" for="first-name"> User Name 
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <input type="text"  required="required" value="<?php echo $company_placement_user->name;?>" class="form-control  col-md-10 col-xs-12" required>
                        <input type="hidden" id="user_resume_id" required="required" value="<?php echo $company_placement_user->id;?>" class="form-control  col-md-10 col-xs-12" required>
                    </div>
				</div>	
				<div class="form-group row">
					<label class="col-sm-4 text-right control-label col-form-label" for="first-name">User Mobile No. 
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <input type="text"  value="<?php echo $company_placement_user->mobile;?>" required="required" class="form-control  col-md-10 col-xs-12" required>
                    </div>
				</div>
				
				<div class="form-group row">
					<label class="col-sm-4 text-right control-label col-form-label" for="first-name">User Email Id
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <input type="text"  value="<?php echo $company_placement_user->email_id;?>" required="required" class="form-control  col-md-10 col-xs-12" required>
                    </div>
				</div>
				<div class="form-group row">
					<label class="col-sm-4 text-right control-label col-form-label" for="first-name">Date Of Joining <span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <input type="date" id="date_of_joining" value="" required="required" class="form-control col-md-10 col-xs-12" required>
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
</script>
<script src="<?php echo base_url();?>assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){  
      	$('#uploadForm').on('submit', function(e){  
  	     	user_resume_id = $('#user_resume_id').val();
			date_of_joining = $('#date_of_joining').val();
		
			var formData = new FormData();
		    formData.append('user_resume_id',user_resume_id);
		    formData.append('date_of_joining',date_of_joining);

		    $.ajax({
		        url: base_url+"Company_dashboard/update_placement", 
		        type : "POST",
		        data: formData,
		        processData:false,
		        contentType:false,  
		        success: function(result)
		        { 
		            if (result == 'Valid') 
		            {
		            	alert('User Successfully Placed In Your Company');
		            	location.reload();
		            }
		        }
		    });

		    event.preventDefault();
      	});  

	});
	
</script>					