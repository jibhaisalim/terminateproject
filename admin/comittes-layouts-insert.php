<?php include 'header.php';?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Add Committee Form </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="comittes-editors.php">Committee Tables</a></li>
          <li class="breadcrumb-item active"><a href="comittes-layouts-insert.php">Add Committee</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Committee Form</h5>

              <!-- Multi Columns Form -->
              <form class="row g-3" action="comittes-layouts-save.php" method="POST" enctype="multipart/form-data">
                
                        



                            <div class="row mb-3">
                              <label for="inputText">Committee Name</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" name="cname" value="" required>
                              </div>
                            </div>


                            
                            <div class="row mb-3">
                              <label for="inputPassword">Description</label>
                              <div class="col-sm-10">
                              <textarea class="form-control" name="description" style="height: 100px" required></textarea>                              </div>
                            </div>
                            

                            <div class="row mb-3">
                              <label for="inputNumber">Icon</label>
                              <div class="col-sm-10">
                                <input class="form-control" type="file" id="formFile" name="uploadfile" required>
                              </div>
                            </div>

            
        
                            <div class="row mb-3">
                              <label class="col-sm-2 col-form-label">Save</label>
                              <div class="col-sm-10">
                                <button type="submit" value="update" name="submit" class="btn btn-primary" required>Save</button>
                              </div>
                            </div>
            
                        </form>
                        <!-- End Multi Columns Form -->

            </div>
          </div>

        </div>

      </div>
    </section>

  </main><!-- End #main -->

  <?php include 'footer.php';?>