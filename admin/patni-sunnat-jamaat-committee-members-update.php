
<?php include 'header.php';?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Committee Members Edit Form </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="patni-sunnat-jamaat-committee-members-table.php">Committee Members Tables</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Committee Members Edit Form</h5>
<?php

require ('config1.php');


$mem_id = $_GET ['id'];

// $sql = "SELECT m.member_id, m.name, m.contact, m.year,m.filename,c.designation_name FROM members m LEFT JOIN category c ON m.designation = c.d_id WHERE member_id={$mem_id}";

$sql = "SELECT member_id,name,contact,year,designation,filename FROM members WHERE member_id={$mem_id}";


$result = mysqli_query($conn,$sql) or die("Failed");

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){

?>

                         <!-- General Form Elements -->
                           <form action="forms-layouts-update.php" method="POST" enctype="multipart/form-data">
                           <div class="row mb-3">
                             <label for="input-hidden" class="col-sm-2 col-form-label"></label>
                               <div class="col-sm-10">
                               <input type="hidden" name="member_id" class="form-control" value="<?php echo $row['member_id'];?>" placeholder=""> 
                               </div>
                              </div>



                            <div class="row mb-3">
                              <label for="inputText" class="col-sm-2 col-form-label">Member Name</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" value="<?php echo $row['name'];?>">
                              </div>
                            </div>

                            <div class="row mb-3">
                              <label for="inputNumber" class="col-sm-2 col-form-label">Member Image</label>
                              <div class="col-sm-10">
                                <input class="form-control" type="file" id="formFile" name="uploadfile">
                                <img  src="upload/<?php echo $row['filename'];?>" height="150px">
                                <input type="hidden" name="old_image" value="<?php echo $row['filename'];?>">
                                <!-- <input class="form-control" type="file" id="formFile" name="uploadfile" value=""> -->
                              </div>
                            </div>

            
                            <div class="row mb-3">
                              <label for="inputPassword" class="col-sm-2 col-form-label">Member Contact</label>
                              <div class="col-sm-10">
                              <input type="text" class="form-control" name="contact" value="<?php echo $row['contact'];?>">
                              </div>
                            </div>
                            
                            
                            <div class="row mb-3">
                              <div class="col-sm-10">
                              <input type="hidden" class="form-control" name="year" value="<?php echo $row['year'];?>">
                              </div>
                            </div>



                    
          <div class="row mb-3">                                    
           <label for="">Member Designation</label>
           <div class="col-sm-10">           
           <select class="form-control" name="designation" aria-label="Default select example" required>
                      <option disabled> Select Category</option>
                              <?php
                                  include "config1.php";

                                  $sql1="SELECT * FROM category";


                                  $result1 = mysqli_query($conn,$sql1) or die("Query failed.");

                                  if(mysqli_num_rows($result1) > 0){
                                    
                                    while ($row1 = mysqli_fetch_assoc($result1)) {

                                        if ($row['designation'] == $row1['d_id']){
                                            $selected = "selected";
                                        }else{
                                            $selected = "";
                                        }
                                    
                                       echo "<option {$selected} value='{$row1['d_id']}'>{$row1['designation_name']}</option>";
                                  
                                  }
                              }
                              ?>
                </select>
                <input type="hidden" name="old_category" value="<?php echo $row['designation']; ?>">
         </div>
   </div> 

   
                            <!-- <div class="row mb-3">
                              <label for="inputPassword" class="col-sm-2 col-form-label">Member Designation</label>
                              <div class="col-sm-10">
                              <input type="text" class="form-control" name="designation" value="<?php echo $row['designation'];?>">
                              </div>
                            </div>
 -->


                            <div class="row mb-3">
                              <div class="col-sm-10">
                                <button type="submit" value="update" name="update" class="btn btn-primary">Save</button>
                              </div>
                            </div>
            
                          </form><!-- End General Form Elements -->
            <?php }
          }?>
            </div>
          </div>

      

        </div>

       
      </div>
    </section>

  </main><!-- End #main -->

  <?php include 'footer.php';?>

