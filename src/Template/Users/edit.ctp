<h1>Edit User</h1>

<?php echo $this->Form->create($user) ?>

  <?php echo $this->Form->control('name') ?>
  <?php echo $this->Form->control('username') ?>
  <?php echo $this->Form->control('password') ?>
  <?php echo $this->Form->control('email') ?>
  <?php echo $this->Form->control('status') ?>

  <?php echo $this->Form->button('Submit') ?>

<?php echo $this->Form->end() ?>
