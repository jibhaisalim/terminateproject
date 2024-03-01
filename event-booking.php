<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Event Registration Form</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <!-- <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet"> -->
  <!-- <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet"> -->
  <!-- <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet"> -->
  <!-- <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet"> -->

  <!-- Template Main CSS File -->
  <link href="assets/css/style6.css" rel="stylesheet">

 
</head>
<style>
.myDiv{
	display:none;
}  
#showOne{
    padding:10px;
}
#showTwo{
    padding:10px;
}
</style>
















<body>

  <!-- ======= Header ======= -->
  <main id="main" class="main">

    <div class="pagetitle">
      <nav>
        <a href="" class="logo d-flex align-items-center w-auto">
        <img src="assets/img/logo.png" alt="">
          <span class="d-none d-lg-block">Event Registration Form</span>
        </a>
      </nav>
    </div>
    
    <!-- End Page Title -->

            
          

          

    <section class="section">
      <div class="row">
        <div class="col-lg-10">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Event Registration Form</h5>
                
             
            <div class="row mb-3">
              <div class="col-sm-8">
                <input type="radio" name="demo" value="One"/> Member
                <input type="radio" name="demo" value="Two"/> Non Member
              </div>
            </div>

             
<div id="showOne" class="myDiv">
	<form id="MyForm" class="row g-3" action="" method="post">
            <div class="col-md-6">
              <label for="inputText" class="form-label">PPAN Number</label>
              <input type="text" name="cname" class="form-control" id="inputstudent" required>
            </div>
            <div class="col-12">
              <button type="submit" name="save_multiple_data" class="btn btn-primary">Verify Ppan Number</button>
            </div>
	</form>
</div>

<div id="showTwo" class="myDiv">
	<form id="MyForm"  class="row g-3" action="" method="post">













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
           <label for="inputDate" class="col-sm-2 col-form-label">Member Designation</label>
           <div class="col-sm-10">
           <select class="form-select" name="designation[]"  aria-label="Default select example" required>
                            <option disabled> Select Category</option>
                              <?php
                                  include "config.php";

                                  $sql="SELECT * FROM floor";


                                  $result = mysqli_query($conn,$sql) or die("Query failed.");

                                  if(mysqli_num_rows($result) > 0){
                                    
                                    while ($row = mysqli_fetch_assoc($result)) {
                                       echo "<option value='{$row['id']}'>{$row['floors']}</option>";
                                    }

                                  }
                                  
                              ?>
                        </select>
         </div>
   </div>
	</form>
</div>
              
            </div>
          </div>

        </div>

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Patni Sunnat Jamaat</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://affiniq.com/">Affiniq</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script>

$(document).ready(function(){
    $('input[type="radio"]').click(function(){
    	var demovalue = $(this).val(); 
        $("div.myDiv").hide();
        $("#show"+demovalue).show();
    });
});
  </script>
  <!-- Vendor JS Files -->
  <!-- <script src="assets/vendor/apexcharts/apexcharts.min.js"></script> -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- <script src="assets/vendor/chart.js/chart.umd.js"></script> -->
  <!-- <script src="assets/vendor/echarts/echarts.min.js"></script> -->
  <!-- <script src="assets/vendor/quill/quill.min.js"></script> -->
  <!-- <script src="assets/vendor/simple-datatables/simple-datatables.js"></script> -->
  <!-- <script src="assets/vendor/tinymce/tinymce.min.js"></script> -->
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>