<h2><?php echo 'Simple CRUD'; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('ex6/edit/'.$ex6_item['user_id']); ?>
    <table>
        <tr>
            <td><label for="full_name">Full Name</label></td>
            <td><input type="input" name="full_name" size="100" value="<?php echo $ex6_item['full_name'] ?>" /></td>
        </tr>
		<tr>
            <td><label for="nick_name">Nickname</label></td>
            <td><input type="input" name="nick_name" size="25" value="<?php echo $ex6_item['nick_name'] ?>" /></td>
        </tr>
		<tr>
            <td><label for="email_address">Email Address</label></td>
            <td><input type="input" name="email_address" size="45" value="<?php echo $ex6_item['email_address'] ?>" /></td>
        </tr>
		<tr>
            <td><label for="home_address">Home Address</label></td>
            <td><input type="input" name="home_address" size="100" value="<?php echo $ex6_item['home_address'] ?>" /></td>
        </tr>
		<tr>
            <td><label for="gender">Gender</label></td>
            <td><input type="input" name="gender" size="20" value="<?php echo $ex6_item['gender'] ?>" /></td>
        </tr>
		<tr>
            <td><label for="cellphone_number">Cellphone Number</label></td>
            <td><input type="input" name="cellphone_number" size="11" value="<?php echo $ex6_item['cellphone_number'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="comments">Comments</label></td>
            <td><textarea name="comments" rows="10" cols="40"><?php echo $ex6_item['comments'] ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Edit data entry" /></td>
        </tr>
    </table>
</form>