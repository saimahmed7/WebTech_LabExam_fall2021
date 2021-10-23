<!DOCTYPE HTML>  
<html>
<head>
personal details
</head>
<body>  

<?php
// define variables and set to empty values
$usernameErr = $passwordErr = $fullnameErr = $mobilenoErr = date of birth "";
$username = $password = $fullname = $mobileno = $dateofbirth= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $usernameErr = "UserName is required";
  } else {
    $username = test_input($_POST["username"]);
    // check if username only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$username)) {
      $usernameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
    // check if password address is well-formed
    if (!filter_var($password, FILTER_VALIDATE_PASSWORD)) {
      $passwordErr = "Invalid password format";
    }
  }
     if (empty($_POST["fullname"])) {
    $fullname = "";
  } else {
    $fullname = test_input($_POST["fullname"]);
  }
 
  }

  if (empty($_POST["mobileno"])) {
    $mobile no = "";
  } else {
    $mobileno= test_input($_POST["mobileno"]);
  }

  if (empty($_POST["dateofbirth"])) {
    $dateofbirthErr = "dateofbirthis required";
  } else {
    $dateofbirth = test_input($_POST["dateofbirth"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation </h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
 User Name: <input type="text" name="username" value="<?php echo $username;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Password: <input type="text" name="password" value="<?php echo $password;?>">
  <span class="error">* <?php echo $passwordErr;?></span>
  <br><br>
  Mobile no: <input type="text" name="mobileno" value="<?php echo $mobileno;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Date of birth: <textarea name="dateofbirth" rows="5" cols="40"><?php echo $dateofbirth;?></textarea>
  <br><br>
  
  <input type="submit" name="next" value="next">  
</form>


}
    

</body>
</html>