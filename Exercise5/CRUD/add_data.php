<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
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
 
 // sql query for inserting data into database
 
        $sql_query = "INSERT INTO users(full_name,nick_name,email_address,home_address,gender,cellphone_number,comments) VALUES('$full_name','$nick_name','$email_address','$home_address','$gender','$cellphone_number','$comments')";
 mysqli_query($con, $sql_query);
 //echo $sql_query;
        
        // sql query for inserting data into database
 
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Exercise 5</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
 <div id="content">
    <label>Exercise 5</label>
    </div>
</div>
<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td align="center"><a href="index.php">back to main page</a></td>
    </tr>
    <tr>
    <td><input type="text" name="full_name" placeholder="Full Name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="nick_name" placeholder="Nickname" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="email_address" placeholder="Email Address" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="home_address" placeholder="Home Address" /></td>
    </tr>
	<tr>
    <td><input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="Female"/>Female<br> 
	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="Male"/>Male</td>
    </tr>
	<tr>
    <td><input type="text" name="cellphone_number" placeholder="Cell Phone Number" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="comments" placeholder="Comments" /></td>
    </tr>
    <tr>
    <td><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>