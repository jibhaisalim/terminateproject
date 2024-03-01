<?php include 'header.php';?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Committee Report Form</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="patni-housing-society-report-table.php">Report Tables</a></li>
          <li class="breadcrumb-item active"><a href="patni-housing-society-pdf-add.php">Add Report</a></li>
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
              <h5 class="card-title">Committee Report table</h5>
            <!-- General Form Elements -->
            <form action="hou_report_insert.php" method="POST" enctype="multipart/form-data">

             <input type="hidden" name="committee_id[]" value="4" class="form-control">

          <div class="row mb-3">                                    
           <label for="">Select year</label>
           <div class="col-sm-10">
           <select class="form-select" name="year[]" id="yearSelect" aria-label="Default select example" required>
             <option selected>Open this select Year</option>
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
  
  document.addEventListener("DOMContentLoaded", function() {
  var selectElement = document.getElementById("yearSelect");
  $('#select option').prop('selected', function () {
      return this.defaultSelected;
  });
  var currentYear = new Date().getFullYear();
  var startYear = 1950;

  for (var year = startYear; year <= currentYear; year++) {
    var option = document.createElement("option");
    option.value = year;
    option.text = year;
    selectElement.appendChild(option);
  }
});
</script>

<?php include 'footer.php';?>