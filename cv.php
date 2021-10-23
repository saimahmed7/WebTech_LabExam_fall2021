<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = 'CV';
 //create connection
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }

 function InsertUser($conn,$university,$degree,$major, $result, $passingyear)
 {
$result = $conn->query("INSERT INTO EMPLOYEE( university,degree,major,result,passingyear) Values ('$University', '$Degree','$Major', '$Result','$Passinyear')");
return $result;
 
 }
 






 //check user and pass
 function CheckUser($conn,$University,$Degree, $Major, $Passinyear)
 {
$result = $conn->query("SELECT * FROM  $table WHERE university='$University' AND degree='$Degree' AND result=' $Result' AND Passinyear= '$Passinyear'
	");
 return $result;
 }
//show the table
 function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
 return $result;
 }


function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>