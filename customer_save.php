<?php
// include database connection file
require_once'connection.php';

if(isset($_POST['insert']))
{
//var_dump($_POST);exit;

// Posted Values
$fname=$_POST['firstname'];
$lname=$_POST['Lastname'];
$emailid=$_POST['emailid'];
$contactno=$_POST['contactno'];
$address=$_POST['address'];
$areas=$_POST['areas'];
// Query for Insertion
$sql="INSERT INTO add_customer(firstname,lastname,email,contact,address,areas) VALUES(:fn,:ln,:eml,:cno,:adrss,:areas)";
//Prepare Query for Execution
$query = $dbh->prepare($sql);
// Bind the parameters
$query->bindParam(':fn',$fname,PDO::PARAM_STR);
$query->bindParam(':ln',$lname,PDO::PARAM_STR);
$query->bindParam(':eml',$emailid,PDO::PARAM_STR);
$query->bindParam(':cno',$contactno,PDO::PARAM_STR);
$query->bindParam(':adrss',$address,PDO::PARAM_STR);
$query->bindParam(':areas',$areas,PDO::PARAM_STR);
// Query Execution
$query->execute();
// Check that the insertion really worked. If the last inserted id is greater than zero, the insertion worked.
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
// Message for successfull insertion
//echo "<script>alert('Record inserted successfully');</script>";
echo "<script>window.location.href='view_cus.php'</script>";
}
else
{
// Message for unsuccessfull insertion
echo "<script>alert('Something went wrong. Please try again');</script>";
//echo "<script>window.location.href='index.html'</script>";
}
}
?>