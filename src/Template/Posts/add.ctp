<h1>Add New Post</h1>

<?php echo $this->Form->create() ?>

  <?php echo $this->Form->control('title') ?>
  <?php echo $this->Form->control('body') ?>
  <?php echo $this->Form->control('status') ?>

  <?php echo $this->Form->button('Submit') ?>

<?php echo $this->Form->end() ?>
