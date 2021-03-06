</DOCTYPE html>
<html>
<head>
	<title>Exercise4</title>
<style>
.error {color: red;}
</style>
</head>
<body>
<?php

$FnameErr = $NnameErr = $EmailErr = $genderErr = $cellphoneErr = "";
$Fname = $Nname = $Email = $address = $gender = $cellphone = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["Fname"])) {
    $FnameErr = "Name is required";
  } else {
    $Fname = test_input($_POST["Fname"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$Fname)) {
      $FnameErr = "Only letters and white space allowed"; 
    }
  }
  
  if ( empty($_POST["Nname"]))	{
	$NnameErr  = "Name is required";
  }	else{
	$Nname = test_input($_POST["Nname"]);
	 if (!preg_match("/^[a-zA-Z ]*$/",$Nname)) {
      $NnameErrnameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["Email"])) {
    $EmailErr = "Email is required";
  } else {
    $Email = test_input($_POST["Email"]);
    // check if e-mail address is well-formed
    if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
      $EmailErr = "Invalid email format"; 
    }
  }
  
  if (empty($_POST["address"])) {
    $address = "";
  } else {
    $address = test_input($_POST["address"]);
  }
  
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  
  if ( empty($_POST["cellphone"]))	{
	$cellphoneErr  = "Cellphone Number is required";
  }	else{
	$cellphoneErre = test_input($_POST["cellphone"]);
	 if (!preg_match("/^[1-9][0-9]*$/",$cellphoneErre)) {
      $cellphoneErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }
  
}

function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>

<h1>INFORMATION</h1>
<p><span class="error">* required.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	Full Name: <input type="text" name="Fname" value="<?php echo $Fname;?>">
  <span class="error">* <?php echo $FnameErr;?></span>
  <br><br>
	Nickname: <input type="text" name="Nname" value="<?php echo $Nname;?>">
  <span class="error">* <?php echo $NnameErr;?></span>
  <br><br>
	Email: <input type="text" name="Email" value="<?php echo $Email;?>">
  <span class="error">* <?php echo $EmailErr;?></span>
  <br><br>
	Home Address: <textarea name="address" rows="3" cols="40"><?php echo $address;?></textarea>
  <br><br>
	Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="Female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="Male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
	Cellphone Number: <input type="text" name="cellphone" value="<?php echo $cellphone;?>">
  <span class="error">* <?php echo $cellphoneErr;?></span>
  <br><br>
	Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  <br><br>
	<input type="submit" b\name="submit" value="Submit">
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $Fname;
echo "<br>";
echo $Nname;
echo "<br>";
echo $Email;
echo "<br>";
echo $address;
echo "<br>";
echo $gender;
echo "<br>";
echo $cellphone;
echo "<br>";
echo $comment;
?>

</body>
</html>