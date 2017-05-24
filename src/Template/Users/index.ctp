<h1>This is User</h1>

<table>
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Username</th>
    <th>Action</th>
  </tr>
<?php foreach ($users as $user): ?>
<tr>
  <td><?php echo $user->name?></td>
  <td><?php echo $user->email?></td>
  <td><?php echo $user->username?></td>
  <td>
    <?php echo $this->Html->link('View',['action'=>'view',$user->id]) ?>
    <?php echo $this->Html->link('Edit',['action'=>'edit',$user->id]) ?>
    <?php echo $this->Html->link('Delete',['action'=>'delete',$user->id]) ?>
  </td>
</tr>
<?php endforeach; ?>
<?php echo $this->Html->link('Add New User',['action'=>'add']) ?>
</table>
