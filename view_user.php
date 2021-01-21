<?php include 'main-header.php';?>
<?php include 'connection.php';?>
<body>

    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
           
<?php include'app_header_shadow.php';?>
           
               <div class="app-main">
                 
<?php include 'app-slider.php';?>

                 <div class="app-main__outer">
                    <div class="app-main__inner">
                        
                        <?php include 'app-header-text.php';?>   

                                 <div class="row">
                            <div class="col-lg-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title"></h5>
                                        <table class="mb-0 table">
                                         <thead>
<th>#</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th>Contact</th>
<th>Address</th>

<th>Edit</th>
<th>Delete</th>
</thead>
<tbody>
<?php
$sql = "SELECT firstname,lastname,email,contact,address,password,retypepassword,id from users";
//Prepare the query:
$query = $dbh->prepare($sql);
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
<!-- Display Records -->
    <tr>
    <td><?php echo htmlentities($cnt);?></td>
    <td><?php echo htmlentities($result->firstname);?></td>
    <td><?php echo htmlentities($result->lastname);?></td>
    <td><?php echo htmlentities($result->email);?></td>
    <td><?php echo htmlentities($result->contact);?></td>
    <td><?php echo htmlentities($result->address);?></td>
      
     
<td><a href="update_cus.php?id=<?php echo htmlentities($result->id);?>"><button class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></button></a></td>
<td><a href="update.php?del=<?php echo htmlentities($result->id);?>"><button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><span class="glyphicon glyphicon-trash"></span></button></a></td>
    </tr>
<?php
// for serial number increment
$cnt++;
}} ?>
</tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                           
                          
                        </div>


                    </div>
                    <?php include'footer.php'; ?>  
                     </div>
        </div>
    </div>
<script type="text/javascript" src="./assets/scripts/main.js"></script></body>
</html>
