<!DOCTYPE HTML>  
<html>
<head>
Education
</head>
<body>  

<?php
include('../model/page1.php');
include('../model/cv.php');
// define variables and set to empty values
$universityErr = $degreeErr = $majorErr = $resultErr = passingyear "";
$university = $degree= $major = $result = $passing year= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["university"])) {
    $universityErr = "University is required";
  } else {
    $username = test_input($_POST["university"]);
    // check if username only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$username)) {
      $universityErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["degree"])) {
    $degreeErr = "degree is required";
  } else {
    $degree = test_input($_POST["degree"]);
    // check if password address is well-formed
    if (!filter_var($degree, FILTER_VALIDATE_DEGREE)) {
      $degreeErr = "Invalid degree format";
    }
  }
     if (empty($_POST["major"])) {
    $major = "";
  } else {
    $major = test_input($_POST["major"]);
  }
 
  }

  if (empty($_POST["result"])) {
    $result = "";
  } else {
    $result= test_input($_POST["result"]);
  }

  if (empty($_POST["passing year"])) {
    $passing yearErr = "passing year required";
  } else {
    $passingyear = test_input($_POST["passingyear"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
 University: <input type="text" name="university" value="<?php echo $university;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Degree: <input type="text" name="degree" value="<?php echo $degree;?>">
  <span class="error">* <?php echo $passwordErr;?></span>
  <br><br>
  Major: <input type="text" name="major" value="<?php echo $major;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Passing year: <textarea name="passingyear
  " rows="5" cols="40"><?php echo $passingyear;?></textarea>
  <br><br>
  
  <input type="submit" name="submit" value="submit">  
</form>
$target_dir = "../sources/";
$target_file = $target_dir . $_FILES["filetoupload"]["name"];

if (!move_uploaded_file($_FILES["filetoupload"]["tmp_name"], $target_file)) {
       echo "Sorry, there was an error uploading your file.";
       
} 

if($university=="" || $degree=="" || $result=="" || $passing year=="")
{
    echo "failed.";
}
else
{
    $connection = new db();
    $conobj=$connection->OpenCon();

    $userQuery=$connection->InsertCourse($conobj,"$Name,$Institution name, $Program, $Course Completed);

    if($userQuery)
    {
        echo " Successfully done. Want to add more? If not then Go back";
    }
    else
    {
        echo "Failed. Please try again ";
    }

</body>
</html>