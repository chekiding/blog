<h1>This is User</h1>

<table>
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Username</th>
  </tr>
<?php foreach ($users as $user): ?>
<tr>
  <td><?php echo $user->name?></td>
  <td><?php echo $user->email?></td>
  <td><?php echo $user->username?></td>
</tr>
<?php endforeach; ?>
</table>
