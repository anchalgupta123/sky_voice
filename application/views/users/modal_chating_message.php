<div class="modal-dialog">
	<div class="modal-content">
		<form id="form_message">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">Message For All Users</h4>
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<label>Message </label>
                    <textarea class="form-control" id="message_for_all"></textarea>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="sumbit" class="btn btn-primary">Send</button>
			</div>
		</form>
	</div>
</div>

<script type="text/javascript">
	$( "#form_message" ).submit(function( event ) {
	  	send_message_to_all();
	  	// alert();
	  	event.preventDefault();
	});
</script>