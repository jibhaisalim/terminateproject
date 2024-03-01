<?php include 'header.php';?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
          <?php

require ('config1.php');

$sql= "SELECT `user_id`, `username`, `email` FROM `users` WHERE user_id='1'";

$result = mysqli_query($conn,$sql) or die("Failed");

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){

?>
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="assets/img/profile-img.png" alt="Profile" class="rounded-circle">
              <!-- <h2><?php echo $row['username'];?></h2> -->
              <h3><?php echo $_SESSION['email'];?></h3>
              <div class="social-links mt-2">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            <?php }}?>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

              
<?php 

// if(!isset($_SESSION['email'])){
//   header('location:index.php');
//   exit();
// }

// $conn = new mysqli('localhost', 'root', '', 'jamaat');


// $sql = "SELECT * FROM users WHERE id = '".$_SESSION['email']."'";

// $query = $conn->query($sql);

// $row = $query->fetch_assoc();


?>


                  <!-- Change Password Form -->
<form method="POST" action="change_password.php">

<div class="row mb-3">
  <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
  <div class="col-md-8 col-lg-9">
    <input name="old" type="password" class="form-control" id="old" value="<?php echo (isset($_SESSION['old'])) ? $_SESSION['old'] : ''; ?>">
  </div>
</div>

<div class="row mb-3">
  <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
  <div class="col-md-8 col-lg-9">
    <input name="new" type="password" class="form-control" id="new" value="<?php echo (isset($_SESSION['new'])) ? $_SESSION['new'] : ''; ?>">
  </div>
</div>

<div class="row mb-3">
  <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
  <div class="col-md-8 col-lg-9">
    <input name="retype" type="password" class="form-control" id="retype" value="<?php echo (isset($_SESSION['retype'])) ? $_SESSION['retype'] : ''; ?>">
  </div>
</div>

<div class="text-center">
  <button type="submit" name="update" id="update" class="btn btn-primary">Change Password</button>
</div>
</form>

<!-- End Change Password Form -->

<?php
				// if(isset($_SESSION['error'])){
					?>
					<!-- <div class="alert alert-danger text-center" style="margin-top:20px;"> -->
						<!-- <?php echo $_SESSION['error']; ?> -->
					<!-- </div> -->
					<?php

				// 	unset($_SESSION['error']);
				// }
				// if(isset($_SESSION['success'])){
					?>
					<!-- <div class="alert alert-success text-center" style="margin-top:20px;"> -->
						<!-- <?php echo $_SESSION['success']; ?> -->
					<!-- </div> -->
					<?php

				// 	unset($_SESSION['success']);
				// }
			?>






















                </div>

              </div>
              <!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <?php include 'footer.php';?>