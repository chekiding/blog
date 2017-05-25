<h1>This is Post</h1>

<table>
  <tr>
    <th>No</th>
    <th>Title</th>
    <th>Body</th>
    <th>User</th>
    <th>Action</th>
  </tr>

<?php $no = 1 ?>

<?php foreach ($posts as $post): ?>
<tr>
  <td><?php echo $no?></td>
  <td><?php echo $post->title?></td>
  <td><?php echo $post->body?></td>
  <td><?php echo $post->user->name?></td>
  <td>
    <?php echo $this->Html->link('View',['action'=>'view',$post->id]) ?>
    <?php echo $this->Html->link('Edit',['action'=>'edit',$post->id]) ?>
    <?php echo $this->Html->link('Delete',['action'=>'delete',$post->id],['confirm'=>'Sure?']) ?>
  </td>
</tr>
<?php $no++ ?>
<?php endforeach; ?>
<?php echo $this->Html->link('Add New Post',['action'=>'add']) ?>
</table>
