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

$FnameErr = $NnameErr = $EmailErr = $addressErr = $genderErr = $cellphoneErr = $commentErr = "";
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
	<input type="submit" b\name="submit" value="Submit">
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $Fname;
?>

</body>
</html>