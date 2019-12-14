<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title" id="myModalLabel">Users</h4>
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
			</button>
			
		</div>
		<div class="modal-body">
			<form class="form-horizontal">
				<div class="form-group row">
					<label class="col-md-3 col-sm-3 col-xs-12" for="first-name">Name </label>
	                <div class="col-md-3 col-sm-3 col-xs-12">
	                    <?php echo $user->name?>
	                </div>
					<label class="col-md-3 col-sm-3 col-xs-12" for="first-name">Gender </label>
	                <div class="col-md-3 col-sm-3 col-xs-12">
	                   <?php echo $user->gender; ?>
	                </div>
				</div>
				<div class="form-group row">
					<label class="col-md-3 col-sm-3 col-xs-12" for="first-name">Age </label>
	                <div class="col-md-3 col-sm-3 col-xs-12">
	                    <?php echo age_count($user->dob);?>
	                </div>
					<label class="col-md-3 col-sm-3 col-xs-12" for="first-name">Mobile </label>
	                <div class="col-md-3 col-sm-3 col-xs-12">
	                   <?php echo $user->mobile; ?>
	                </div>
				</div>
				<div class="form-group row">
					<label class="col-md-3 col-sm-3 col-xs-12" for="first-name">Marital status </label>
	                <div class="col-md-3 col-sm-3 col-xs-12">
	                    <?php echo $user->marital_status?>
	                </div>
					<label class="col-md-1 col-sm-2 col-xs-12" for="first-name">Email </label>
	                <div class="col-md-5 col-sm-4 col-xs-12">
	                   <?php echo $user->email_id; ?>
	                </div>
				</div>
				<div class="form-group row">
					<label class="col-md-3 col-sm-3 col-xs-12" for="first-name">Address </label>
	                <div class="col-md-3 col-sm-3 col-xs-12">
	                    <?php echo $user->address;?>
	                </div>
					<label class="col-md-3 col-sm-3 col-xs-12" for="first-name">Father Name </label>
	                <div class="col-md-3 col-sm-3 col-xs-12">
	                   <?php echo $user->father_name; ?>
	                </div>
				</div>
				<div class="form-group row">
					<label class="col-md-3 col-sm-3 col-xs-12" for="first-name">City </label>
	                <div class="col-md-3 col-sm-3 col-xs-12">
	                    <?php echo $user->city;?>
	                </div>
					<label class="col-md-3 col-sm-3 col-xs-12" for="first-name">State </label>
	                <div class="col-md-3 col-sm-3 col-xs-12">
	                   <?php echo $user->state; ?>
	                </div>
				</div>
				<div class="form-group row">
					<label class="col-md-3 col-sm-3 col-xs-12" for="first-name">Pin Code </label>
	                <div class="col-md-3 col-sm-3 col-xs-12">
	                    <?php echo $user->p_address;?>
	                </div>
					<label class="col-md-3 col-sm-3 col-xs-12" for="first-name">Qualification </label>
	                <div class="col-md-3 col-sm-3 col-xs-12">
	                   <?php echo $user->qualification; ?>
	                </div>
				</div>
				<div class="form-group row">
					<label class="col-md-3 col-sm-3 col-xs-12" for="first-name">Subject stream </label>
	                <div class="col-md-3 col-sm-3 col-xs-12">
	                    <?php echo $user->subject_stream;?>
	                </div>
					<label class="col-md-3 col-sm-3 col-xs-12" for="first-name">Specializations </label>
	                <div class="col-md-3 col-sm-3 col-xs-12">
	                   <?php echo $user->specializations; ?>
	                </div>
				</div>
				<div class="form-group row">
					<label class="col-md-3 col-sm-3 col-xs-12" for="first-name">Type of job </label>
	                <div class="col-md-3 col-sm-3 col-xs-12">
	                    <?php echo $user->type_of_job;?>
	                </div>
					<label class="col-md-3 col-sm-3 col-xs-12" for="first-name">Current status </label>
	                <div class="col-md-3 col-sm-3 col-xs-12">
	                   <?php echo $user->current_status; ?>
	                </div>
				</div>
				<div class="form-group row">
					<label class="col-md-3 col-sm-3 col-xs-12" for="first-name">Refer code </label>
	                <div class="col-md-3 col-sm-3 col-xs-12">
	                    <?php echo $user->refer_code;?>
	                </div>
					<label class="col-md-3 col-sm-3 col-xs-12" for="first-name">Vendor Code  </label>
	                <div class="col-md-3 col-sm-3 col-xs-12">
	                   <?php echo $user->refer_by; ?>
	                </div>
				</div>
				<div class="form-group row">
					<label class="col-md-3 col-sm-3 col-xs-12" for="first-name">Last Date </label>
	                <div class="col-md-3 col-sm-3 col-xs-12">
	                    <?php echo change_date_format_dmy($user->end_date);?>
	                </div>
				</div>
			</form>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		</div>
	</div>
</div>