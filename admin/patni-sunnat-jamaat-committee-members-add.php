
<?php include 'header.php';?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Committee Members Add Form</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="patni-sunnat-jamaat-committee-members-table.php">Committee Members Tables</a></li>
          <li class="breadcrumb-item active"><a href="patni-sunnat-jamaat-committee-members-add.php">Members Add Form</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->  
    <section class="section" >
      <div class="row">
        <div class="col-lg-5">
          
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
              <h5 class="card-title">Add Committee Members</h5>
            <!-- General Form Elements -->
            <form action="forms-layouts-save.php" method="POST" enctype="multipart/form-data">

             <input type="hidden" name="committee_id[]" value="1" class="form-control">

          <div class="row mb-3">                                    
           <label for="">Select year</label>
           <div class="col-sm-10">
           <select class="form-select" name="year[]" id="yearSelect" aria-label="Default select example" required>
             <option selected>Open this select Year</option>
             <?php 
              $current_year = date("Y");
              $str_year = '';
              for($ij = 1950;$ij <= $current_year; $ij++)
              {
                $str_year.= '<option value = "'.$ij.'">'.$ij.'</option>';
              ?>
              <option value = '<?php echo $ij; ?>'><?php echo $ij; ?></option>
              <?php
              }
             ?>
           </select>                                    
         </div>
   </div>


   <div class="row mb-3">                                    
           <label for="">Member Name</label>       
           <div class="col-sm-10">
           <input type="text" name="name[]" class="form-control"  required>
       </div>
   </div>

   <div class="row mb-3">                                    
           <label for="">Phone Number</label>
         <div class="col-sm-10">
           <input type="text" name="contact[]" class="form-control" required maxlength="11">
       </div>
   </div>


   <div class="row mb-3">                                    
           <label for="">Member Designation</label>
           <div class="col-sm-10">
           <select class="form-select" name="designation[]"  aria-label="Default select example" required>
                            <option disabled> Select Category</option>
                              <?php
                                  include "config1.php";

                                  $sql="SELECT * FROM category";


                                  $result = mysqli_query($conn,$sql) or die("Query failed.");

                                  if(mysqli_num_rows($result) > 0){
                                    
                                    while ($row = mysqli_fetch_assoc($result)) {
                                       echo "<option value='{$row['d_id']}'>{$row['designation_name']}</option>";
                                    }

                                  }
                                  
                              ?>
                        </select>
         </div>
   </div>


   <div class="row mb-3">                                    
           <label for="">Image</label>
           <div class="col-sm-10">
           <input type="file" name="uploadfile[]" class="form-control" required>
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
        $(function() {
            $("input[name='contact[]']").on('input', function(e) {
                $(this).val($(this).val().replace(/[^0-9]/g, ''));
            });
        });
    </script>
  
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
 
                      <input type="hidden" name="committee_id[]" value="1" class="form-control">\         
                                    <div class="row mb-3">\                                   
                                      <label for="">Select year</label>\
                                      <div class="col-sm-10">\
                                        <select class="form-select" name="year[]" id="selectedYear" aria-label="Default select example" required>\
                                        <option selected>Open this select Year</option>\
                                        <?php echo $str_year;?>
                                    </select>\                                    
                                   </div>\
                                </div>\

                                

                                      <div class="row mb-3">\
                                        <label for="">Member Name</label>\
                                        <div class="col-sm-10">\
                                        <input type="text" name="name[]" class="form-control" required>\
                                    </div>\
                                </div>\

                                      <div class="row mb-3">\
                                        <label for="">Phone Number</label>\
                                        <div class="col-sm-10">\
                                        <input type="text" name="contact[]" class="form-control">\
                                    </div>\
                                </div>\

          <div class="row mb-3">\                                    
           <label for="">Member Designation</label>\
           <div class="col-sm-10">\
           <select class="form-select" name="designation[]">\
                               <option disabled> Select Category</option>\
                              <?php
                                  include "config1.php";

                                  $sql="SELECT * FROM category";


                                  $result = mysqli_query($conn,$sql) or die("Query failed.");

                                  if(mysqli_num_rows($result) > 0){
                                    
                                    while ($row = mysqli_fetch_assoc($result)) {
                                       echo "<option value='{$row['d_id']}'>{$row['designation_name']}</option>";
                                    }

                                  }
                                  
                              ?>
                          </select>\
         </div>\
   </div>\
                                
                                <div class="row mb-3">\
                                        <label for="">Image</label>\
                                        <div class="col-sm-10">\
                                        <input type="file" name="uploadfile[]" class="form-control" required>\
                                    </div>\
                                </div>\

                            
                                <div class="col-md-3">\
                                    <div class="form-group mb-2">\
                                        <button type="button" class="remove-btn btn btn-danger">Remove</button>\
                                    </div>\
                                
                            </div>\ 
                                </div>\
                                </div>\
                                </div>\
                           </section>`);
    });
 });

        
 </script>

<!-- <script>
  
  function setYearList(yearSelect)
  {
    var selectElement = document.getElementById(yearSelect);
    
    var currentYear = new Date().getFullYear();
    var startYear = 1950;

    for (var year = startYear; year <= currentYear; year++) {
      var option = document.createElement("option");
      option.value = year;
      option.text = year;
      selectElement.appendChild(option);
    }
  }
</script> -->

<?php include 'footer.php';?>
