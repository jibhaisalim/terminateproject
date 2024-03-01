<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Death Registration Form</title>
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

<body>

  <!-- ======= Header ======= -->
  <main id="main" class="main">

  <div class="pagetitle">
      <nav>
        <a href="" class="logo d-flex align-items-center w-auto">
        <img src="assets/img/logo.png" alt="">
          <span class="d-none d-lg-block">Death Registration Form</span>
        </a>
      </nav>
    </div>
    <!-- End Page Title -->

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

    <section class="section">
      <div class="row">
        <div class="col-lg-10">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Death  Registration Form</h5>

 <form class="row g-3" action="death_save.php" method="POST" >


 <div class="col-md-6">
    <label for="inputText" class="form-label">Deceased's Name (મરનાર નું નામ)</label>
    <input type="text" name="dname" class="form-control" id="inputstudent" required>
  </div>
  

<div class="col-md-6">
    <label for="inputText" class="form-label">Father Name (વાલિદ નું નામ)</label>
    <input type="text" name="fname" class="form-control" id="inputlastname" required>
  </div>
  

  
<div class="col-md-6">
    <label for="inputText" class="form-label">Grandfather Name (દાદા નું નામ)</label>
    <input type="text" name="gname" class="form-control" id="inputname" required>
  </div>
  

  <div class="col-md-6">
    <label for="inputText" class="form-label">Surname (અટક)</label>
    <input type="text" name="surname" class="form-control" id="inputname" required>
  </div>
  
  <div class="col-md-6">
    <label for="inputText" class="form-label">Age (ઉંમર)</label>
    <input type="text" name="age" class="form-control" id="inputname" required>
  </div>



  <div class="col-md-6">
    <label for="inputText" class="form-label">Address (ઠેકાણુ)</label>
    <input type="text" name="address" class="form-control" id="inputname" required>
  </div>
  
 <div class="col-12">
    <label for="inputAddress" class="form-label"> Death Place (મરણ સ્થળ)</label>
    <input type="text" name="daddress" class="form-control" id="inputAddress"  required>
  </div>

  <div class="col-12">
    <label for="inputAddress2" class="form-label">Death Date (મરણ તારીખ)</label>
    <input type="date" name="ddate" class="form-control" id="inputAddress2" required>
  </div>

  <div class="col-12">
    <label for="inputAddress2" class="form-label">Place of Burial (દફન કર્યા ની જગ્યા- કબ્રસ્તાન)</label>
    <input type="text" name="bplace" class="form-control" id="inputAddress2" required>
  </div>


  <div class="col-12">
    <label for="inputAddress" class="form-label">PPAN Number</label>
    <input type="text" name="ppan" class="form-control" id="inputAddress" required>
  </div>

  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck" required>
      <label class="form-check-label" for="gridCheck">
        I Pledge that all The Information Provided Above Are True To The Best of My Knowledge.
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" name="save_multiple_data" class="btn btn-primary">Save Now</button>
  </div>
</form>
              
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