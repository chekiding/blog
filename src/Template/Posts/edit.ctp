<h1>Edit Post</h1>

<?php echo $this->Form->create() ?>


  <?php echo $this->Form->control('title') ?>
  <?php echo $this->Form->control('body') ?>
  <?php echo $this->Form->control('user_id') ?>

  <?php echo $this->Form->button('Submit') ?>

<?php echo $this->Form->end() ?>
