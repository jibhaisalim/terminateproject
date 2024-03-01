<?php session_start();?>
<?php include 'header.php';?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>About Form</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active"><a href="patni-sports-about.php">About Form</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                        unset($_SESSION['status']);
                    }
                ?>


    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">About Form</h5>
<?php

require ('config1.php');

$sql= "SELECT * FROM about WHERE sid=6";

$result = mysqli_query($conn,$sql) or die("Failed");

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){

?>
              <!-- General Form Elements -->
              <form action="s-update.php" method="POST" enctype="multipart/form-data">
                
                 <input type="hidden" name="sid" class="form-control" value="<?php echo $row['sid'];?>" placeholder=""> 
             

                <div class="row mb-3">
                  <label for="inputText">Title</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="title" value="<?php echo $row['title'];?>">
                  </div>
                </div>



                <div class="row mb-3">
                  <label for="inputNumber">Member Image</label>
                   <div class="col-sm-10">
                   <input class="form-control" type="file" id="formFile" name="uploadfile">
                   <img  src="upload/<?php echo $row['filename'];?>" height="150px" style="padding-top: 20px;">
                  <input type="hidden" name="old_image" value="<?php echo $row['filename'];?>">
                                <!-- <input class="form-control" type="file" id="formFile" name="uploadfile" value=""> -->
                              </div>
                            </div>

                <!-- <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                <div class="col-sm-10"> 
                  <input class="form-control" type="file" id="formFile" name="new-img"> 
                 <input type="hidden" name="old_img"> 
                  </div>
                </div> -->

                <div class="row mb-3">
                  <label for="inputPassword">description</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="description" style="height: 100px"><?php echo $row['description'];?></textarea>
                  </div>
                </div>
                      
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Save</label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Save</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->
    <?php }
  }else{
    echo "Result Not Found";
       
       } ?>
            </div>
          </div>

        </div>

      </div>
    </section>

  </main><!-- End #main -->

  <?php include 'footer.php';?>
