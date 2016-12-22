<h2><?php echo $title; ?></h2>
 
<table border='1' cellpadding='4'>
    <tr>
        <td><strong>Title</strong></td>
        <td><strong>Content</strong></td>
        <td><strong>Action</strong></td>
    </tr>
<?php foreach ($ex6 as $ex6_item): ?>
        <tr>
            <td><?php echo $ex6_item['title']; ?></td>
            <td><?php echo $ex6_item['text']; ?></td>
            <td>
                <a href="<?php echo site_url('ex6/'.$ex6_item['slug']); ?>">View</a> |
                <a href="<?php echo site_url('ex6/edit/'.$ex6_item['id']); ?>">Edit</a> |
                <a href="<?php echo site_url('ex6/delete/'.$ex6_item['id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
            </td>
        </tr>
<?php endforeach; ?>
</table>