
<?php include 'header.php';?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Committes Edit Form</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="comittes-editors.php">Committee Tables</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Committes Edit Form</h5>
<?php

require ('config1.php');


$cem_id = $_GET ['id'];

$sql = "SELECT cid,cname,description,filename FROM committees WHERE cid={$cem_id}";

$result = mysqli_query($conn,$sql) or die("Failed");

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){

?>

                         <!-- General Form Elements -->
                           <form action="comittes-layouts-update.php" method="POST" enctype="multipart/form-data">
                           <div class="row mb-3">
                             <label for="input-hidden"></label>
                               <div class="col-sm-10">
                               <input type="hidden" name="cid" class="form-control" value="<?php echo $row['cid'];?>" placeholder=""> 
                               </div>
                              </div>



                            <div class="row mb-3">
                              <label for="inputText">Member Name</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" name="cname" value="<?php echo $row['cname'];?>">
                              </div>
                            </div>


                            
                            <div class="row mb-3">
                              <label for="inputPassword">Description</label>
                              <div class="col-sm-10">
                              <textarea class="form-control" name="description" style="height: 100px"><?php echo $row['description'];?></textarea>                              </div>
                            </div>
                            

                            <div class="row mb-3">
                              <label for="inputNumber">Icon</label>
                              <div class="col-sm-10">
                                <input class="form-control" type="file" id="formFile" name="uploadfile">
                                <img  src="upload/<?php echo $row['filename'];?>" height="150px" style="padding-top: 20px;">
                                <input type="hidden" name="old_image" value="<?php echo $row['filename'];?>">
                              </div>
                            </div>
        
                            <div class="row mb-3">
                              <label class="col-sm-2 col-form-label">Save</label>
                              <div class="col-sm-10">
                                <button type="submit" value="update" name="update" class="btn btn-primary">Save Form</button>
                              </div>
                            </div>
            
                          </form>
                          <!-- End General Form Elements -->
            <?php }
          }?>
            </div>
          </div>

      

        </div>

       
      </div>
    </section>

  </main><!-- End #main -->

  <?php include 'footer.php';?>

