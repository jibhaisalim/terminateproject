
<?php include 'header.php';?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Committee Members Add Form</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="qamar-free-library-committee-members-table.php">Committee Members Tables</a></li>
          <li class="breadcrumb-item active"><a href="qamar-free-library-committee-members-add.php">Members Add Form</a></li>
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
            <form action="q-member-save.php" method="POST" enctype="multipart/form-data">

             <input type="hidden" name="committee_id[]" value="5" class="form-control">

   <div class="row mb-3">                                    
           <label for="">Select year</label>
           <div class="col-sm-10">
           <select class="form-select" name="year[]" id="yearSelect" aria-label="Default select example" required>
             <option selected>Open this select Year</option>
             <!-- <option value="2021">2021</option>
             <option value="2022">2022</option>
             <option value="2023">2023</option> -->
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
 
                      <input type="hidden" name="committee_id[]" value="5" class="form-control">\         
                                    <div class="row mb-3">\                                   
                                      <label for="">Select year</label>\
                                      <div class="col-sm-10">\
                                        <select class="form-select" name="year[]" id="selectedYear"" aria-label="Default select example" required>\
                                        <option selected>Open this select Year</option>\
                                        <option value="1950">1950</option>\
                                        <option value="1951">1951</option>\
                                        <option value="1952">1952</option>\
                                        <option value="1953">1953</option>\
                                        <option value="1954">1954</option>\
                                        <option value="1955">1955</option>\
                                        <option value="1956">1956</option>\
                                        <option value="1957">1957</option>\
                                        <option value="1958">1958</option>\
                                        <option value="1959">1959</option>\
                                        <option value="1960">1960</option>\
                                        <option value="1961">1961</option>\
                                        <option value="1962">1962</option>\
                                        <option value="1963">1963</option>\
                                        <option value="1964">1964</option>\
                                        <option value="1965">1965</option>\
                                        <option value="1966">1966</option>\
                                        <option value="1967">1967</option>\
                                        <option value="1968">1968</option>\
                                        <option value="1969">1969</option>\
                                        <option value="1970">1970</option>\
                                        <option value="1971">1971</option>\
                                        <option value="1972">1972</option>\
                                        <option value="1973">1973</option>\
                                        <option value="1974">1974</option>\
                                        <option value="1975">1975</option>\
                                        <option value="1976">1976</option>\
                                        <option value="1977">1977</option>\
                                        <option value="1978">1978</option>\
                                        <option value="1979">1979</option>\
                                        <option value="1980">1980</option>\
                                        <option value="1981">1981</option>\
                                        <option value="1982">1982</option>\
                                        <option value="1983">1983</option>\
                                        <option value="1984">1984</option>\
                                        <option value="1985">1985</option>\
                                        <option value="1986">1986</option>\
                                        <option value="1987">1987</option>\
                                        <option value="1988">1988</option>\
                                        <option value="1989">1989</option>\
                                        <option value="1990">1990</option>\
                                        <option value="1991">1991</option>\
                                        <option value="1992">1992</option>\
                                        <option value="1993">1993</option>\
                                        <option value="1994">1994</option>\
                                        <option value="1995">1995</option>\
                                        <option value="1996">1996</option>\
                                        <option value="1997">1997</option>\
                                        <option value="1998">1998</option>\
                                        <option value="1999">1999</option>\
                                        <option value="2000">2000</option>\
                                        <option value="2001">2001</option>\
                                        <option value="2002">2002</option>\
                                        <option value="2003">2003</option>\
                                        <option value="2004">2004</option>\
                                        <option value="2005">2005</option>\
                                        <option value="2006">2006</option>\
                                        <option value="2007">2007</option>\
                                        <option value="2008">2008</option>\
                                        <option value="2009">2009</option>\
                                        <option value="2010">2010</option>\
                                        <option value="2011">2011</option>\
                                        <option value="2012">2012</option>\
                                        <option value="2013">2013</option>\
                                        <option value="2014">2014</option>\
                                        <option value="2015">2015</option>\
                                        <option value="2016">2016</option>\
                                        <option value="2017">2017</option>\
                                        <option value="2018">2018</option>\
                                        <option value="2019">2019</option>\
                                        <option value="2020">2020</option>\
                                        <option value="2021">2021</option>\
                                        <option value="2022">2022</option>\
                                        <option value="2023">2023</option>\
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
           <select class="form-select" name="designation[]"  aria-label="Default select example" required>\
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

<script>
  
  document.addEventListener("DOMContentLoaded", function() {
  var selectElement = document.getElementById("yearSelect");

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
