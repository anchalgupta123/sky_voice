<div class="modal-dialog">
	<div class="modal-content">
		<form id="uploadForm" data-parsley-validate class="form-horizontal form-label-left">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">Verified Users</h4>
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
				</button>
				
			</div>
			<div class="modal-body">
				<div class="form-group row">
					<label class="col-sm-3 text-right control-label col-form-label" for="first-name">User Name <span class="required">*</span>
                    </label>
                    <div class="col-sm-9">
                        <input type="text" id="name" required="required" value="<?php echo $name; ?>" class="form-control datepicker col-md-9 col-xs-12" disabled>
                        <input type="hidden" value="<?php echo $id;?>" id="user_id" name="">
                    </div>
				</div>	
				<div class="form-group row">
					<label class="col-sm-3 text-right control-label col-form-label" for="first-name">Verified <span class="required">*</span>
                    </label>
                    <div class="col-md-4 col-sm-2 col-xs-12">
                        <select required="required" class="form-control col-md-7 col-xs-12" id="status">
                        	<option value="0">NO</option>
                        	<option value="1">YES</option>
                        </select>
                    </div>
				</div>	
				<div class="form-group row">
					<label class="col-sm-3 text-right control-label col-form-label" for="first-name">Select Month <span class="required">*</span>
                    </label>
                    <div class="col-sm-7">
                        <select  class="form-control" id="month" disabled>
                        	<option value="1">12 Month</option>
                        	<option value="2">24 Month</option>
                        	<option value="3">36 Month</option>
                        </select>
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
  	     	user_id = $('#user_id').val();
			status = $('#status').val();
			month = $('#month').val();

			$.ajax({
		        url: base_url+"Users/update_users", 
		        type : "POST",
		        data: {user_id : user_id , status : status , month : month},
		        success: function(result)
		        {		        	
		            if (result == 'Valid') 
		            {
		            	location.reload();
		            }
		        }
		    });
		    event.preventDefault();
      	});  
      	$('#status').change(function(event) {

      		if($(this).val() == 0) 
      		{
      			$('#month').attr('disabled',true);
      			$('#month').val(1);
      		}
      		if($(this).val() == 1) 
      		{
      			$('#month').attr('disabled',false);
      		}
      	});
	});
</script>					