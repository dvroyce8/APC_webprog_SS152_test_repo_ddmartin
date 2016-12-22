<h2><?php echo 'My Database'; ?></h2>
 
<table border='1' cellpadding='4'>
    <tr>
        <td><strong>Full Name</strong></td>
        <td><strong>Nickname</strong></td>
        <td><strong>Email Address</strong></td>
		<td><strong>Home Address</strong></td>
		<td><strong>Gender</strong></td>
		<td><strong>Cellphone Number</strong></td>
		<td><strong>Comments</strong></td>
		<td><strong>Action</strong></td>
    </tr>
<?php foreach ($ex6 as $ex6_item): ?>
        <tr>
            <td><?php echo $ex6_item['full_name']; ?></td>
			<td><?php echo $ex6_item['nick_name']; ?></td>
			<td><?php echo $ex6_item['email_address']; ?></td>
			<td><?php echo $ex6_item['home_address']; ?></td>
			<td><?php echo $ex6_item['gender']; ?></td>
			<td><?php echo $ex6_item['cellphone_number']; ?></td>
            <td><?php echo $ex6_item['comments']; ?></td>
            <td>
                <a href="<?php echo site_url('ex6/'.$ex6_item['user_id']); ?>">View</a> | 
                <a href="<?php echo site_url('ex6/edit/'.$ex6_item['user_id']); ?>">Edit</a> |
                <a href="<?php echo site_url('ex6/delete/'.$ex6_item['user_id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
            </td>
        </tr>
<?php endforeach; ?>
</table>