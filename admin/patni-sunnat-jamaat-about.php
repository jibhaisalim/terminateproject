<?php session_start();?>
<?php include 'header.php';?>


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>About Form</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active"><a href="patni-sunnat-jamaat-about.php">About Form</a></li>
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
        <div class="col-lg-5">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">About Form</h5>
<?php

require ('config1.php');

$sql= "SELECT * FROM about WHERE sid=1";

$result = mysqli_query($conn,$sql) or die("Failed");

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){

?>
              <!-- General Form Elements -->
              <form action="save-update.php" method="POST" enctype="multipart/form-data">

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
                                <input class="form-control" type="file" id="formFile" name="filename">
                                <img  src="upload/<?php echo $row['filename'];?>" height="150px" style="padding-top: 20px;">
                                <input type="hidden" name="old_image" value="<?php echo $row['filename'];?>">
                              </div>
                            </div>


           

                <div class="row mb-3">
                  <label for="inputPassword">description</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="description" style="height: 100px"><?php echo $row['description'];?></textarea>
                  </div>
                </div> 

  
              <!-- Quill Editor Full -->
              <!-- <p>Quill editor with full toolset</p>
                <div class="quill-editor-full">
                <textarea class="form-control" name="description" style="height: 100px"><?php echo $row['description'];?></textarea>
              </div> -->
              <!-- End Quill Editor Full -->

           

   

















                      
                <div class="row mb-3">
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
