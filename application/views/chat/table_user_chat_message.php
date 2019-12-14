<?php foreach ($chat as $key){ ?>
	<?php if ($key->type == '1'){ ?>
	<div class="incoming_msg">
      <div class="received_msg">
        <div class="received_withd_msg">
          <p><?php echo $key->message; ?></p>
          <span class="time_date"> <?php echo date("g:i A", strtotime($key->created_date_time)) ?>   |  <?php echo date("d M Y", strtotime($key->created_date_time)); ?></span></div>
      </div>
    </div>
	<?php } else { ?>

    <div class="outgoing_msg">
      <div class="sent_msg">
        <p><?php echo $key->message; ?></p>
        <span class="time_date"><?php echo date("g:i A", strtotime($key->created_date_time)) ?>   |  <?php echo date("d M Y", strtotime($key->created_date_time)); ?></span></span> </div>
    </div>
<?php } }?>
