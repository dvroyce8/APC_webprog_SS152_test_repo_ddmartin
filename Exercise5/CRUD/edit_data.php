<?php
include_once 'dbconfig.php';
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM users WHERE user_id=".$_GET['edit_id'];
 $result_set=mysqli_query($con, $sql_query);
 $fetched_row=mysqli_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
 // variables for input data
 $full_name = $_POST['full_name'];
 $nick_name = $_POST['nick_name'];
 $email_address = $_POST['email_address'];
 $home_address = $_POST['home_address'];
 $gender = $_POST['gender'];
 $cellphone_number = $_POST['cellphone_number'];
 $comments = $_POST['comments'];
 // variables for input data

 // sql query for update data into database
 $sql_query = "UPDATE users SET full_name='$full_name',nick_name='$nick_name',email_address='$email_address',home_address='$home_address',gender='$gender',cellphone_number='$cellphone_number',comments='$comments' WHERE user_id=".$_GET['edit_id'];
 // sql query for update data into database
 
 // sql query execution function
 if(mysqli_query($con, $sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Updated Successfully');
  window.location.href='index.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while updating data');
  </script>
  <?php
 }
 // sql query execution function
}
if(isset($_POST['btn-cancel']))
{
 header("Location: index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CRUD Operations With PHP and MySql - By Cleartuts</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
 <div id="content">
    <label>CRUD Operations With PHP and MySql - By Cleartuts</label>
    </div>
</div>

<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td><input type="text" name="full_name" placeholder="First Name" value="<?php echo $fetched_row['full_name']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="nick_name" placeholder="Nickname" value="<?php echo $fetched_row['nick_name']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="email_address" placeholder="Email Address" value="<?php echo $fetched_row['email_address']; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="home_address" placeholder="Home Address" value="<?php echo $fetched_row['home_address']; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="gender" placeholder="Gender" value="<?php echo $fetched_row['gender']; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="cellphone_number" placeholder="Cellphone Number" value="<?php echo $fetched_row['cellphone_number']; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="comments" placeholder="Comments" value="<?php echo $fetched_row['comments']; ?>" required /></td>
    </tr>
    <tr>
    <td>
    <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
    <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
    </td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>