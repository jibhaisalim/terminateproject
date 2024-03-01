
<?php include 'header.php';?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Add Event Forms</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="patni-sports-upcoming-event-table.php">Add Event Form</a></li>
          <li class="breadcrumb-item active"><a href="patni-sports-upcoming-event-add.php">Add Event Form</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section" >
      <div class="row">
        <div class="col-lg-6">
          
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
              <h5 class="card-title">Add Events</h5>
  <!-- General Form Elements -->
                <form  action="s-event-save.php" method="POST" enctype="multipart/form-data">

                    <div class="row mb-3">
                      <label for="input-hidden" class="col-sm-2 col-form-label"></label>
                       <div class="col-sm-8">
                         <input type="hidden" name="committee_id[]" class="form-control" value="6" placeholder=""> 
                       </div> 
                    </div>


                   <div class="row mb-3">
    <label for="inputText" class="col-sm-2 col-form-label">Title</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="title[]" value="" required>
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputText" class="col-sm-2 col-form-label">Sponser</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="sponser[]" value="" required>
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputText" class="col-sm-2 col-form-label">Address</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="address[]" value="" required>
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
    <div class="col-sm-8">
      <input type="date" class="form-control" name="date[]" value="" required>
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputTime" class="col-sm-2 col-form-label">Time</label>
    <div class="col-sm-8">
      <input type="time" class="form-control" name="time[]" value="" required>
    </div>
  </div>
  
  <div class="row mb-3">
    <label for="inputText" class="col-sm-2 col-form-label">Guest Name</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="guest_name[]" value="" required>
    </div>
  </div>


  <div class="row mb-3">
   <label for="inputNumber" class="col-sm-2 col-form-label">Image</label>
  <div class="col-sm-8">
  <input class="form-control" type="file" id="formFile" name="uploadfile[]" required>
                </div>
              </div>

<div class="paste-new-forms mb-2"></div>

  <a href="javascript:void(0)" class="add-more-form float-end btn btn-primary">Add More</a>
<button type="submit" name="save_multiple_data" class="btn btn-primary">Save</button>

</form>

            
                </div>
          
            </div>

        </div>

      </div>


    </section>

  </main><!-- End #main -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
 
  
 <script>

        $(document).ready(function () {

            $(document).on('click', '.remove-btn', function () {
                $(this).closest('.section').remove();
            });
            
            $(document).on('click', '.add-more-form', function () {
                $('.paste-new-forms').append(`<section class="section">\
                <h5 class="card-title">Add Committee Members</h5>\
              <div class="main-form mt-3">\  
                <div class="row">\
                <div class="row mb-3">\
 
  <input type="hidden" name="committee_id[]" class="form-control" value="6" placeholder="">\

  <div class="row mb-3">\
    <label for="inputText" class="col-sm-2 col-form-label">Title</label>\
    <div class="col-sm-8">\
      <input type="text" class="form-control" name="title[]" value="" required>\
    </div>\
  </div>\

  <div class="row mb-3">\
    <label for="inputText" class="col-sm-2 col-form-label">Sponser</label>\
    <div class="col-sm-8">\
      <input type="text" class="form-control" name="sponser[]" value="" required>\
    </div>\
  </div>\

  <div class="row mb-3">\
    <label for="inputText" class="col-sm-2 col-form-label">Address</label>\
    <div class="col-sm-8">\
      <input type="text" class="form-control" name="address[]" value="" required>\
    </div>\
  </div>\

  <div class="row mb-3">\
    <label for="inputDate" class="col-sm-2 col-form-label">Date</label>\
    <div class="col-sm-8">\
      <input type="date" class="form-control" name="date[]" value="" required>\
    </div>\
  </div>\

  <div class="row mb-3">\
    <label for="inputTime" class="col-sm-2 col-form-label">Time</label>\
    <div class="col-sm-8">\
      <input type="time" class="form-control" name="time[]" value="" required>\
    </div>\
  </div>\
  
  <div class="row mb-3">\
    <label for="inputText" class="col-sm-2 col-form-label">Guest Name</label>\
    <div class="col-sm-8">\
      <input type="text" class="form-control" name="guest_name[]" value="" required>\
    </div>\
  </div>\


                                <div class="row mb-3">\
                               <label for="inputNumber" class="col-sm-2 col-form-label">Image</label>\
                                <div class="col-sm-8">\
                                 <input class="form-control" type="file" id="formFile" name="uploadfile[]" required>\
                                </div>\
                               </div>\

                            
                                <div class="col-md-3">\
                                    <div class="form-group mb-2">\
                                        <button type="button" class="remove-btn btn btn-danger">Remove</button>\
                                    </div>\
                                </div>\  
                                </div>\
                                </div>\
                                <div>\ 
                           </section>`);
    });
 });

        
 </script>

  <?php include 'footer.php';?>
