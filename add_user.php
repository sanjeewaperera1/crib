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
                                              <form name = "userform" method="post" enctype="multipart/form-data">
                                                

                                                    <div class="position-relative form-group"><label for="exampleEmail" class="">First name</label>

                                                        <br>
                                            <input name="firstname" id="exampleEmail"  type="text" class="form-control"></div>



<div class="position-relative form-group"><label for="exampleEmail" class="">Lastname</label><input name="Lastname" id="exampleEmail"  type="text" class="form-control"></div>


                                                       <div class="position-relative form-group"><label for="exampleEmail" class="">Email</label><input name="emailid" id="exampleEmail"  type="email" class="form-control"></div>
                                                          
                                                        
                                            

                                                          <div class="position-relative form-group"><label for="exampleEmail" class="">Contactnumber</label><input name="contactno" id="exampleEmail"  type="text" class="form-control"></div>

                                                           <div class="position-relative form-group"><label for="exampleEmail" class="">Address</label><input name="address" id="exampleEmail"  type="text" class="form-control"></div>

                                                          
                                               <div class="position-relative form-group"><label for="exampleEmail" class="">password</label><input name="password"  type="password" class="form-control"></div>

                                                          <div class="position-relative form-group"><label for="exampleEmail" class="">Retype password</label><input name="pass"   type="password" class="form-control"></div>
                                          
                                                  <input type="submit" name="insert" value="Submit">
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

if(isset($_POST['insert']))
{
//var_dump($_POST);exit;

// Posted Values
$fname=$_POST['firstname'];
$lname=$_POST['Lastname'];
$emailid=$_POST['emailid'];
$contactno=$_POST['contactno'];
$address=$_POST['address'];
$pass1=$_POST['password'];
$pass2=$_POST['pass'];

// Query for Insertion
$sql="INSERT INTO users(firstname,lastname,email,contact,address,password,retypepassword) VALUES(:fn,:ln,:eml,:cno,:adrss,:pass1,:pass2)";
//Prepare Query for Execution
$query = $dbh->prepare($sql);
// Bind the parameters
$query->bindParam(':fn',$fname,PDO::PARAM_STR);
$query->bindParam(':ln',$lname,PDO::PARAM_STR);
$query->bindParam(':eml',$emailid,PDO::PARAM_STR);
$query->bindParam(':cno',$contactno,PDO::PARAM_STR);
$query->bindParam(':adrss',$address,PDO::PARAM_STR);
$query->bindParam(':pass1',$pass1,PDO::PARAM_STR);
$query->bindParam(':pass2',$pass2,PDO::PARAM_STR);
// Query Execution
$query->execute();
// Check that the insertion really worked. If the last inserted id is greater than zero, the insertion worked.
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
// Message for successfull insertion
echo "<script>alert('Record inserted successfully');</script>";
echo "<script>window.location.href='view_cus.php'</script>";
}
else
{
// Message for unsuccessfull insertion
//echo "<script>alert('Something went wrong. Please try again');</script>";
//echo "<script>window.location.href='index.html'</script>";
}
}
?>


                    </div>
                    <?php include'footer.php'; ?>  
                     </div>
        </div>
    </div>
<script type="text/javascript" src="./assets/scripts/main.js"></script></body>
</html>
