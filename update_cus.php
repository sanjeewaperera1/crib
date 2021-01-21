<?php include 'main-header.php';?>
<body>

    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
           
<?php include'app_header_shadow.php';?>
           
               <div class="app-main">
                 
<?php include 'app-slider.php';?>

                 <div class="app-main__outer">
                    <div class="app-main__inner">
                        
                        <?php include 'app-header-text.php';?>   
                     
<div class="tab-content">
                            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><!--<h5 class="card-title">Controls Types</h5>-->



<?php

include "connection.php";
// Get the userid
$userid=intval($_GET['id']);
$sql = "SELECT firstname,lastname,email,contact,address,areas,id from add_customer where id=:uid";
//Prepare the query:
$query = $dbh->prepare($sql);
//Bind the parameters
$query->bindParam(':uid',$userid,PDO::PARAM_STR);
//Execute the query:
$query->execute();
//Assign the data which you pulled from the database (in the preceding step) to a variable.
$results=$query->fetchAll(PDO::FETCH_OBJ);
// For serial number initialization
$cnt=1;
if($query->rowCount() > 0)
{
//In case that the query returned at least one record, we can echo the records within a foreach loop:
foreach($results as $result)
{
?>







                                             <form name ="insertrecord" method="post">

                                                    <div class="position-relative form-group"><label for="exampleEmail" class="">First name</label>

                                                        <br>
                                            <input name="firstname" id="exampleEmail"  type="text" value="<?php echo htmlentities($result->firstname);?>" class="form-control"></div>



<div class="position-relative form-group"><label for="exampleEmail" class="">Lastname</label><input name="Lastname" id="exampleEmail"  type="text" value="<?php echo htmlentities($result->lastname);?>" class="form-control"></div>


                                                       <div class="position-relative form-group"><label for="exampleEmail" class="">Emailid</label><input name="emailid" id="exampleEmail"  type="email"  value="<?php echo htmlentities($result->email);?>" class="form-control"></div>



                                                          <div class="position-relative form-group"><label for="exampleEmail" class="">Contactnumber</label><input name="contactno" id="exampleEmail"  type="text"  value="<?php echo htmlentities($result->contact);?>" class="form-control"></div>

                                                           <div class="position-relative form-group"><label for="exampleEmail" class="">Address</label><input name="address" id="exampleEmail"  type="text"  value="<?php echo htmlentities($result->address);?>"class="form-control"></div>

                                                           <div class="position-relative form-group"><label for="exampleEmail" class="">Areas Amount</label><input name="areas"   type="text"  value="<?php echo htmlentities($result->areas);?>" class="form-control"></div>

                                                           
                                                           <div class="form-group">
  <label for="sel1">Finish loan:</label>
  <select class="form-control" id="sel1">
    <option>yes</option>
    <option>no</option>
   
  </select>
</div>
                                             
                                                    <div class="position-relative form-group"><label for="exampleText" class="">Text Area</label><textarea name="text" id="exampleText" class="form-control"></textarea></div>
                                                    <div class="position-relative form-group"><label for="exampleFile" class="">File</label><input name="file" id="exampleFile" type="file" class="form-control-file">
                                                    <!--    <small class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>-->
                                                    </div>

                                                    <?php }} ?>
                                                  <!--  <button class="mt-1 btn btn-primary">Submit</button>-->
                                                  <input type="submit" name="update" value="update">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                        </div>
                    </div>
                       
                </div>

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
echo "<script>alert('Record Updated successfully');</script>";
// Code for redirection
echo "<script>window.location.href='view_cus.php'</script>";
}
?>

<?php
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
echo "<script>alert('Record Delete successfully');</script>";
// Code for redirection
echo "<script>window.location.href='view_cus.php'</script>";
}
?>

                    </div>
                    <?php include'footer.php'; ?>  
                     </div>
        </div>
    </div>
<script type="text/javascript" src="./assets/scripts/main.js"></script></body>
</html>
