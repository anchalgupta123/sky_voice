<label><input type="checkbox" name="" id="select_all">Select All</label> <button class="btn btn-warning" onclick="open_message_modal();">Send Message</button><br><br>
<div class="table-responsive">    
<table id="datatable" class="table table-striped table-bordered">
  <thead>
    <tr>
      <th>#</th>
      <th>Name</th>
      <th>Gender</th>
      <th>Age</th>
      <th>Mobile</th>
      <th>User Refer Code</th>
      <th>Marital status</th>
      <th>City</th>
      <th>State</th>
      <th>Email Id</th>
      <th>Payment</th>
      <th>Postcode</th>
      <th>Qualification</th>
      <th>Subject stream</th>
      <th>Specializations</th>
      <th>Referer</th>
      <th>Referer by</th>
      <th>ID Card Type</th>
      <th>ID Card Number</th>
      <th>Status</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($users as $key){ ?>
    <tr>
      <td><input type="checkbox" name="" class="user_ids" value="<?php echo $key->user_id; ?>"></td>
      <td><a href="javascript:void(0);" onclick="show_user_detail_modal(<?php echo $key->id; ?>);"><?php echo $key->name; ?></a></td>
      <td><?php echo $key->gender; ?></td>
      <td><?php echo calculateAge($key->dob); ?></td>
      <td><?php echo $key->mobile; ?></td>
      <td><?php echo $key->refer_code; ?></td>
      <td><?php echo $key->marital_status; ?></td>
      <td><?php echo $key->city; ?></td>
      <td><?php echo $key->state; ?></td>
      <td><?php echo $key->email_id; ?></td>
      <td><?php echo ($key->payment_status == NULL || $key->payment_status == '' ? 'N/A' : $key->payment_status == '0' ? 'Not Done' : 'Done'); ?></td>
      <td><?php echo $key->p_address; ?></td>
      <td><?php echo $key->qualification; ?></td>
      <td><?php echo $key->subject_stream; ?></td>
      <td><?php echo $key->specializations; ?></td>
      <td><?php echo ($key->refer_by == '' ? 'No' : 'Yes'); ?></td>
      <td><?php echo $key->refer_by;?></td>
      <td><?php echo $key->identity; ?></td>
      <td><?php echo $key->id_number; ?></td>
      <td><?php echo 'Active'; ?></td>

    </tr>
    <?php } ?>
  </tbody>
</table>
</div>
<script type="text/javascript">
 $(document).ready(function() {
    $('#datatable').DataTable();
  });
  function open_message_modal()
  {
    user_ids = '';
    $( ".user_ids" ).each(function( index ) {
        if ($(this).prop("checked") == true) 
        {
            user_ids = user_ids+ ','+ $(this).val();
        }
    });

    user_ids = user_ids.replace(/^,/, '');
    if (user_ids == '') 
    {
      alert('Please select any user for send message!');
      return false;
    }
    else{
      $.ajax({
        url: base_url+"Users/get_message_for_chat_modal", 
        success: function(result)
        {
          $('#modal_report').html(result);
          $('#modal_report').modal('show');
        }
      });
    }

    
  }
  $("#select_all").change(function(){
    if ($(this).prop("checked") == true)
    {
      $('.user_ids').prop('checked', true);
    }
    else
    {
      $('.user_ids').prop('checked', false);

    }
  });
</script>