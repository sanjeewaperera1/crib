<?php
// include database connection file
require_once'connection.php';
if(isset($_POST['update']))
{

	//var_dump($_POST);exit();																				
// Get the userid
$userid=intval($_GET['id']);
// Posted Values
$fname=$_POST['firstname'];
$lname=$_POST['Lastname'];
$emailid=$_POST['emailid'];
$contactno=$_POST['contactno'];
$address=$_POST['address'];
// Query for Updation
$sql="update add_customer set firstname=:fn, lastname=:ln,email=:eml,contact=:cno,address=:adrss where id=:uid";
//Prepare Query for Execution
$query = $dbh->prepare($sql);
// Bind the parameters
$query->bindParam(':fn',$fname,PDO::PARAM_STR);
$query->bindParam(':ln',$lname,PDO::PARAM_STR);
$query->bindParam(':eml',$emailid,PDO::PARAM_STR);
$query->bindParam(':cno',$contactno,PDO::PARAM_STR);
$query->bindParam(':adrss',$address,PDO::PARAM_STR);
$query->bindParam(':uid',$userid,PDO::PARAM_STR);
// Query Execution
$query->execute();
// Mesage after updation
//echo "<script>alert('Record Updated successfully');</script>";
// Code for redirection
//echo "<script>window.location.href='index.php'</script>";
}



// include database connection file

// Code for record deletion
if(isset($_REQUEST['del']))
{
//Get row id
$uid=intval($_GET['del']);
//Qyery for deletion
$sql = "delete from add_customer WHERE  id=:id";
// Prepare query for execution
$query = $dbh->prepare($sql);
// bind the parameters
$query-> bindParam(':id',$uid, PDO::PARAM_STR);
// Query Execution
$query -> execute();
// Mesage after updation
//echo "<script>alert('Record Updated successfully');</script>";
// Code for redirection
echo "<script>window.location.href='view_cus.php'</script>";
}
?>