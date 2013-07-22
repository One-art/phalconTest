<?php echo $aUser->name; ?>

<ul>
<?php foreach ($userList as $user) { ?>
  <li><?php echo $this->escaper->escapeHtml($user->name); ?></li>
  <li><?php echo $this->escaper->escapeHtml($user->password); ?></li>
  <li><?php echo date('d-m-Y', $user->time_register); ?></li>
  <?php if ($user->time_last_visit == !$empty) { ?>
        <li><?php echo date('d-m-Y', $user->time_last_visit); ?></li>
    <?php } else { ?>
        <li>not entry</li>
  <?php } ?>
<?php } ?>
</ul>