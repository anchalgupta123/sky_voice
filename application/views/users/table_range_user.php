<div class="card">
  <div class="card-body">
    <h5 class="card-title"></h5>
     <div class="table-responsive">
        <table id="zero_config" class="table table-striped table-bordered">
          <thead>
          <tr>
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
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function() {
    $('#zero_config').DataTable();
  }); 
</script>