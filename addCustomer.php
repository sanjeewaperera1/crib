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
                                              <form action= "customer_save.php" method="post" enctype="multipart/form-data">

                                                    <div class="position-relative form-group"><label for="exampleEmail" class="">First name</label>

                                                        <br>
                                            <input name="firstname" id="exampleEmail"  type="text" class="form-control"></div>



<div class="position-relative form-group"><label for="exampleEmail" class="">Lastname</label><input name="Lastname" id="exampleEmail"  type="text" class="form-control"></div>


                                                       <div class="position-relative form-group"><label for="exampleEmail" class="">Emailid</label><input name="emailid" id="exampleEmail"  type="email" class="form-control"></div>



                                                          <div class="position-relative form-group"><label for="exampleEmail" class="">Contactnumber</label><input name="contactno" id="exampleEmail"  type="text" class="form-control"></div>

                                                           <div class="position-relative form-group"><label for="exampleEmail" class="">Address</label><input name="address" id="exampleEmail"  type="text" class="form-control"></div>

                                                           <div class="position-relative form-group"><label for="exampleEmail" class="">Areas Amount</label><input name="areas"   type="text" class="form-control"></div>
                                             
                                                    <div class="position-relative form-group"><label for="exampleText" class="">Text Area</label><textarea name="text" id="exampleText" class="form-control"></textarea></div>
                                                    <div class="position-relative form-group"><label for="exampleFile" class="">File</label><input name="file" id="exampleFile" type="file" class="form-control-file">
                                                    <!--    <small class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>-->
                                                    </div>
                                                  <!--  <button class="mt-1 btn btn-primary">Submit</button>-->
                                                  <input type="submit" name="insert" value="Submit">
                                                </form>
                                            </div>
                                        </div>
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
