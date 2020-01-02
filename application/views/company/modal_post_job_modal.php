
<div class="modal-dialog">
	<div class="modal-content">
		<form id="uploadForm" data-parsley-validate class="form-horizontal form-label-left">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">Add Company</h4>
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
				</button>	
			</div>
			<div class="modal-body">
				<div class="form-group row">
					<label class="col-sm-4 text-right control-label col-form-label" for="first-name"> Job Profile  <span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <input type="text" id="job_profile" required="required" class="form-control datepicker col-md-10 col-xs-12" required>
                    </div>
				</div>	
				<div class="form-group row">
					<label class="col-sm-4 text-right control-label col-form-label" for="first-name">Job Description <span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <input type="text" id="job_discription" required="required" class="form-control datepicker col-md-10 col-xs-12" required>
                    </div>
				</div>
				<div class="form-group row">
					<label class="col-sm-4 text-right control-label col-form-label" for="first-name">Experience <span class="required">*</span>
                    </label>
                    &nbsp;&nbsp;<div class="col-md-8 col-sm-8 col-xs-12 row">
                        <input type="text" id="experience" required="required" class="form-control datepicker col-md-10 col-xs-12" required>
                        <!-- &nbsp;&nbsp; to &nbsp;&nbsp;
                        <input type="text" id="experience2" required="required" class="form-control datepicker col-md-2 col-xs-6"  required>
                        &nbsp;&nbsp;<select class="select2 form-control custom-select col-md-4 col-xs-8">
                            <option>Select</option>
                            <option value="AK">Alaska</option>
                            <option value="HI">Hawaii</option>
                             <option value="HI">Hawaii</option>
                              <option value="HI">Hawaii</option>
                        </select> -->
                    </div>
				</div>
				
				<div class="form-group row">
					<label class="col-sm-4 text-right control-label col-form-label" for="first-name">Salary  <span class="required">*</span>
                    </label>
                    &nbsp;&nbsp;<div class="col-md-8 col-sm-8 col-xs-12 row">

                        <input type="text" id="salary" required="required" class="form-control datepicker col-md-10 col-xs-12"  required>&nbsp;&nbsp;<!--  to &nbsp;&nbsp;
                        <input type="text" id="salary2" required="required" class="form-control datepicker col-md-4 col-xs-6"  required> -->
                    </div>
				</div>
				<div class="form-group row">
					<label class="col-sm-4 text-right control-label col-form-label" for="first-name">Language<span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <input type="text" id="language" required="required" class="form-control datepicker col-md-10 col-xs-12" required>
                    </div>
				</div>
				<div class="form-group row">
					<label class="col-sm-4 text-right control-label col-form-label" for="first-name"> Qualification <span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <input type="text" id="qualification" required="required" class="form-control datepicker col-md-10 col-xs-12" required>
                    </div>
				</div>
				<div class="form-group row">
					<label class="col-sm-4 text-right control-label col-form-label" for="first-name"> Job Location <span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <input type="text" id="job_location" required="required" class="form-control datepicker col-md-10 col-xs-12" required>
                    </div>
				</div>
				<div class="form-group row">
					<label class="col-sm-4 text-right control-label col-form-label" for="first-name"> Job Category <span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <input type="text" id="job_category" required="required" class="form-control datepicker col-md-10 col-xs-12" required>
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
<script type="text/javascript">
	$(document).ready(function(){  
      	$('#uploadForm').on('submit', function(e){  
  	     	job_profile = $('#job_profile').val();
			job_discription = $('#job_discription').val();
			experience = $('#experience').val();
			salary = $('#salary').val();
			language = $('#language').val();
			qualification = $('#qualification').val();
			job_location = $('#job_location').val();
			job_category = $('#job_category').val();

			var formData = new FormData();
		    formData.append('job_profile',job_profile);
		    formData.append('job_discription',job_discription);
		    formData.append('experience',experience);
		    formData.append('salary',salary);
		    formData.append('language',language);
		    formData.append('qualification',qualification);
		    formData.append('job_location',job_location);
		    formData.append('job_category',job_category);

		    $.ajax({
		        url: base_url+"Company_dashboard/save_job", 
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