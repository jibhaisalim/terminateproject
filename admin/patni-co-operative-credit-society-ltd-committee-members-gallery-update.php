<?php include 'header.php';?>p

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Gallery Edit Form</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="patni-co-operative-credit-society-ltd-committee-members-gallery-table.php">Gallery Tables</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Gallery Edit Form</h5>


              <?php

require ('config1.php');


$tem_id = $_GET ['id'];

$sql = "SELECT gid,committee_id,filename FROM gallery WHERE gid={$tem_id}";

$result = mysqli_query($conn,$sql) or die("Failed");

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){

?>

              <!-- General Form Elements -->
              <form action="co-gallery-update.php" method="POST" enctype="multipart/form-data">

                <div class="row mb-3">
                   <label for="input-hidden" class="col-sm-2 col-form-label"></label>
                   <div class="col-sm-10">
                 <input type="hidden" name="gid" class="form-control" value="<?php echo $row['gid'];?>" placeholder=""> 
              </div>
           </div> 

                
                    <input type="hidden" class="form-control" name="committee_id" value="<?php echo $row['committee_id'];?>">
                


                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Image</label>
                   <div class="col-sm-10">
                   <input class="form-control" type="file" id="formFile" name="uploadfile">
                   <img  src="upload/<?php echo $row['filename'];?>" height="150px" style="padding-top: 20px;">
                  <input type="hidden" name="old_image" value="<?php echo $row['filename'];?>">
                              </div>
                            </div>


                <!-- <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Year</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="year" value="<?php echo $row['year'];?>">
                  </div>
                </div> -->
            
                  
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Save</label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" name="update">Save</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->
<?php }}?>    
            </div>
          </div>

        </div>

      </div>
    </section>

  </main><!-- End #main -->

  <?php include 'footer.php';?>
