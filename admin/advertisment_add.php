<?php include 'header.php';?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Advertisment Form </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="advertisment_table.php">Advertisment Tables</a></li>
          <li class="breadcrumb-item"><a href="advertisment_add.php">Advertisment Form</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-8">
          
        <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                        unset($_SESSION['status']);
                    }
                ?>
          

          <div class="card">
            <div class="card-body">
              </h5>


              <form action="ads_insert.php" method="POST" enctype="multipart/form-data">
                        
                        <div class="main-form mt-3 border-bottom">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group mb-2">
                                        <label for="">Image</label>
                                        <input type="file" name="uploadfile" class="form-control" required>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <button type="submit" name="save_multiple_data" class="btn btn-primary">Save</button>
                    </form>


            </div>
          </div>

        </div>
    </div>
    </section>


  </main><!-- End #main -->
 
  <?php include 'footer.php';?>
