<?php include 'header.php';?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Gallery Form </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="patni-sunnat-jamaat-gallery-table.php">Gallery Tables</a></li>
          <li class="breadcrumb-item"><a href="patni-sunnat-jamaat-gallery-add.php">Gallery Form</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <!-- <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Gallery Form</h5>


             
              <!-- General Form Elements -->
              <!-- <form action="forms-gallery-insert.php" method="POST" enctype="multipart/form-data"> -->
              <!-- <form id="imageForm" enctype="multipart/form-data"> -->

               <!-- <div class="row mb-3">
                   <label for="input-hidden" class="col-sm-2 col-form-label"></label>
                   <div class="col-sm-10">
                 <input type="hidden" name="gid" class="form-control" value="" placeholder=""> 
              </div>
           </div> -->

              <!-- <input type="hidden" class="form-control" name="committee_id" value="1">
                  
                <div class="row mb-3">
                <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                <div class="col-sm-10"> 
                <input type="file" class="form-control" id="formFile" name="uploadfile[]" value="uploadfile" placeholder=""> 
                  </div>
                </div> -->

                <!-- <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Year</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="year" value="">
                  </div>
                </div>
             -->
                  
                <!-- <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Submit Button</label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" name="save_multiple_data" value="Upload">Submit Form</button>
                  </div>
                </div> -->

              <!-- </form> -->
              <!-- End General Form Elements -->
    
            <!-- </div>
          </div>

        </div>

      </div> -->
    <!-- </section> -->
  

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
              <h5 class="card-title">Add Images<a href="javascript:void(0)" class="add-more-form float-end btn btn-primary">ADD MORE</a>
              </h5>


              <form action="forms-gallery-insert.php" method="POST" enctype="multipart/form-data">
                        
                        <div class="main-form mt-3 border-bottom">
                            <div class="row">
                             <input type="hidden" name="committee_id[]" value="1" class="form-control" >

                                <div class="col-md-4">
                                    <div class="form-group mb-2">
                                        <label for="">Image</label>
                                        <input type="file" name="uploadfile[]" class="form-control" required>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="paste-new-forms mb-2"></div>

                        <button type="submit" name="save_multiple_data" class="btn btn-primary">Save</button>
                    </form>


            </div>
          </div>

        </div>

      </div>


    </section>


  </main><!-- End #main -->
 

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

 <script>
        $(document).ready(function () {

            $(document).on('click', '.remove-btn', function () {
                $(this).closest('.section').remove();
            });
            
            $(document).on('click', '.add-more-form', function () {
                $('.paste-new-forms').append(`<section class="section">\
      <div class="row">\
        <div class="col-lg-10">\
        <section class="card">\
            <div class="card-body">\
              <h5 class="card-title">Add Images\
              </h5>\
              <div class="main-form mt-3 border-bottom">\ 
                                
                <div class="row">\
                                
                                <input type="hidden" name="committee_id[]" value="1" class="form-control">\
                                <div class="col-md-6">\
                                    <div class="form-group mb-2">\
                                        <label for="">Image</label>\
                                        <input type="file" name="uploadfile[]" class="form-control" required>\
                                    </div>\
                                </div>\

                                <div class="col-md-6">\
                                    <div class="form-group mb-2">\
                                        <button type="button" class="remove-btn btn btn-danger">Remove</button>\
                                    </div>\
                                </div>\
                            
                          </div>\ 
                          </div>\
                          </div> \ 
                          </div>\
                          </div>\   
                           </section>`);
            });

        });
 </script>

  <?php include 'footer.php';?>
