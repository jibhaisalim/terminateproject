<?php 

include "config1.php";
session_start();   

    if(!isset($_SESSION["email"])){
        header("Location: ../admin/pages-error-404.php");
        die();

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Patni Sunnat jammat Dashboard</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon1.png" rel="icon">
  <link href="assets/img/apple-touch-icon1.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet"> 
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet"> 
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet"> 
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">  
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">  

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="pages-login.php" class="logo d-flex align-items-center">
        <img src="assets/img/patnilogo.png" alt="">
        <span class="d-none d-lg-block">Patni Sunnat Jamaat</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

      
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.png" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            
          <?php

require ('config1.php');


$sql= "SELECT `user_id`, `username`, `email` FROM `users` WHERE user_id='1'";

$result = mysqli_query($conn,$sql) or die("Failed");


if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){

?>
          
                
          <li class="dropdown-header">
              <!-- <h6><?php echo $row['username'];?></h6> -->
              <span><?php echo $_SESSION['email'];?></span>
            </li>
         <?php }}?>
            <li>
              <hr class="dropdown-divider">
            </li>

            <!-- <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li> -->
            <!-- <li>
              <hr class="dropdown-divider">
            </li> -->

            <!-- <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li> -->
           
            <!-- <li>
              <hr class="dropdown-divider">
            </li> -->

            <!-- <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li> -->
           
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Patni Sunnat Jamaat</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">

          <li>
            <a href="patni-sunnat-jamaat-about.php">
              <i class="bi bi-circle"></i><span>About</span>
            </a>
          </li>

         <li>
            <a href="patni-sunnat-jamaat-pdf-table.php">
              <i class="bi bi-circle"></i><span>Report</span>
            </a>
          </li>  

          <li>
            <a href="advertisment_table.php">
              <i class="bi bi-circle"></i><span>Advertisments</span>
            </a>
          </li>

          <li>
            <a href="event-edit.php">
              <i class="bi bi-circle"></i><span>UpComing Events</span>
            </a>
          </li>

          <li>
            <a href="patni-sunnat-jamaat-committee-members-table.php?year=2023">
              <i class="bi bi-circle"></i><span>Committee Members</span>
            </a>
          </li>


          <li>
            <a href="birth_table.php">
              <i class="bi bi-circle"></i><span>Birth Registration Table</span>
            </a>
          </li>

          <li>
            <a href="death_table.php">
              <i class="bi bi-circle"></i><span>Death Registration Table</span>
            </a>
          </li>

          <li>
            <a href="patni-sunnat-jamaat-gallery-table.php">
              <i class="bi bi-circle"></i><span>Gallery</span>
            </a>
          </li>

          <li>
            <a href="patni-sunnat-jamaat-contact.php">
              <i class="bi bi-circle"></i><span>Contact Us</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Patni Co-operative Credit Society Ltd</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="patni-co-operative-credit-society-about.php" >
              <i class="bi bi-circle"></i><span>About</span>
            </a>
          </li>

          <li>
            <a href="patni-co-operative-credit-society-ltd-report-pdf-table.php">
              <i class="bi bi-circle"></i><span>Report</span>
            </a>
          </li> 

          <li>
            <a href="advertisment_table.php">
              <i class="bi bi-circle"></i><span>Advertisments</span>
            </a>
          </li>

          <li>
            <a href="patni-co-operative-credit-society-ltd-upcoming-event-table.php">
              <i class="bi bi-circle"></i><span>UpComing Events</span>
            </a>
          </li>
          
          <li>
            <a href="patni-co-operative-credit-society-ltd-committee-members-table.php?year=2023">
              <i class="bi bi-circle"></i><span>Committee Members</span>
            </a>
          </li>
          <li>
            <a href="patni-co-operative-credit-society-ltd-committee-members-gallery-table.php">
              <i class="bi bi-circle"></i><span>Gallery</span>
            </a>
          </li>
          <li>
            <a href="patni-co-operative-credit-society-ltd-contact.php">
              <i class="bi bi-circle"></i><span>Contact Us</span>
            </a>
          </li>      
          </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Patni Education Trust</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="patni-education-trust-about.php">
              <i class="bi bi-circle"></i><span>About</span>
            </a>
          </li>
           <li>
            <a href="patni-education-trust-report-table.php">
              <i class="bi bi-circle"></i><span>Report</span>
            </a>
          </li> 
          <li>
            <a href="advertisment_table.php">
              <i class="bi bi-circle"></i><span>Advertisments</span>
            </a>
          </li>

          <li>
            <a href="patni-education-trust-upcoming-event-table.php">
              <i class="bi bi-circle"></i><span>UpComing Events</span>
            </a>
          </li>
          
          <li>
            <a href="patni-education-trust-committee-members-table.php?year=2023">
              <i class="bi bi-circle"></i><span>Committee Members</span>
            </a>
          </li>

          <li>
            <a href="student-table.php">
              <i class="bi bi-circle"></i><span>Student Registration Table</span>
            </a>
          </li>
          
          
          
          <li>
            <a href="patni-education-trust-gallery-table.php">
              <i class="bi bi-circle"></i><span>Gallery</span>
            </a>
          </li>
          <li>
            <a href="patni-education-trust-contact.php">
              <i class="bi bi-circle"></i><span>Contact Us</span>
            </a>
          </li>      
        </ul>
      </li><!-- End Tables Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Patni Housing Society</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="patni-housing-society-about.php">
              <i class="bi bi-circle"></i><span>About</span>
            </a>
          </li>
           <li>
            <a href="patni-housing-society-report-table.php">
              <i class="bi bi-circle"></i><span>Report</span>
            </a>
          </li>
          <li> 
            <a href="advertisment_table.php">
              <i class="bi bi-circle"></i><span>Advertisments</span>
            </a>
          </li>

          <li>
            <a href="patni-housing-society-upcoming-event-table.php">
              <i class="bi bi-circle"></i><span>UpComing Events</span>
            </a>
          </li>
          
          <li>
            <a href="patni-housing-society-committee-members-table.php?year=2023">
              <i class="bi bi-circle"></i><span>Committee Members</span>
            </a>
          </li>

          <li>
            <a href="patni-housing-society-gallery-table.php">
              <i class="bi bi-circle"></i><span>Gallery</span>
            </a>
          </li>
          <li>
            <a href="patni-housing-society-contact.php">
              <i class="bi bi-circle"></i><span>Contact Us</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#new-tables" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Qamar Free Library
          </span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="new-tables" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="qamar-free-library-about.php">
              <i class="bi bi-circle"></i><span>About</span>
            </a>
          </li>
          <li>
            <a href="qamar-free-library-report-table.php">
              <i class="bi bi-circle"></i><span>Report</span>
            </a>
          </li> 
          <li>
            <a href="advertisment_table.php">
              <i class="bi bi-circle"></i><span>Advertisments</span>
            </a>
          </li>

          <li>
            <a href="qamar-free-library-upcoming-event-table.php">
              <i class="bi bi-circle"></i><span>UpComing Events</span>
            </a>
          </li>
          
          <li>
            <a href="qamar-free-library-committee-members-table.php?year=2023">
              <i class="bi bi-circle"></i><span>Committee Members</span>
            </a>
          </li>
          

          <li>
            <a href="qamar_table.php">
              <i class="bi bi-circle"></i><span>Qamar Membership Application</span>
            </a>
          </li>


          <li>
            <a href="qamar-free-library-gallery-table.php">
              <i class="bi bi-circle"></i><span>Gallery</span>
            </a>
          </li>
          
          <li>
            <a href="qamar-free-library-contact.php">
              <i class="bi bi-circle"></i><span>Contact Us</span>
            </a>
          </li>
         </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#mew-tables" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Patni Sports</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="mew-tables" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="patni-sports-about.php">
              <i class="bi bi-circle"></i><span>About</span>
            </a>
          </li>
          <li>
            <a href="patni-sport-report-table.php">
              <i class="bi bi-circle"></i><span>Report</span>
            </a>
          </li> 
          <li>
            <a href="advertisment_table.php">
              <i class="bi bi-circle"></i><span>Advertisments</span>
            </a>
          </li>

          <li>
            <a href="patni-sports-upcoming-event-table.php">
              <i class="bi bi-circle"></i><span>UpComing Events</span>
            </a>
          </li>
          
          <li>
            <a href="patni-sports-committee-members-table.php?year=2023">
              <i class="bi bi-circle"></i><span>Committee Members</span>
            </a>
          </li>
          <li>
            <a href="patni-sports-gallery-table.php">
              <i class="bi bi-circle"></i><span>Gallery</span>
            </a>
          </li>
          <li>
            <a href="patni-sports-contact.php">
              <i class="bi bi-circle"></i><span>Contact Us</span>
            </a>
          </li>  
        </ul>
      </li><!-- End Tables Nav -->






      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.php">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-faq.html">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li> -->
      <!-- End F.A.Q Page Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.php">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li> -->
      <!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.php">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.php">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-error-404.php">
          <i class="bi bi-dash-circle"></i>
          <span>Error 404</span>
        </a>
      </li> -->
      <!-- End Error 404 Page Nav -->
<!-- 
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.html">
          <i class="bi bi-file-earmark"></i>
          <span>Blank</span>
        </a>
      </li> -->
      <!-- End Blank Page Nav -->

    </ul>

  </aside><!-- End Sidebar--><!-- End Sidebar-->